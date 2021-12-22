<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $password
 * @property string|null $date
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'password'], 'required'],
            [['date'], 'safe'],
            [['name', 'password'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'password' => 'Password',
            'date' => 'Date',
        ];
    }

    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert))
        {
            return false;
        }

        if ($insert) {
            $this->date = time();
        }
        //$this->updated_at = time();
        return true;
    }
}
