<?php
namespace kl83\widgets;

use yii\helpers\Html;

class RatingWidget extends \yii\widgets\InputWidget
{
    public $maxRating = 5;
    public $filledFaClass = 'fa-star';
    public $halfFaClass = 'fa-star-half-o';
    public $emptyFaClass = 'fa-star-o';
    public $readOnly = false;

    public function run()
    {
        ratingwidget\Asset::register($this->view);
        $inputId = $this->name ? "$this->id-input" : Html::getInputId($this->model, $this->attribute);
        $name = $this->name ? $this->name : Html::getInputName($this->model, $this->attribute);
        $value = $this->name ? $this->value : $this->model->{$this->attribute};
        return $this->render('widget', [
            'widget' => $this,
            'inputId' => $inputId,
            'name' => $name,
            'value' => $value === null ? null : ($this->readOnly ? round($value * 2) / 2 : round($value)),
        ]);
    }

    public static function widget($config = [])
    {
        if ( ! isset($config['name']) && ! isset($config['model']) ) {
            $config['name'] = 'empty';
            $config['readOnly'] = true;
        }
        return parent::widget($config);
    }
}
