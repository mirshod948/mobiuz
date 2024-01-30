<?php

namespace frontend\models;

use Yii;
use yii\captcha\CaptchaValidator;
use yii\helpers\HtmlPurifier;

/**
 * This is the model class for table "feedback".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property string $captcha
 * @property int $created_at
 * @property int $updated_at
 * @property int|null $status
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'message', 'captcha'], 'required'],
            ['email', 'email'],
            ['phone', 'match', 'pattern' => '/\+998\d{2}\d{3}\d{2}\d{2}/', 'message' => 'Telefon raqam formati mos emas'],
            ['message', 'filter', 'filter' => 'strip_tags'],
            [['captcha'], CaptchaValidator::className(), 'captchaAction' => 'site/captcha'],
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
            'phone' => 'Phone',
            'message' => 'Message',
            'captcha' => 'Captcha',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }
    public function usave(){
        $this->message = HtmlPurifier::process($this->message);
        $this->created_at = time();
        $this->status = 0;
        if (!$this->save()){
            print_r($this->errors);
        }
        return true;
    }
}
