<?php

return [

    'hero' => [
        'title' => 'Татьяна<br>Потапова',
        'role' => 'адвокат',
        'subtitle' => 'Профессиональная юридическая защита',
        'photo' => '/img/hero-photo.webp',
        'background' => '/img/hero.webp',
        'button' => [
            'type' => 'primary',
            'url' => config('contacts.messenger'),
            'label' => 'Написать мне',
        ],
    ],

    'cta' => [
        'background' => '/img/cta.webp',
        'smile_logo' => '/img/logo_smile_white.svg',
        'title' => 'Юридическая защита, <br>на которую можно рассчитывать',
        'text' => 'Получите консультацию адвоката — оставьте заявку прямо сейчас',
        'button' => [
            'type' => 'secondary',
            'url' => config('contacts.messenger'),
            'label' => 'Написать мне',
        ],
    ],
];
