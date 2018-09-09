<?php

namespace kl83\widgets;

use yii\helpers\Html;
use yii\widgets\InputWidget;

/**
 * Widget to set stars-rating
 */
class RatingInput extends InputWidget
{
    /**
     * @var int Stars count
     */
    public $maxRating = 5;

    /**
     * @var array HTML attributes
     */
    public $containerOptions = [];

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        RatingInputAsset::register($this->view);
        Html::addCssClass($this->containerOptions, 'rating-input');
        $widget = RatingWidget::widget([
            'maxRating' => $this->maxRating,
            'value' => $this->hasModel() ?
                $this->model->{$this->attribute} :
                $this->value,
        ]);
        return Html::tag(
            'div',
            $this->renderInputHtml('hidden') . $widget,
            $this->containerOptions
        );
    }
}
