<?php

class m170423_124532_translate_pk extends CDbMigration
{
    public function up()
    {
        $this->addColumn('i18n_translated_messages', 'pk', 'pk');
    }

    public function down()
    {
        $this->dropColumn('i18n_translated_messages', 'pk');
    }
}