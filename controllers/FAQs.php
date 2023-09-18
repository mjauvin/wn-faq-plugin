<?php namespace StudioAzura\FAQ\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class FAQs extends Controller
{
    use \Studioazura\Foundation\Traits\ReorderRelation;

    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
        \Backend\Behaviors\RelationController::class,
    ];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('StudioAzura.FAQ', 'faq', 'faqs');

        $this->addJs('/plugins/studioazura/foundation/assets/js/sortable.js');
        $this->addJs('/plugins/studioazura/foundation/assets/js/backend.js');

    }

    public function relationExtendManageWidget($widget, $field, $model)
    {
        if ($field === 'questions') {
            $options = $model->categories()->lists('name', 'id');
            $widget->fields['category']['options'] = $options;
        }
    }
}
