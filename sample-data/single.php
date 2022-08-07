<?php

if(isset($_GET['slug']))
{
    $data = [
        [
            'post_title'   => 'this is post title',
            'post_content' => '<p>this is post content</p>',
            'post_name'    => 'this-is-post-title'
        ],
        [
            'post_title'   => 'this is post title 2',
            'post_content' => '<p>this is post content 2</p>',
            'post_name'    => 'this-is-post-title-2'
        ],
        [
            'post_title'   => 'this is post title 3',
            'post_content' => '<p>this is post content 3</p>',
            'post_name'    => 'this-is-post-title-3'
        ],
        [
            'post_title'   => 'this is post title 4',
            'post_content' => '<p>this is post content 4</p>',
            'post_name'    => 'this-is-post-title-4'
        ],
    ];

    $data = array_filter($data, function($d){
        return $d['post_name'] == $_GET['slug'];
    });

    echo json_encode([
        'status'  => 'success',
        'message' => 'data retrieved',
        'data'    => $data
    ]);
    die();
}