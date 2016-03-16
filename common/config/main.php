<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
		    'enablePrettyUrl' => true,
		    'showScriptName' => false, // Only considered when enablePrettyUrl is set to true
		],
    ],
];
