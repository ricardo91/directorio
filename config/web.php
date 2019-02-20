<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'es',
    //'defaultController' => 'TelefonoController/index', //no pincha
    'defaultRoute' => 'telefono/index',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'JaGl2X6NEhVqMBGFQFRws3yHOPiKgGtC',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            // Disable index.php
            'showScriptName' => false,
            // Disable r= routes
            //'enablePrettyUrl' => true,
            //'enableStrictParsing' => true,
            //'suffix' => '.html',
            /*'rules' => array(
                    '<controller:\w+>/<id:\d+>' => '<controller>/view',
                    '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',

                    '<controller:\w+>/<action:\w+>/<id:\d+>/<id2:\d+>' => '<controller>/<action>',
                    '<controller:\w+>/<action:\w+>/<id:\d+>/<id2:\d+>/<id3:\d+>' => '<controller>/<action>',
                    '<controller:\w+>/<action:\w+>/<id:\d+>/<id2:\d+>/<id3:\d+>/<id4:\d+>' => '<controller>/<action>',
                    '<controller:\w+>/<action:\w+>/<id:\d+>/<id2:\d+>/<id3:\d+>/<id4:\d+>/<id5:\d+>' => '<controller>/<action>',
                    '<controller:\w+>/<action:\w+>/<id:\d+>/<id2:\d+>/<id3:\d+>/<id4:\d+>/<id5:\d+>/<id6:\d+>' => '<controller>/<action>',

                    '<controller:\w+>/<action:\w+>' => '<controller>/<action>',


            ),*/
        ],
        
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
