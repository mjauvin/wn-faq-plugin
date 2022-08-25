<?php namespace StudioAzura\FAQ\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Categories Backend Controller
 */
class Categories extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
    ];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('StudioAzura.FAQ', 'faq', 'categories');
    }
}
