<?php

return array(
    'defaultController' => 'index',
    'language' => 'ru',
    'sourceLanguage' => 'ru',
    'timeZone' => 'UTC',
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'components' => array(
        'urlManager' => array(
            'class'=>'application.components.UrlManager',
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                '<language>' => 'index/index',
                '<language>/<controller>/<action>/<id>' => '<controller>/<action>',
                '<language>/<controller>/<action>' => '<controller>/<action>',
                '<language>/<controller>' => '<controller>/index',
                '' => 'index/index',
                '<module>/<controller>/<action>/<id>' => '<module>/<controller>/<action>',
                '<module>/<controller>/<action>' => '<module>/<controller>/<action>',
                '<module>/<controller>' => '<module>/<controller>',
                '<module>' => '<module>/index',
            ),
        ),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=igosja_varta',
            'emulatePrepare' => true,
            'username' => 'igosja_varta',
            'password' => '&WKWp@*{',
            'charset' => 'utf8',
        ),
        'messages'=>array(
            'class'=>'CDbMessageSource',
        ),
    ),
    'modules' => array(
        'admin',
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123',
        ),
    ),
);