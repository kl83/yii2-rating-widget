# Yii2 rating widget

[![Latest Stable Version](https://poser.pugx.org/kl83/yii2-rating-widget/v/stable)](https://packagist.org/packages/kl83/yii2-rating-widget)
[![Total Downloads](https://poser.pugx.org/kl83/yii2-rating-widget/downloads)](https://packagist.org/packages/kl83/yii2-rating-widget)
[![License](https://poser.pugx.org/kl83/yii2-rating-widget/license)](https://packagist.org/packages/kl83/yii2-rating-widget)

Allows you to set an stars-rating for something or show it.

## Installation

The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run

~~~
php composer.phar require kl83/yii2-rating-widget ^2.0
~~~

or add

~~~
"kl83/yii2-rating-widget": "^2.0"
~~~

to the require section of your composer.json file.

## Usage

FontAwesome asset is used to display stars. Version 4.7 is in use.
If you do not have it in your project, \kl83\widgets\RatingWidgetFaAsset asset
must be registered.

~~~ php
\kl83\widgets\RatingWidgetFaAsset::register(\Yii::$app->view);
~~~

### Input widget

~~~ php
$form->field($model, 'rating')->widget('kl83\widgets\RatingInput', [
    'containerOptions' => ['class' => 'some-class'], // HTML attributes
    'maxRating' => 10, // stars count, default - 5
]);
~~~

### Display widget

~~~ php
\kl83\widgets\RatingWidget::widget([
    'maxRating' => 10, // stars count, default - 5
    'options' => ['class' => 'some-class'], // HTML attributes
    'value' => 4.5, // highlighted stars count
]);
~~~

## License
MIT License
