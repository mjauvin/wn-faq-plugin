<?php namespace StudioAzura\FAQ;

use Backend;
use System\Classes\PluginBase;
use System\Classes\PluginManager;

class Plugin extends PluginBase
{
    use \StudioAzura\Foundation\Traits\HasAliases;

    protected static $aliases = [
        'FAQ' => 'StudioAzura\FAQ\Models\FAQ',
    ];

    public function pluginDetails()
    {
        return [
            'name'        => 'FAQ',
            'description' => 'No description provided yet...',
            'author'      => 'StudioAzura',
            'icon'        => 'icon-leaf'
        ];
    }

    public function boot()
    {   
        static::setupAliases();

        if (PluginManager::instance()->exists('StudioAzura.Foundation')) {
            Classes\ExtendFoundation::boot();
        }   
    }

    public function registerComponents()
    {
        return [
            'StudioAzura\FAQ\Components\FAQ' => 'FAQ',
        ];
    }

    public function registerPageSnippets()
    {
        return [
            'StudioAzura\FAQ\Components\FAQ' => 'FAQ',
        ];
    }

    public function registerPermissions()
    {
        return [
            'studioazura.faq.manage_faqs' => [
                'label' => 'Manage FAQ Questions',
                'tab' => 'Azura',
                'roles' => ['developer'],
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'faqs' => [
                'label'       => 'FAQs',
                'icon'        => 'icon-question-circle',
                'url'         => Backend::url('studioazura/faq/faqs'),
                'permissions' => ['studioazura.faq.manage_faqs'],
            ]
        ];
    }
}
