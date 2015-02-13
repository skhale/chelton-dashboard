<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

return [
    'id' => 'basic',
    'name' => 'Patient Dashboard',
    'basePath' => dirname(__DIR__),
    'homeUrl' => 'http://dashboard.mdetails.com',
    'extensions' => require __DIR__ . '/../vendor/yiisoft/extensions.php',
    'components' => [
        'request' => [
            'cookieValidationKey' => '6E9EAE377D2F1',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<module:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<module>/<controller>/<action>',
                '<module:\w+>/<submodule:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<module>/<submodule>/<controller>/<action>'
            ]
        ],
        'view' => [
            'theme' => [
                'baseUrl' => '@web/themes/basic',
                'pathMap' => ['@app/views' => '@webroot/themes/basic/views']
            ]
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
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
        'db' => $db,
    ],
    'modules' => [
        'api' => [
            'class' => 'app\modules\api\ApiModule'
        ]
    ],
    'params' => $params,
];