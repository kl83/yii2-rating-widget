# Yii2 rating widget
[![Latest Stable Version](https://poser.pugx.org/kl83/yii2-rating-widget/v/stable)](https://packagist.org/packages/kl83/yii2-rating-widget)
[![Total Downloads](https://poser.pugx.org/kl83/yii2-rating-widget/downloads)](https://packagist.org/packages/kl83/yii2-rating-widget)
[![License](https://poser.pugx.org/kl83/yii2-rating-widget/license)](https://packagist.org/packages/kl83/yii2-rating-widget)

Allows you to set an stars-rating for something or show it.
## Installation
The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run
~~~
php composer.phar require kl83/yii2-rating-widget ~1.0.0
~~~
or add
~~~
"kl83/yii2-rating-widget": "~1.0.0"
~~~
to the require section of your composer.json file.

## Usage

### Adding widget to active form.
~~~ php
$form->field($model, 'rating')->widget('kl83\widgets\RatingWidget');
~~~

### Display rating with widget.
~~~ php
\kl83\widgets\RatingWidget::widget([
  'value' => 4.5,
]);
~~~

## Widget options
Option|Default|Description
------|-------|-----------
**maxRating**|5|The maximum rating that can be placed. The same number of stars will be displayed by the widget.
**readOnly**|false|Turns off user input. The default is true if the "model" and "name" attributes are not set.
**filledFaClass**|fa-star|Name of css class for filled icon.
**halfFaClass**|fa-star-half-o|Name of css class for half filled icon.
**emptyFaClass**|fa-star-o|Name of css class for empty icon.

## License
MIT License
