<?php

namespace kl83\widgets;

class RatingWidgetAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/kl83/yii2-rating-widget/src/web';
    public $js = ['rating-widget.js'];
    public $css = ['rating-widget.css'];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
