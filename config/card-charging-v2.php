<?php

declare(strict_types=1);

// config for Dinhdjj/CardChargingV2
// `dinhdjj/laravel-card-charging-v2` package
return [
    // Default connection
    'default' => env('THESIEURE_CONNECTION', 'default'),

    // List config connection
    'connections' => [
        'default' => [
            'domain' => env('THESIEURE_DOMAIN', 'thesieure.com'),
            'partner_id' => env('THESIEURE_PARTNER_ID'),
            'partner_key' => env('THESIEURE_PARTNER_KEY'),
        ],
    ],

    // Related to card model
    'card' => [
        'table' => 'card_charging_v2',
        'model' => Dinhdjj\CardChargingV2\Models\Card::class,
    ],
];
