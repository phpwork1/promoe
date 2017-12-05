<?php

use common\base\AppConstants;

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

$rules = [
    [
        'class' => 'yii\rest\UrlRule',
        'controller' => 'v1/location',
        'tokens' => [
            '{id}' => '<id:\\w+>'
        ],
        //same as GET users/search => user/search
        'extraPatterns' => [
            'GET search' => 'search',
        ],
    ],
    [
        'class' => 'yii\rest\UrlRule',
        'controller' => 'v1/category',
        'tokens' => [
            '{id}' => '<id:\\w+>'
        ],
    ],
    [
        'class' => 'yii\rest\UrlRule',
        'controller' => 'v1/company',
        'tokens' => [
            '{id}' => '<id:\\w+>'
        ],
    ],
    [
        'class' => 'yii\rest\UrlRule',
        'controller' => 'v1/promo',
        'tokens' => [
            '{id}' => '<id:\\w+>'
        ],
    ],
    [
        'class' => 'yii\rest\UrlRule',
        'controller' => 'v1/promoe-user',
        'tokens' => [
            '{id}' => '<id:\\w+>'
        ],
    ],
    [
        'class' => 'yii\rest\UrlRule',
        'controller' => 'v1/promo-image',
        'tokens' => [
            '{id}' => '<id:\\w+>'
        ],
    ],
    //Redirect GET request to users/view into action user/test
    'GET users/view' => 'user/test',
];

return [
    'id' => 'promoe-api',
    'name' => 'Promoe Application',
    'basePath' => dirname(__DIR__),
    'homeUrl' => AppConstants::APP_API_BASE_URL,
    'bootstrap' => ['log'],
    'controllerNamespace' => 'api\common\controllers',
    'modules' => [
        'v1' => [
            'basePath' => '@app/modules/v1',
            'class' => 'api\modules\v1\Module'   // here is our v1 modules
        ]
    ],
    'components' => [
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => 'PHPPROMOEAPI',
                'path' => AppConstants::APP_API_BASE_URL
            ]
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-api',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => $rules,
        ]
    ],
    'params' => $params,
];
