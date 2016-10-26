<?php

return [
    'name' => 'last-broadcast',
    'layout' => 'default',
    'seo' => [
        'title' => 'Beon Apps'
    ],
    'js_var' => [
        'breadcrumb' => [
            'title' => 'Broadcast',
            'subTitle' => 'Last Broadcast Delivery',
            'active' => 'Last Delivery',
            'list' => [
                [
                    'href'=>'#',
                    'icon'=>'fa fa-home',
                    'label'=>'Home',
                ],
            ],
        ]
    ],
    'js_file' => require(VENDOR_DIR . '/webejs/config/global/last-broadcast-js-file.php'),
    'css_file' => require(VENDOR_DIR . '/webejs/config/global/last-broadcast-css-file.php'),
];