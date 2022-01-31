<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CartProducts */
$this->title = 'Summary';
$this->params['breadcrumbs'][] = ['label' => 'Cart Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cart-products-update">

    <h1><?= Html::encode('Cart discount total: ' . number_format($discountTotal, 0, ' ', ' ') . ' HUF') ?></h1>
    <h2><?= Html::encode('Cart total: ' . number_format($total, 0, ' ', ' ') . ' HUF') ?></h2>
</div>
