<?php

return [
    'models' => [
        'general' => [
            'id' => 'ID',
            'created_at' => "Création",
            'updated_at' => "Mise à jour",
        ],
        'category' => [
            'label' => "Catégorie",
            'label_plural' => "Catégories",
            'name' => "Nom",
            'slug' => "Slug",
            'image' => "Image",
            'empty_option' => "-- choisir une catégorie --",
        ],
        'faq' => [
            'label' => "FAQ",
            'label_plural' => "FAQs",
            'name' => "Nom",
            'slug' => "Slug",
            'title' => "Titre",
            'subtitle' => "Sous-titre",
            'excerpt' => "Extrait",
            'description' => "Description",
            'image' => "Image",
        ],
        'question' => [
            'label' => "Question",
            'label_plural' => "Questions",
            'answer' => 'Réponse',
            'image' => 'Image',
        ],
    ],
    'categories' => [
        'label' => "FAQ catégories",
        'icon' => "icon-sitemap",
    ],
    'questions' => [
        'label' => "FAQ questions",
        'icon' => "icon-question",
    ],
];
