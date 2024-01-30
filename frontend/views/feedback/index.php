<?php

use frontend\models\Feedback;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\FeedbackSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Feedbacks';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="pd-30">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Feedback', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
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
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'name',
                    'email:email',
                    'phone',
                    'message:ntext',
                    //'captcha',
                    //'created_at',
                    //'updated_at',
                    //'status',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Feedback $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?>
            </div><!-- form-layout-footer -->
        </div><!-- form-layout -->



    </div><!-- br-section-wrapper -->


