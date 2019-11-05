<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
$config = [
//    'defaultRoute' => 'site/about',
//    'catchAll' => ['site/offline'],
    'id'                => 'blonder413',
    'language'          => 'es-CO',
    'name'              => 'Blonder413',
    'sourceLanguage'    => 'en-US',
    //    'layout'    => 'blue/main',
    'timeZone'          => 'America/Bogota',
    'version'           => '1.0',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
//        '@public'       => \Yii::$app->homeUrl . 'web',
//        '@bitbucket'    => 'https://bitbucket.org/blonder413/',
//        '@delicious'    => 'https://delicious.com/blonder413',
//        '@dribbble'     => 'https://dribbble.com/blonder413',
        '@facebook'     => 'https://www.facebook.com/Blonder413-111821686918726',
        '@github'       => 'https://github.com/blonder413/',
//        '@gitlab'       => 'https://gitlab.com/u/blonder413',
//        '@lastfm'       => 'http://www.last.fm/es/user/blonder413',
//        '@linkedin'     => 'https://www.linkedin.com/in/blonder413',
        '@twitter'      => 'https://twitter.com/blonder413',
//        '@vimeo'        => 'https://vimeo.com/blonder413',
        '@youtube'      => 'https://www.youtube.com/channel/UCOBMvNSxe08V5E9qExfFt4Q',
    ],
    'components' => [
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    /*
                    "skin-blue",
                    "skin-black",
                    "skin-red",
                    "skin-yellow",
                    "skin-purple",
                    "skin-green",
                    "skin-blue-light",
                    "skin-black-light",
                    "skin-red-light",
                    "skin-yellow-light",
                    "skin-purple-light",
                    "skin-green-light"
                    */
                    'skin' => 'skin-yellow',
                ],
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'KI_NyXUohWHU_iOX2oBmNUfighdlAncd',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        /**
         * http://www.yiiframework.com/doc-2.0/guide-runtime-sessions-cookies.html
         * The default yii\web\Session class stores session data as files on the server.
         * Yii also provides the following session classes implementing different session storage:
         *  - yii\web\DbSession: stores session data in a database table.
         *  - yii\web\CacheSession: stores session data in a cache with the help of a configured cache component.
         *  - yii\redis\Session: stores session data using redis as the storage medium.
         *  - yii\mongodb\Session: stores session data in a MongoDB.
         */
        'session' => [
            'class' => 'yii\web\DbSession',
            // 'timeout' => 10, segundos de inactividad para expirar la sesión
            // Set the following if you want to use DB component other than
            // default 'db'.
            // 'db' => 'mydb',
            // To override default session table, set the following
            'sessionTable' => 'sessions',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => false,  // Whether to enable cookie-based login
            'loginUrl' => ['login'],
            'authTimeout' => 60 * 30,   // 30 minutos de inactividad para cierre de sesión automático
//            'returnUrl' => '/',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'response' => [
            'formatters' => [
                'pdf' => [
                    'class' => 'robregonm\pdf\PdfResponseFormatter',
                    //'mode' => '', // Optional
                    'format' => 'letter',  // Optional but recommended. http://mpdf1.com/manual/index.php?tid=184
                    'defaultFontSize' => 0, // Optional
                    'defaultFont' => '', // Optional
                    'marginLeft' => 15, // Optional
                    'marginRight' => 15, // Optional
                    'marginTop' => 16, // Optional
                    'marginBottom' => 16, // Optional
                    'marginHeader' => 9, // Optional
                    'marginFooter' => 9, // Optional
                    //'orientation' => 'Landscape', // optional. This value will be ignored if format is a string value.
                    'options' => [
                        // mPDF Variables
                        // 'fontdata' => [
                            // ... some fonts. http://mpdf1.com/manual/index.php?tid=454
                        // ]
                    ]
                ],
            ]
        ],
        'i18n' => [
            'translations' => [
                'file-input*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => dirname(__FILE__).'/../vendor/2amigos/yii2-file-input-widget/src/messages/',
                ],
            ],
        ],
        'mailer' => require(__DIR__ . '/mailer.php'),
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],// add authManager to /config/console.php too
        'authManager'       => [
            'class'         => 'yii\rbac\DbManager',
            'defaultRoles'  => ['guest'],
//            'itemTable'         => 'auth_item',         // tabla para guardar objetos de autorización
//            'itemChildTable'    => 'auth_item_child',   // tabla para almacenar jerarquía elemento autorización
//            'assignmentTable'   => 'auth_assignment',   // tabla para almacenar las asignaciones de elementos de autorización
//            'ruleTable'         => 'auth_rule',         // tabla para almacenar reglas
        ],
		'formatter' => [
            'class' => '\yii\i18n\Formatter',
            'thousandSeparator' => '.',
            'decimalSeparator' => ',',
            'currencyCode' => '$'
        ],
        'db' => $db,
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                'articulo/<slug>'           => 'site/article',
                'articulo/descarga/<slug>'  => 'site/download',
                'autor/<id>'                => 'site/author',
                'categoria/<slug>'          => 'site/category',
                'curso/index'               => 'site/all-courses',
                'curso/<slug>'              => 'site/course',
                'etiqueta/<tag>'            => 'site/tag',
                'acerca'                    => 'site/about',
                'home'                      => 'site/index',
                'contacto'                  => 'site/contact',
                'login'                     => 'site/login',
                "registro"                  => "site/signup",
                'pdf/<slug>'                => 'site/pdf',
                'portafolio'                => 'site/portfolio',
                'en-vivo'                   => 'site/streaming',
                'DELETE <controller:\w+>/<id:\d+>' => '<controller>/delete',
            ],
        ],
//        'view' => [
//            'theme' => [
//                'pathMap' => [
//                    '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
//                ],
//            ],
//        ],
    ],
    'params' => $params,
];
if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
        'generators' => [ // HERE
            'crud' => [
                'class' => 'yii\gii\generators\crud\Generator',
                'templates' => [
                    'adminlte' => '@vendor/dmstr/yii2-adminlte-asset/gii/templates/crud/simple',
                ]
            ]
        ],
    ];
}
return $config;