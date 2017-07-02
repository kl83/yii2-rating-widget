<?php

use yii\helpers\Html;

/* @var $widget kl83\widgets\RatingWidget */
/* @var $name string */
/* @var $value string */
/* @var $inputId string */

?>

<div class="rating-widget <?= $widget->readOnly ? 'read-only' : '' ?>" id="<?= $widget->id ?>"
    data-filled-class="<?= $widget->filledFaClass ?>"
    data-empty-class="<?= $widget->emptyFaClass ?>">
        <?= Html::hiddenInput($name, $value, [ 'id' => $inputId ]) ?>
        <?php for ( $i = 0; $i < $value; $i++ ) : ?>
            <i class='rate-item fa <?= $widget->filledFaClass ?>'></i>
        <?php endfor; ?>
        <?php for ( $i = $value; $i < $widget->maxRating; $i++ ) : ?>
            <i class='rate-item fa <?= $widget->emptyFaClass ?>'></i>
        <?php endfor; ?>
</div>
