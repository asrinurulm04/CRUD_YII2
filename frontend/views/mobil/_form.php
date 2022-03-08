<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 
<?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($model, 'nopol'); ?>
    <?= $form->field($model, 'nama_mobil'); ?>
    <?= $form->field($model, 'jenis_mobil'); ?>
    <?= $form->field($model, 'tahun_pembuatan'); ?>
    <?= $form->field($model, 'harga_sewa'); ?>
    <?= $form->field($model, 'kapasitas_penumpang'); ?>
    <?= $form->field($model, 'status_mobil'); ?>

    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
 
<?php ActiveForm::end(); ?>