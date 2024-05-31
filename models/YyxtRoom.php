<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yyxt_room".
 *
 * @property integer $id
 * @property string $room_name
 * @property integer $std_num
 * @property string $remarks
 */
class YyxtRoom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yyxt_room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_name', 'std_num'], 'required'],
            [['std_num'], 'integer'],
            [['room_name'], 'string', 'max' => 100],
            [['remarks'], 'string', 'max' => 333],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_name' => 'Room Name',
            'std_num' => 'Std Num',
            'remarks' => 'Remarks',
        ];
    }
}
