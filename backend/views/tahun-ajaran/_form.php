<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\TahunAjaran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tahun-ajaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tahun_mulai')->textInput() ?>

    <?= $form->field($model, 'tahun_selesai')->textInput() ?>

    <?= $form->field($model, 'status_berjalan')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
