<?php namespace Studioazura\FAQ\Models;

use Model;

/**
 * Faq Model
 */
class Question extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    public $table = 'studioazura_faq_questions';

    public $rules = [];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public $belongsTo = [
        'category' => Category::class,
    ];

    public $attachOne = [
        'image' => \System\Models\File::class,
    ];
}
