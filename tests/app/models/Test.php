<?php
namespace app\models;

class Test extends \yii\base\Model
{
    public $rating;

    public function rules()
    {
        return [
            ['rating', 'integer'],
        ];
    }
}
