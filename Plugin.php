<?php namespace StudioAzura\FAQ;

use Backend;
use System\Classes\PluginBase;
use System\Classes\PluginManager;

class Plugin extends PluginBase
{
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
        if (PluginManager::instance()->exists('StudioAzura.Foundation')) {
            Classes\ExtendFoundation::boot();
        }   
    }

<<<<<<< Updated upstream
    public function registerMarkupTags()
    {
        if (PluginManager::instance()->exists('Winter.Pages')) {
            return [
                'filters' => [
                    'parseSnippets' => ['StudioAzura\FAQ\Classes\SnippetParser', 'parse'],
                ],
            ];
        }
    }

=======
>>>>>>> Stashed changes
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
