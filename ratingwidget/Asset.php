<?php
namespace kl83\widgets\ratingwidget;

class Asset extends \yii\web\AssetBundle
{
    public $depends = [
        'kl83\assets\FontawesomeAsset',
        'yii\web\JqueryAsset',
    ];
    public $js = [ 'widget.js' ];
    public $css = [ 'widget.css' ];
    public function init()
    {
        $this->sourcePath = __DIR__.'/../dist';
        parent::init();
    }
}
