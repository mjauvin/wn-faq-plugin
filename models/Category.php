<?php namespace StudioAzura\FAQ\Models;

use Model;

/**
 * Category Model
 */
class Category extends Model
{
    public $implement = [
        '@Winter.Translate.Behaviors.TranslatableModel',
    ];

    use \Winter\Storm\Database\Traits\Validation;

    public $table = 'studioazura_faq_categories';

    public $translatable = [
        'image',
        'name',
    ];

    public $rules = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public $hasMany = [
        'questions' => Question::class,
    ];

    public $attachOne = [
        'image' => \System\Models\File::class,
    ];
}
