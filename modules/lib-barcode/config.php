<?php

return [
    '__name' => 'lib-barcode',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-barcode.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-barcode' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'Picqer\\Barcode' => [
                'type' => 'psr4',
                'base' => 'modules/lib-barcode/third-party/php-barcode-generator'
            ],
            'LibBarcode\\Library' => [
                'type' => 'file',
                'base' => 'modules/lib-barcode/library'
            ]
        ],
        'files' => []
    ]
];