<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Feedback $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Feedbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper">

        <p class="mg-b-30 tx-gray-600">
        <h1><?= Html::encode($this->title) ?></h1>
        </p>
        <?php if (Yii::$app->session->hasFlash('success')): ?>
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <h4><i class="icon fa fa-check"></i>Saqlandi!!</h4>
                <?= Yii::$app->session->getFlash('success') ?>
            </div>
        <?php endif; ?>

        <?php if (Yii::$app->session->hasFlash('error')): ?>
            <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <h4><i class="icon fa fa-check"></i>Saved!</h4>
                <?= Yii::$app->session->getFlash('error') ?>
            </div>
        <?php endif; ?>
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'name',
                'email:email',
                'phone',
                'message:ntext',
                'captcha',
                'created_at',
                'updated_at',
                [
                    'attribute' => 'status',
                    'value' => function ($model) {
                        return ($model->status == 0) ? 'На рассмотрении' : (($model->status == 1) ? 'Одобрено' : 'Отклонено');
                    },
                    'filter' => [
                        0 => 'На рассмотрении',
                        1 => 'Одобрено',
                        2 => 'Отклонено',
                    ],
                ],
            ],
        ]) ?>

    </div><!-- br-section-wrapper -->

</div><!-- br-pagebody -->
