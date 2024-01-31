<?php namespace StudioAzura\FAQ\Classes;

use App;
use Backend;
use BackendMenu;
use Event;
use Yaml;
use Lang;

use StudioAzura\Foundation\Models\Section;

class ExtendFoundation
{
    public static function boot()
    {
        Section::extend(function () {
            $this->section_types = array_merge($this->section_types, [
                'faq',
            ]); 
        }, true);
    }
}
