<?php namespace StudioAzura\FAQ\Models;

use Model;

class FAQ extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\HasSortableRelations;

    public $sortableRelations = [
        'questions' => 'sort_order',
    ];

    public $table = 'studioazura_faq_faqs';

    public $implement = ['@Winter.Translate.Behaviors.TranslatableModel'];

    public $translatable = [
        'name',
        'description',
    ];

    public $rules = [
        'name' => 'required',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique'],
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public $hasMany = [
        'questions' => [Question::class, 'key' => 'faq_id', 'delete' => true],
        'categories' => [Category::class, 'key' => 'faq_id', 'delete' => true],
    ];
}
