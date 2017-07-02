<?php
namespace kl83\widgets;

use yii\helpers\Html;

class RatingWidget extends \yii\widgets\InputWidget
{
    public $maxRating = 5;
    public $filledFaClass = 'fa-star';
    public $emptyFaClass = 'fa-star-o';
    public $readOnly = false;

    public function run()
    {
        ratingwidget\Asset::register($this->view);
        $name = $this->name ? $this->name : Html::getInputName($this->model, $this->attribute);
        $value = $this->name ? $this->value : $this->model->{$this->attribute};
        return $this->render('widget', [
            'widget' => $this,
            'name' => $name,
            'value' => (int)$value,
        ]);
    }
}
