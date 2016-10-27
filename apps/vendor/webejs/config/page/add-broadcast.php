<?php

return [
    'name' => 'add-broadcast',
    'layout' => 'default',
    'seo' => [
        'title' => 'Beon Apps'
    ],
    'js_var' => [
        'breadcrumb' => [
            'title' => 'Broadcast',
            'subTitle' => 'Add New',
            'active' => 'Add New Broadcast',
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