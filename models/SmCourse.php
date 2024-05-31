<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sm_course".
 *
 * @property integer $id
 * @property string $course_name
 * @property string $course_duration
 * @property integer $course_category
 * @property string $remarks
 * @property string $created
 * @property string $modified
 * @property integer $status
 */
class SmCourse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sm_course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_name', 'course_duration'], 'required'],
            [['course_category', 'status'], 'integer'],
            [['remarks'], 'string'],
            [['created', 'modified'], 'safe'],
            [['course_name', 'course_duration'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_name' => 'Course Name',
            'course_duration' => 'Course Duration',
            'course_category' => 'Course Category',
            'remarks' => 'Remarks',
            'created' => 'Created',
            'modified' => 'Modified',
            'status' => 'Status',
        ];
    }
}
