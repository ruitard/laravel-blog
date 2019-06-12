<?php

return [
    'name' => "Blog",
    'title' => "Blog",
    'subtitle' => '',
    'description' => '轻博客为您提供轻便的博客系统搭建方案',
    'author' => 'Ruitard',
    // 'page_image' => 'home-bg.jpg',
    'posts_per_page' => 5,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'public',
        'webpath' => '/storage/uploads',
    ],
    'contact_email' => env('MAIL_FROM_ADDRESS')
];