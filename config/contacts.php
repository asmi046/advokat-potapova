<?php

return [

    'phone' => '+7 (920) 712-48-62',
    'phone_link' => '+79207124862',
    'email' => 'potg@mail.ru',
    'address' => 'г. Курск, ул. Кати Зеленко, 26',
    'messenger' => '#',

    'phones' => [
        [
            'label' => '+7 (920) 712-48-62',
            'link' => '+79207124862',
        ],
        [
            'label' => '+7 (915) 511-71-02',
            'link' => '+79155117102',
        ],
    ],

    'map' => [
        'center' => [51.73888957224049, 36.19822550000001],
        'zoom' => 16,
        'pin' => '/img/map_pin.svg',
        'api_key' => env('YANDEX_MAPS_API_KEY'),
    ],

    'social' => [
        // [
        //     'label' => 'Telegram',
        //     'url' => 'https://t.me/...',
        // ],
    ],
];
