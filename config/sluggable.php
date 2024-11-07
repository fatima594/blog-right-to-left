<?php

use App\Helpers\SlugHelper;

return [

    /*
    |--------------------------------------------------------------------------
    | Slug Method
    |--------------------------------------------------------------------------
    |
    | Here you can define the slug method that will be used when generating slugs.
    | You can specify a custom method in your helper class.
    |
    */

    'method' => [SlugHelper::class, 'customSlugMethod'],

    /*
    |--------------------------------------------------------------------------
    | Maximum Slug Length
    |--------------------------------------------------------------------------
    |
    | You can specify the maximum length of the generated slug here. If the
    | slug exceeds this length, it will be truncated.
    |
    */

    'max_length' => 255,

    /*
    |--------------------------------------------------------------------------
    | Reserved Slugs
    |--------------------------------------------------------------------------
    |
    | Here you can define an array of reserved slugs that cannot be used.
    | For example, 'blog', 'posts', etc.
    |
    */

    'reserved' => [
        'blog',
        'posts',
        'categories',
        // أضف المزيد من القيم المحجوزة هنا
    ],

    /*
    |--------------------------------------------------------------------------
    | Slug Separator
    |--------------------------------------------------------------------------
    |
    | You can specify the character that will be used to separate words in the slug.
    | The default is a hyphen (-).
    |
    */

    'separator' => '-',

    /*
    |--------------------------------------------------------------------------
    | Slug Unique Check
    |--------------------------------------------------------------------------
    |
    | You can enable or disable the unique check for slugs. If enabled, it will
    | ensure that the generated slug is unique in the database.
    |
    */

    'unique' => true,

    /*
    |--------------------------------------------------------------------------
    | Slug Model
    |--------------------------------------------------------------------------
    |
    | You can specify the model that will be used for storing the slugs.
    |
    */

    'slug_model' => \App\Models\Post::class,

];
