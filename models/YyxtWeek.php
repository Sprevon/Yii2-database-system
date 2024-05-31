<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yyxt_week".
 *
 * @property integer $id
 * @property integer $week_id
 * @property string $week_detail
 * @property integer $semester_id
 */
class YyxtWeek extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yyxt_week';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['week_id', 'week_detail', 'semester_id'], 'required'],
            [['week_id', 'semester_id'], 'integer'],
            [['week_detail'], 'string', 'max' => 222],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'week_id' => 'Week ID',
            'week_detail' => 'Week Detail',
            'semester_id' => 'Semester ID',
        ];
    }
}
