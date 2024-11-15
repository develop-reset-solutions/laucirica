<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'products' => [
            'driver' => 'local',
            'root' => storage_path('app/public/products'),
            'url' => env('APP_URL').'/storage/products',
            'visibility' => 'public',
        ],

        'certificate' => [
            'driver' => 'local',
            'root' => storage_path('app/public/csd_sat/cer'),
            'url' => env('APP_URL').'/storage/csd_sat/cer',
            'visibility' => 'public',
        ],

        'key' => [
            'driver' => 'local',
            'root' => storage_path('app/public/csd_sat/key'),
            'url' => env('APP_URL').'/storage/csd_sat/key',
            'visibility' => 'public',
        ],
  
        'xml' => [
            'driver' => 'local',
            'root' => storage_path('app/public/invoicexml'),
            'url' => env('APP_URL').'/storage/invoicexml',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
        public_path('storage/products') => storage_path('app/public/products'),
        public_path('storage/invoicexml') => storage_path('app/invoicexml'),
        public_path('storage/csd_sat/cer') => storage_path('app/public/csd_sat/cer'),
        public_path('storage/csd_sat/key') => storage_path('app/public/csd_sat/key'),
    ],

];
