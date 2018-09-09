<?php

namespace kl83\widgets;

use yii\web\AssetBundle;

/**
 * FontAwesome asset is used to display stars. Version 4.7 is in use.
 * If you do not have it in your project, this asset must be registered.
 */
class RatingWidgetFaAsset extends AssetBundle
{
    public $sourcePath = '@npm/font-awesome';
    public $css = ['css/font-awesome.min.css'];
}
