<?php namespace StudioAzura\FAQ\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class FAQs extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController',
        'StudioAzura.Foundation.Behaviors.Reorder',
    ];

    public $requiredPermissions = ['studioazura.faq.manage_faqs'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('StudioAzura.FAQ', 'faq', 'faqs');
    }

    public function relationExtendManageWidget($widget, $field, $model)
    {
        if ($field === 'questions') {
            $options = $model->categories()->lists('name', 'id');
            $widget->fields['category']['options'] = $options;
        }
    }
}
