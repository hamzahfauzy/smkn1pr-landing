<?php

$data = [
    [
        'title'   => 'this is post title',
        'content' => '<p>this is post content</p>',
        'name'    => 'this-is-post-title',
        'type'    => 'post',
        'template'=> '',
    ],
    [
        'title'   => 'this is post title 2',
        'content' => '<p>this is post content 2</p>',
        'name'    => 'this-is-post-title-2',
        'type'    => 'post',
        'template'=> '',
    ],
    [
        'title'   => 'this is post title 3',
        'content' => '<p>this is post content 3</p>',
        'name'    => 'this-is-post-title-3',
        'type'    => 'post',
        'template'=> '',
    ],
    [
        'title'   => 'this is post title 4',
        'content' => '<p>this is post content 4</p>',
        'name'    => 'this-is-post-title-4',
        'type'    => 'post',
        'template'=> '',
    ],
    [
        'title'   => 'Visi dan Misi',
        'content' => '<p>Ini adalah visi dan misi</p>',
        'name'    => 'visi-dan-misi',
        'type'    => 'page',
        'template'=> 'visi-misi.php',
    ],
];

echo json_encode([
    'status'  => 'success',
    'message' => 'data retrieved',
    'data'    => $data
]);
die();