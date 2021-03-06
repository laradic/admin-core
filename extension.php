<?php

use Illuminate\Contracts\Foundation\Application;
use Laradic\Extensions\Extension;
use Laradic\Extensions\ExtensionFactory;
use Symfony\Component\VarDumper\VarDumper;

return array(
    'name' => 'Admin',
    'slug' => 'laradic-admin/core',
    'dependencies' => [
        'laradic/packadic'
    ],
    'paths' => [
        'migrations' => ['resources/migrations', base_path('vendor/rydurham/sentinel/src/migrations')],
        #'seeds' => [base_path('vendor/rydurham/sentinel/src/seeds')]
    ],
    'seeds' => [
        #base_path('vendor/rydurham/sentinel/src/seeds/DatabaseSeeder.php') => 'SentinelDatabaseSeeder'
    ],
    'register' => function(Application $app, Extension $extension, ExtensionFactory $extensions)
    {
        $app->register('LaradicAdmin\Core\AdminServiceProvider');
    },
    'boot' => function(Application $app, Extension $extension, ExtensionFactory $extensions)
    {
    },
);
