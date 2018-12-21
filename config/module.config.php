<?php
return [
    'service_manager' => [
        'factories' => [
            'Psr\\Log\\LoggerInterface' => 'InstantMagazine\\Monolog\\Logger\\MonologFactory',
        ],
//        'invokables' => [
//            'GuzzleHttp\\Client' => 'GuzzleHttp\\Client',
//        ],
//        'aliases' => [
//            'Psr\\Log\\LoggerInterface' => 'Becky\\Service\\Logger',
//        ],
    ]
];
