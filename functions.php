<?php

require 'services/Service.php';
require 'services/Post.php';


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