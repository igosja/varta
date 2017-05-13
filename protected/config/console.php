<?php

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=vartist.mysql.ukraine.com.ua;dbname=vartist_db',
            'emulatePrepare' => true,
            'username' => 'vartist_db',
            'password' => 'ZkspCZFZ',
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