<?php

class Post
{
    static function get()
    {
        $API_URL = config('API_URL');
        $service = new Service($API_URL);
        $data    = $service->request('post');
        return $data;
    }
    
    static function single($slug)
    {
        $API_URL = config('API_URL');
        $service = new Service($API_URL);
        $data    = $service->request('single','GET',['slug'=>$slug]);
        return $data;
    }

    static function singleCategory($name)
    {
        $API_URL = config('API_URL');
        $service = new Service($API_URL);
        $data    = $service->request('single-category','GET',['name'=>$name]);
        return $data;
    }

    static function menu()
    {
        $API_URL = config('API_URL');
        $service = new Service($API_URL);
        $data    = $service->request('menu','GET');
        return $data;
    }

    static function landing()
    {
        $API_URL = config('API_URL');
        $service = new Service($API_URL);
        $data    = $service->request('landing','GET');
        return $data;
    }

    static function siteOptions()
    {
        $API_URL = config('API_URL');
        $service = new Service($API_URL);
        $data    = $service->request('site-options','GET');
        return $data;
    }
}