<?php

return [
    'name' => 'broadcast-message',
    'layout' => 'default',
    'seo' => [
        'title' => 'Beon Apps'
    ],
    'js_var' => [
        'breadcrumb' => [
            'title' => 'Message',
            'subTitle' => 'Lets write your message',
            'active' => 'Write Message',
            'list' => [
                [
                    'href'=>'#',
                    'icon'=>'fa fa-home',
                    'label'=>'Home',
                ],
            ],
        ]
    ],
    'js_file' => require(VENDOR_DIR . '/webejs/config/global/broadcast-message-js-file.php'),
    'css_file' => require(VENDOR_DIR . '/webejs/config/global/default-css-file.php'),
];