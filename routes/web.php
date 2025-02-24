<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Eko Apriliyani', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Eko Apriliyani',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ipsam, labore
            architecto ut explicabo
            ipsum, illo omnis dolorem ullam suscipit velit fugit unde recusandae enim assumenda vitae, placeat veniam
            animi.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Eko Apriliyani',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ab corporis repellat
            rerum incidunt nemo fuga, quis, veritatis excepturi ea facilis consectetur. Magnam ea exercitationem modi
            doloribus hic eius sunt!'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Eko Apriliyani',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ipsam, labore
            architecto ut explicabo
            ipsum, illo omnis dolorem ullam suscipit velit fugit unde recusandae enim assumenda vitae, placeat veniam
            animi.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Eko Apriliyani',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ab corporis repellat
            rerum incidunt nemo fuga, quis, veritatis excepturi ea facilis consectetur. Magnam ea exercitationem modi
            doloribus hic eius sunt!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
