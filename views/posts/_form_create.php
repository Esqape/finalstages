<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\db;

/* @var $this yii\web\View */
/* @var $model app\models\Posts */
/* @var $model1 app\models\UploadForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label('Title of the post') ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6])->label('Body') ?>
  
    <?= $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->identity->id])->label(false) ?>

    <?= $form->field($model, 'created_at')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>
    <?= $form->field($model, 'updated_at')->hiddenInput(['value' => '0'])->label(false) ?>

    <?= $form->field($model1, 'file')->fileInput()->label('Image File(optional)') ?>

    <?= $form->field($model1, 'vidfile')->fileInput()->label('Video File(oprional)') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
