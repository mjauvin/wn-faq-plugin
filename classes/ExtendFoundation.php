<?php namespace StudioAzura\FAQ\Classes;

use App;
use BackendMenu;
use Event;
use StudioAzura\FAQ\Models\FAQ;
use StudioAzura\Foundation\Models\Section;      
use Yaml;

class ExtendFoundation
{
    public static function boot()
    {
        Section::extend(function () {
            $this->data_attributes = array_merge($this->data_attributes, [
                'faq',
            ]);

            $this->section_types = array_merge($this->section_types, [
                'faq',
            ]); 
        }, true);

        Event::listen('backend.form.extendFieldsBefore', function ($formWidget) {
            if ($formWidget->model instanceof Section) {
                $faqField = @Yaml::parseFile( plugins_path('studioazura/faq/config/faq_fiels.yaml') );
                $formWidget->tabs['fields'] = array_merge($formWidget->tabs['fields'], $faqField);

                $formWidget->tabs['fields']['image']['trigger']['condition'] .= '[faq]';
            }
        }); 
    }
}
