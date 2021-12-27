<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hr".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $password
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $is_active
 *
 * @property Clients[] $clients
 */
class Hr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'is_active'], 'integer'],
            [['name', 'email', 'password'], 'string', 'max' => 100],
            ['name', 'required', 'message'=>'name must be filled !', ],
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
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    /**
     * Gets query for [[Clients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Clients::className(), ['hr_id' => 'id']);
    }


    // public function beforeSave($insert)
    // {
    //     if (!parent::beforeSave($insert))
    //     {
    //         return false;
    //     }

    //     if ($insert) {
    //         $this->date = time();
    //     }
    //     //$this->updated_at = time();
    //     return true;
    // }
}
