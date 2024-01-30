<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Feedback $model */

$this->title = 'Update Feedback: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Feedbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"> <?= Html::encode($this->title) ?></h6>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div><!-- br-section-wrapper -->

</div><!-- br-pagebody -->
