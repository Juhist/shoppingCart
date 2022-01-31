<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CartProducts */

$this->title = 'Create Cart Products';
$this->params['breadcrumbs'][] = ['label' => 'Cart Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-products-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
