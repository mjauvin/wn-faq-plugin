<?php namespace StudioAzura\FAQ\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * F A Qs Backend Controller
 */
class FAQs extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
        \Backend\Behaviors\RelationController::class,
    ];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('StudioAzura.FAQ', 'faq', 'faqs');
    }
}
