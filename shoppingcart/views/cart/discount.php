<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

$this->title = 'Discount';
$this->params['breadcrumbs'][] = ['label' => 'Cart Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

        <p>
            Please add discounts to shopping cart!
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <?= $form->field($model, 'discount_per')->textInput(['type' => 'number', 'min' => 0, 'max' => 100]) ?>
                    <?= $form->field($model, 'discount_amount')->textInput(['type' => 'number', 'min' => 0, 'max' => 2147483647]) ?>

                    <div class="form-group">
                         <?= Html::submitButton('Finish', ['class'=>'btn btn-primary']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
</div>