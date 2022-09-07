<?php

$data = [
    'hero' => [
        'title'   => 'Selamat Datang',
        'name'    => 'selamat-datang',
        'content' => 'Pengunjung website SMK Negeri 1 Pulau Rakyat',
        'thumb'   => 'http://localhost/landing/assets/img/hero-bg.jpg'
    ],
    'featured' => [
        'title'   => 'Kata Sambutan dari Kepala Sekolah',
        'name'    => 'kata-sambutan-dari-kepala-sekolah',
        'content' => '<p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>',
        'thumb'   => 'http://localhost/landing/assets/img/about.jpg'
    ],
    'stats' => [
        'siswa'   => 520,
        'staff'   => 60,
        'jurusan'  => 2,
        'berita'   => 1
    ],
    'posts' => [
        [
            'title'   => 'Sample Post 1',
            'name'    => 'sample-post-1',
            'content' => '<p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>',
            'thumb'   => 'http://localhost/landing/assets/img/course-1.jpg',
            'categories'   => [
                [
                    'title' => 'Category 1',
                    'name'  => 'categories/category-1'
                ]
            ]
        ],
        [
            'title'   => 'Sample Post 2',
            'name'    => 'sample-post-2',
            'content' => '<p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>',
            'thumb'   => 'http://localhost/landing/assets/img/course-1.jpg',
            'categories'   => [
                [
                    'title' => 'Category 2',
                    'name'  => 'categories/category-2'
                ]
            ]
        ],
        [
            'title'   => 'Sample Post 3',
            'name'    => 'sample-post-3',
            'content' => '<p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>',
            'thumb'   => 'http://localhost/landing/assets/img/course-1.jpg',
            'categories'   => [
                [
                    'title' => 'Category 3',
                    'name'  => 'categories/category-3'
                ]
            ]
        ]
    ],
    'achievements' => [
        [
            'title'   => 'Prestasi 1',
            'name'    => 'prestasi-1',
            'content' => '<p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>',
            'thumb'   => 'http://localhost/landing/assets/img/course-1.jpg',
            'categories'   => [
                [
                    'title' => 'Category 1',
                    'name'  => 'categories/category-1'
                ]
            ]
        ],
        [
            'title'   => 'Prestasi 2',
            'name'    => 'prestasi-2',
            'content' => '<p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>',
            'thumb'   => 'http://localhost/landing/assets/img/course-1.jpg',
            'categories'   => [
                [
                    'title' => 'Category 2',
                    'name'  => 'categories/category-2'
                ]
            ]
        ],
        [
            'title'   => 'Prestasi 3',
            'name'    => 'prestasi-3',
            'content' => '<p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>',
            'thumb'   => 'http://localhost/landing/assets/img/course-1.jpg',
            'categories'   => [
                [
                    'title' => 'Category 3',
                    'name'  => 'categories/category-3'
                ]
            ]
        ]
    ]
];

echo json_encode([
    'status'  => 'success',
    'message' => 'data retrieved',
    'data'    => $data
]);
die();