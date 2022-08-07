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
}