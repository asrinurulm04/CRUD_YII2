<?php
  use yii\helpers\Html;
	use yii\bootstrap4\ActiveForm;
	use yii\helpers\ArrayHelper;
  use app\models\Jenis;
?>
 
<?php $form = ActiveForm::begin(); ?>
 
  <?= $form->field($model, 'nopol'); ?>
  <?= $form->field($model, 'nama_mobil'); ?>
  <?= $form->field($model, 'jenis_mobil')->dropDownList(
		ArrayHelper::map(Jenis::find()->all(),'id_jenis','jenis'),
		['prompt'=>'Pilih Jenis']
	) ?>
  <?= $form->field($model, 'tahun_pembuatan')->textInput(['type' => 'number']); ?>
  <?= $form->field($model, 'harga_sewa')->textInput(['type' => 'number']); ?>
  <?= $form->field($model, 'kapasitas_penumpang')->textInput(['type' => 'number']); ?>
  <?= $form->field($model, 'status_mobil')->radioList( ['active'=>'active', 'inactive'=>'inactive'] ); ?>

  <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
  <?= Html::a("Back", ['mobil/index'], ['class' => 'btn btn-danger']); ?>

<?php ActiveForm::end(); ?>