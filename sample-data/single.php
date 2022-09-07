<?php

if(isset($_GET['slug']))
{
    $data = [
        [
            'title'   => 'Visi dan Misi',
            'content' => '<p>Ini adalah visi dan misi</p>',
            'name'    => 'visi-dan-misi',
            'type'    => 'page',
            'template'=> 'visi-misi.php',
        ],
        [
            'title'   => 'Profil',
            'content' => '<p>Ini adalah profil</p>',
            'name'    => 'profile',
            'type'    => 'page',
            'template'=> 'profil.php',
        ],
        [
            'title'   => 'Berita',
            'content' => '<p>Ini adalah berita</p>',
            'name'    => 'berita',
            'type'    => 'page',
            'template'=> 'berita.php',
        ],
        [
            'title'   => 'Kontak',
            'content' => '<p>Ini adalah kontak</p>',
            'name'    => 'contact',
            'type'    => 'page',
            'template'=> 'contact.php',
        ],
        [
            'title'   => 'Sample Post 1',
            'content' => '<p>this is post content</p>',
            'name'    => 'sample-post-1',
            'type'    => 'post',
            'template'=> '',
        ],
        [
            'title'   => 'Sample Post 2',
            'content' => '<p>this is post content</p>',
            'name'    => 'sample-post-2',
            'type'    => 'post',
            'template'=> '',
        ],
        [
            'title'   => 'Sample Post 3',
            'content' => '<p>this is post content</p>',
            'name'    => 'sample-post-3',
            'type'    => 'post',
            'template'=> '',
        ],
    ];

    $data = array_filter($data, function($d){
        return $d['name'] == $_GET['slug'];
    });

    echo json_encode([
        'status'  => 'success',
        'message' => 'data retrieved',
        'data'    => $data
    ]);
    die();
}