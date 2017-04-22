<?php

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=igosja_varta',
            'emulatePrepare' => true,
            'username' => 'igosja_varta',
            'password' => '&WKWp@*{',
            'charset' => 'utf8',
        ),
        'messages' => array(
            'class' => 'CDbMessageSource',
            'cacheID' => 'cache',
            'cachingDuration' => 43200,
            'connectionID' => 'db',
            'sourceMessageTable' => 'i18n_source_messages',
            'translatedMessageTable' => 'i18n_translated_messages',
        ),
    ),
);