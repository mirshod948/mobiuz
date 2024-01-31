<?php

use frontend\models\Feedback;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\FeedbackSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Moderation';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="pd-30">
    <h1><?= Html::encode($this->title) ?></h1>

</div><!-- d-flex -->

<div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Top Label Layout</h6>
        <p class="mg-b-30 tx-gray-600">A form with a label on top of each form control.</p>

        <div class="form-layout form-layout-1">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    'id',
                    'name',
                    'email:email',
                    'phone',
                    'message:ntext',
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
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => ' {approve} {reject} {pending}',
                        'buttons' => [
                            'approve' => function ($url, $model, $key) {
                                return Html::a('<span class="glyphicon glyphicon-ok">Approve</span>', ['approve', 'id' => $model->id], [
                                    'title' => 'Approve',
                                    'class' => 'btn btn-success',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to approve this comment?',
                                        'method' => 'post',
                                    ],
                                ]);
                            },
                            'reject' => function ($url, $model, $key) {
                                return Html::a('<span class="glyphicon glyphicon-remove">Reject</span>', ['reject', 'id' => $model->id], [
                                    'title' => 'Reject',
                                    'class' => 'btn btn-danger',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to reject this comment?',
                                        'method' => 'post',
                                    ],
                                ]);
                            },
                        ],
                    ],
                ],
            ]); ?>


        </div><!-- form-layout-footer -->
    </div><!-- form-layout -->



</div><!-- br-section-wrapper -->


