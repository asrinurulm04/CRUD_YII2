<?php
  use yii\helpers\Html;
  $this->title = 'Create Mobil';
  $this->params['breadcrumbs'][] = ['label' => 'mobil','url' => ['index']];
?>

<h1><?= Html::encode($this->title) ?></h1>
<?= $this->render('_form', [
  'model' => $model,
]) ?>