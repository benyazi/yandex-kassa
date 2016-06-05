<?php
/**
 * Yandex.Kassa package config
 */
return [
    'prefix' => 'payment',
    'user' => App\User::class,
    'layout' => 'layouts.app',
    'form_view' => 'yandex-kassa::payment.form',
    
    /** 
     * Views to inject transaction repository 
     */
    'compose' => [
        'laravel-balance::transactions.list',
        'laravel-balance::transactions.list',
    ],

    'form_url' => 'https://demomoney.yandex.ru/eshop.xml',
    'shop' =>[
        'shopId' => '',  //Идентификатор магазина, выдается при подключении к Яндекс.Кассе.
        'scid' => '', //Идентификатор витрины магазина, выдается при подключении к Яндекс.Кассе.
        'customerNumber' => '', //Идентификатор плательщика в системе магазина.
    ]
];