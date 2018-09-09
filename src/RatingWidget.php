<?php

namespace kl83\widgets;

use yii\helpers\Html;
use yii\base\Widget;

/**
 * Widget to display star-rating
 */
class RatingWidget extends Widget
{
    /**
     * @var int Stars count
     */
    public $maxRating = 5;

    /**
     * @var float Highlighted stars count
     */
    public $value;

    /**
     * @var array HTML attributes
     */
    public $options = [];

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        RatingWidgetAsset::register($this->view);
        Html::addCssClass($this->options, 'rating-widget');
        $this->options['data'] = [
            'val' => $this->value,
            'max-rating' => $this->maxRating,
        ];
        return Html::tag('div', '', $this->options);
    }
}
