<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property integer $id
 * @property string $dept_code
 * @property string $department_name
 * @property integer $college_id
 * @property integer $dept_order
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['college_id', 'dept_order'], 'integer'],
            [['dept_code', 'department_name'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dept_code' => 'Dept Code',
            'department_name' => 'Department Name',
            'college_id' => 'College ID',
            'dept_order' => 'Dept Order',
        ];
    }
}
