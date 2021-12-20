<?php namespace StudioAzura\FAQ;

use Backend;
use System\Classes\PluginBase;

/**
 * FAQ Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'FAQ',
            'description' => 'No description provided yet...',
            'author'      => 'StudioAzura',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    public function registerComponents()
    {
        return [
            'StudioAzura\FAQ\Components\FAQ' => 'FAQ',
        ];
    }

    public function registerPermissions()
    {
        return [
            'studioazura.faq.manage_questions' => [
                'label' => 'Manage FAQ Questions',
                'tab' => 'Azura',
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'faq' => [
                'label'       => 'FAQs',
                'icon'        => 'icon-question-circle',
                'url'         => Backend::url('studioazura/faq/questions'),
                'permissions' => ['studioazura.faq.manage_questions'],
            ]
        ];
    }
}
