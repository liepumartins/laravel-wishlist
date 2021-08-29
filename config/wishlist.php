<?php

return [
    'cookie' => [
        'domain' => env('WISHLIST_COOKIE_DOMAIN', env('SESSION_DOMAIN')),
        'max_age' => env('WISHLIST_COOKIE_MAX_AGE', 43200),
        'name' => env('WISHLIST_COOKIE_NAME', 'wishlist'),
    ],

    /**
     * Supported drivers:
     * - "array" (only available during the current request lifecycle)
     * - "context" (uses the cookie driver if a user is not authenticated, otherwise uses the eloquent driver)
     * - "cookie" (persists the user's wishes as a serialized string inside a cookie)
     * - "database" (alias for eloquent)
     * - "eloquent" (persists the users' wishes to the `wishes` table)
     */
    'driver' => env('WISHLIST_DRIVER', 'eloquent'),

    'eloquent' => [
        'scope' => 'default',
        'user' => config('auth.providers.users.model'),
    ],
];
