<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CartProducts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cart-products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cost')->textInput(['type' => 'number', 'min' => 0, 'max' => 2147483647]) ?>

    <?= $form->field($model, 'count')->textInput(['type' => 'number', 'min' => 1, 'max' => 2147483647]) ?>

    <?= $form->field($model, 'is_special_offer')->checkbox(['uncheck' => "False", 'value' => "True"]) ?>

    <?= $form->field($model, 'created_at')->textInput(['readonly'=> true]) ?>

    <?= $form->field($model, 'updated_at')->textInput(['readonly'=> true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
