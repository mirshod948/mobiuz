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
                'status',
            ],
        ]) ?>

    </div><!-- br-section-wrapper -->

</div><!-- br-pagebody -->
