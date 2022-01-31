<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4"> Welcome to Shopping cart application!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>
        <?= Html::a('Enter', ['/cart/index'], ['class'=>'btn btn-primary']) ?>

    </div>

    <div class="body-content">

        <div class="row">

        </div>

    </div>
</div>