<?php

class ProjectImage extends CActiveRecord
{
    public function tableName()
    {
        return 'projectimage';
    }

    public function rules()
    {
        return array(
            array('project_id, image_id', 'numerical'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'image_id' => 'Изображение',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('project_id', $this->project_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function relations()
    {
        return array(
            'image' => array(self::HAS_ONE, 'Image', array('id' => 'image_id')),
        );
    }

    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            $a_image = Image::model()->findAllByAttributes(array('id' => $this->image_id));
            foreach ($a_image as $item) {
                if (isset($item->url)) {
                    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $item->url)) {
                        unlink($_SERVER['DOCUMENT_ROOT'] . $item->url);
                    }
                    $item->delete();
                }
            }
        }
        return true;
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}