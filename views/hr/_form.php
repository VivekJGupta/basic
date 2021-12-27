<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Hr;


/* @var $this yii\web\View */
/* @var $model app\models\Hr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hr-form">

    <?php $form = ActiveForm::begin();?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?> -->

    <!-- <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <!-- <?= $form->field($model, 'is_active')->textInput() ?> -->


    <?= Html::dropDownList('test_menu', 2,
        ArrayHelper::map(Hr::find()->all(), 'id', 'name'),
        ['text'=>"Select option", 'prompt' => "Status", 'class'=>"select form-control"]
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
