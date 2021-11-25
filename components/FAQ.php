<?php namespace StudioAzura\FAQ\Components;

use Cms\Classes\ComponentBase;

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
        return [];
    }

    public function onRun()
    {
        $this->addCss(['assets/scss/faq.scss']);
        $this->addJs('assets/js/faq.js');
        $this->page['questions'] = \StudioAzura\FAQ\Models\Question::get();
    }
}
