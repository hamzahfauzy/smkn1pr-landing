<?php

$data = [
    [
        'title'   => 'Visi dan Misi',
        'type'    => 'page',
        'name'    => 'visi-dan-misi'
    ],
    [
        'title'   => 'Profil',
        'type'    => 'page',
        'name'    => 'profile'
    ],
    [
        'title'   => 'Berita',
        'type'    => 'page',
        'name'    => 'berita'
    ],
    [
        'title'   => 'Kontak',
        'type'    => 'page',
        'name'    => 'contact'
    ],
    // [
    //     'title'   => 'Google',
    //     'type'    => 'url',
    //     'name'    => 'https://google.com/'
    // ],
];

echo json_encode([
    'status'  => 'success',
    'message' => 'data retrieved',
    'data'    => $data
]);
die();