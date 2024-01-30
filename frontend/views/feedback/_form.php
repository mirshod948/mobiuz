<?php

use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Feedback $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="br-pagebody mg-t-5 pd-x-30">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Top Label Layout</h6>
        <p class="mg-b-30 tx-gray-600">A form with a label on top of each form control.</p>
        <?php $form = ActiveForm::begin(); ?>
        <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
                <div class="col-lg-4">
                    <div class="form-group">
                        <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-8">
                    <div class="form-group mg-b-10-force">
                        <?= $form->field($model, 'message')->textarea([ 'class' => 'form-control']) ?>
                    </div>
                </div><!-- col-8 -->
                <div class="col-lg-8">
                    <div class="form-group mg-b-10-force">
                        <?= $form->field($model, 'captcha')->widget(Captcha::className(), [
                            'template' => '<div class="captcha_img">{image}</div>'
                                . '<a class="refreshcaptcha" href="#">'
                                . Html::img('/images/imageName.png', []) . '</a>'
                                . 'Verification Code{input}',
                        ])->label(false);  ?>
                    </div>
                </div><!-- col-8 -->
            </div><!-- row -->

            <div class="form-layout-footer">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div><!-- form-layout-footer -->
        </div><!-- form-layout -->
        <?php ActiveForm::end(); ?>


    </div><!-- br-section-wrapper -->

</div><!-- br-pagebody -->