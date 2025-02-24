<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
