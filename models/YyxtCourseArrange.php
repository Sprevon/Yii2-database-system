<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yyxt_course_arrange".
 *
 * @property integer $id
 * @property integer $course_id
 * @property string $remarks
 * @property string $tutor_name
 * @property integer $c_std_num
 * @property string $c_std_major
 * @property integer $room_id
 * @property integer $week_id
 * @property integer $semester_id
 * @property integer $c_day
 * @property integer $c_day_time
 * @property string $tools
 */
class YyxtCourseArrange extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yyxt_course_arrange';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_id', 'tutor_name', 'room_id', 'week_id', 'semester_id', 'c_day', 'c_day_time'], 'required'],
            [['course_id', 'c_std_num', 'room_id', 'week_id', 'semester_id', 'c_day', 'c_day_time'], 'integer'],
            [['remarks', 'tools'], 'string', 'max' => 200],
            [['tutor_name'], 'string', 'max' => 100],
            [['c_std_major'], 'string', 'max' => 222],
            [['room_id', 'week_id', 'semester_id', 'c_day', 'c_day_time'], 'unique', 'targetAttribute' => ['room_id', 'week_id', 'semester_id', 'c_day', 'c_day_time'], 'message' => 'The combination of Room ID, Week ID, Semester ID, C Day and C Day Time has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_id' => 'Course ID',
            'remarks' => 'Remarks',
            'tutor_name' => 'Tutor Name',
            'c_std_num' => 'C Std Num',
            'c_std_major' => 'C Std Major',
            'room_id' => 'Room ID',
            'week_id' => 'Week ID',
            'semester_id' => 'Semester ID',
            'c_day' => 'C Day',
            'c_day_time' => 'C Day Time',
            'tools' => 'Tools',
        ];
    }
}
