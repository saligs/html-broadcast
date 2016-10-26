<?php

return [
    'name' => 'dashboard',
    'layout' => 'default',
    'seo' => [
        'title' => 'Beon Apps'
    ],
    'js_var' => [
        'breadcrumb' => [
            'title' => 'Welcome to Packet',
            'subTitle' => 'overview & stats',
            'active' => 'Dashboard',
            'list' => [
                [
                    'href'=>'#',
                    'icon'=>'fa fa-home',
                    'label'=>'Home',
                ],
            ],
        ]
    ],
    'js_file' => require(VENDOR_DIR . '/webejs/config/global/default-js-file.php'),
    'css_file' => require(VENDOR_DIR . '/webejs/config/global/default-css-file.php'),
];