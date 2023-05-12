<?php namespace StudioAzura\FAQ\Components;

use Cms\Classes\ComponentBase;
use StudioAzura\FAQ\Models\FAQ as FAQModel;

class FAQ extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'FAQ',
            'description' => 'Frequently Asked Questions'
        ];
    }

    public function defineProperties()
    {
        return [
            'code' => [
                'type' => 'dropdown',
                'required' => true,
                'emptyOption' => '-- select FAQ --',
                'showExternalParam' => false,
            ],
            'style' => [
                'type' => 'text',
                'showExternalParam' => false,
            ],
        ];
    }

    public function onRun()
    {
        $this->addCss(['assets/scss/faq.scss']);
    }

    public function onRender()
    {
        $this->page['faq'] = FAQModel::whereSlug($this->property('code'))->first();
    }

    public static function getCodeOptions()
    {
        return FAQModel::all()->lists('name', 'slug');
    }
}
