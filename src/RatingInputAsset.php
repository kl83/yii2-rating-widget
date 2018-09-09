<?php

namespace kl83\widgets;

class RatingInputAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/kl83/yii2-rating-widget/src/web';
    public $js = ['rating-input.js'];
    public $css = ['rating-input.css'];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
