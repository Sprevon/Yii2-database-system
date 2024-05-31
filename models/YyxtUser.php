<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $nickname
 * @property string $password
 * @property integer $group_id
 * @property integer $belong_to_id
 * @property string $accessToken
 * @property string $authKey
 */
class YyxtUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'group_id'], 'required'],
            [['group_id', 'belong_to_id'], 'integer'],
            [['username', 'nickname', 'password'], 'string', 'max' => 333],
            [['accessToken', 'authKey'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'nickname' => 'Nickname',
            'password' => 'Password',
            'group_id' => 'Group ID',
            'belong_to_id' => 'Belong To ID',
            'accessToken' => 'Access Token',
            'authKey' => 'Auth Key',
        ];
    }
}
