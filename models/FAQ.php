<?php namespace StudioAzura\FAQ\Models;

use Model;

class FAQ extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    public $table = 'studioazura_faq_faqs';

    public $implement = ['@Winter.Translate.Behaviors.TranslatableModel'];

    public $translatable = [
        'name',
        'description',
    ];

    public $rules = [
        'name' => 'required',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public $hasMany = [
        'questions' => [Question::class, 'key' => 'faq_id', 'delete' => true],
    ];
}
