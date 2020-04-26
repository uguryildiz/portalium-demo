<?php

namespace portalium\demo\models;

use yii\db\ActiveRecord;

class Demo extends ActiveRecord
{
    public static function tableName()
    {
        return '{{demo}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 64],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }
}
