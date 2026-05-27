<?php

namespace App\Helpers;

class NavHelper
{
    public static function isActive($path, $activeClass = 'active')
    {
        return request()->is($path) ? $activeClass : '';
    }
    
    public static function isSectionActive($section)
    {
        if ($section === 'home' && request()->is('/')) {
            return 'active';
        }
        if ($section === 'gallery' && request()->is('gallery')) {
            return 'active';
        }
        return '';
    }
}