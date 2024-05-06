<?php

return [
    'models' => [
        'general' => [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ],
        'category' => [
            'label' => 'Category',
            'label_plural' => 'Categories',
            'name' => "Name",
            'slug' => "Slug",
            'image' => "Image",
            'empty_option' => "-- select category --",
        ],
        'faq' => [
            'label' => 'FAQ',
            'label_plural' => 'FAQs',
            'name' => "Name",
            'slug' => "Slug",
            'title' => "Title",
            'subtitle' => "Subtitle",
            'excerpt' => "Excerpt",
            'description' => "Description",
            'image' => "Image",
        ],
        'question' => [
            'label' => 'Question',
            'label_plural' => 'Questions',
            'answer' => 'Answer',
            'image' => 'Image',
        ],
    ],
    'categories' => [
        'label' => 'FAQ categories',
        'icon' => 'icon-sitemap',
    ],
    'questions' => [
        'label' => 'FAQ questions',
        'icon' => 'icon-question',
    ],
];
