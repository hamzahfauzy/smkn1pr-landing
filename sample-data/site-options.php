<?php

$data = [
    'sitename' => 'SMK Negeri 1 Pulau Rakyat',
    'socials'  => [
        'facebook' => [
            'url' => '',
            'class' => 'facebook',
            'icon' => 'bx bxl-facebook',
        ],
        'instagram' => [
            'url' => '',
            'class' => 'instagram',
            'icon' => 'bx bxl-instagram',
        ],
        'youtube' => [
            'url' => '',
            'class' => 'youtube',
            'icon' => 'bx bxl-youtube',
        ]
    ]
];

echo json_encode([
    'status'  => 'success',
    'message' => 'data retrieved',
    'data'    => $data
]);
die();