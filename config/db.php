<?php

return [
    'class' => 'yii\db\Connection',
    'driverName'    => 'mysql',
    'dsn' => 'mysql:host=localhost;dbname=blonder413',
    'username' => 'blonder413',
    'password' => 'Mono/1985',
    'charset' => 'utf8',
//    'enableSchemaCache' => true,
//    'schemaCacheDuration' => 3600,  // Duration of schema cache.
//    'schemaCache' => 'cache',   // Name of the cache component used to store schema information
    'on afterOpen' => function($event) {
        // $event->sender se refiere a la conexión DB
        $event->sender->createCommand("SET time_zone = '-5:00'")->execute();
    }
];