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
                '<language:(ru|ua)>' => 'index/index',
                '' => 'index/index',
                '<language:(ru|ua)>/about' => 'about/index',
                'about' => 'about/index',
                '<language:(ru|ua)>/service' => 'service/index',
                'service' => 'service/index',
                '<language:(ru|ua)>/service/<id>' => 'service/view',
                'service/<id>' => 'service/view',
                '<language:(ru|ua)>/portfolio/<id>' => 'portfolio/index',
                'portfolio/<id>' => 'portfolio/index',
                '<language:(ru|ua)>/portfolio' => 'portfolio/index',
                'portfolio' => 'portfolio/index',
                '<language:(ru|ua)>/project/<id>' => 'project/view',
                'project/<id>' => 'project/view',
                '<language:(ru|ua)>/contact' => 'contact/index',
                'contact' => 'contact/index',
                '<language:(ru|ua)>/<controller>/<action>/<id>' => '<controller>/<action>',
                '<language:(ru|ua)>/<controller>/<action>' => '<controller>/<action>',
                '<language:(ru|ua)>/<controller>' => '<controller>/index',
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