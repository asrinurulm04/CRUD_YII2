<?php
    use yii\helpers\Html;
    $this->title = 'Update Mobil: ' . $model->nama_mobil;
	  $this->params['breadcrumbs'][] = ['label' => 'mobil','url' => ['index']];
?>

<h1><?= Html::encode($this->title) ?></h1>
<?= $this->render('_form', [
  'model' => $model,
]) ?>