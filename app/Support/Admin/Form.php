<?php

namespace App\Support\Admin;


class Form extends \Encore\Admin\Form
{
    public static function getResourceUrl($slice = -2) //Todo remove duplicate
    {
        $segments = explode('/', trim(app('request')->getUri(), '/'));

        if ($slice != 0) {
            $segments = array_slice($segments, 0, $slice);
        }

        return implode('/', $segments);
    }
}
