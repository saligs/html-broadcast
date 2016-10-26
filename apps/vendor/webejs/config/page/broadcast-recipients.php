<?php

return [
    'name' => 'broadcast-recipients',
    'layout' => 'default',
    'seo' => [
        'title' => 'Beon Apps'
    ],
    'js_var' => [
        'breadcrumb' => [
            'title' => 'Recipients',
            'subTitle' => 'Choose your most recipients',
            'active' => 'Choose Recipients',
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
    'css_file' => require(VENDOR_DIR . '/webejs/config/global/broadcast-recipient-css-file.php'),
];