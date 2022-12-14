<?php

require 'services/Cache.php';
require 'services/Post.php';
require 'services/Service.php';
require 'services/Site.php';


function config($key = false)
{
    $config = require 'config.php';
    if($key) return $config[$key];

    return $config;
}

function url($path = '')
{
    return config('APP_URL') . $path;
}

function menu()
{
    Cache::$status = isset($_GET['cache']) ? filter_var($_GET['cache'], FILTER_VALIDATE_BOOLEAN) : true;
    $menu = Post::menu();
    Cache::$status = -1;

    return $menu;
}

function site_options($key = false)
{
    Cache::$status = isset($_GET['cache']) ? filter_var($_GET['cache'], FILTER_VALIDATE_BOOLEAN) : true;
    $options = Post::siteOptions();
    Cache::$status = -1;

    $options = $options['data'];

    if($key) return $options[$key];

    return $options;
}

function get_title()
{
    $sitename = site_options('name');
    return (Site::$title ? Site::$title .' | ' : '') . $sitename;
}

function strWordCut($string,$length,$end='....')
{
    $string = strip_tags($string);

    if (strlen($string) > $length) {

        // truncate string
        $stringCut = substr($string, 0, $length);

        // make sure it ends in a word so assassinate doesn't become ass...
        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).$end;
    }
    return $string;
}