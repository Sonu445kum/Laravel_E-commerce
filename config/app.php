<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | Ye value aapke application ka naam define karti hai. Ye sab jagah use hoti
    | hai jahan Laravel ko app ka name dikhana ho, jaise notifications ya UI elements.
    |
    |  UPDATE: 'name' ko 'E-commerce'  change kiya.
    |
    */
    'name' => env('APP_NAME', 'E-commerce'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | Ye determine karta hai ki aapka app kaunsa environment me run ho raha hai.
    | Isse alag services configure ki ja sakti hai.
    |
    */
    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | Debug mode on hone par detailed error messages aur stack traces dikhenge.
    |
    */
    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | Ye URL artisan commands aur URL generation ke liye use hota hai.
    |
    */
    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Default timezone set ki gayi hai, jo PHP date/time functions ke liye use hoti hai.
    |
    */
    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | Default locale jo translations/localization ke liye use hota hai.
    |
    */
    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | Laravel ke encryption services ke liye key. Ye 32 character ka random string hona chahiye.
    |
    */
    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', (string) env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | Maintenance mode driver specify karta hai. Cache driver multiple machines ke liye work karta hai.
    |
    */
    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];
