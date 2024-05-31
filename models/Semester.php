<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "semester".
 *
 * @property integer $id
 * @property string $s_name
 * @property string $first_day
 * @property integer $current_s
 */
class Semester extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'semester';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_name'], 'required'],
            [['first_day'], 'safe'],
            [['current_s'], 'integer'],
            [['s_name'], 'string', 'max' => 333],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            's_name' => 'S Name',
            'first_day' => 'First Day',
            'current_s' => 'Current S',
        ];
    }
}
