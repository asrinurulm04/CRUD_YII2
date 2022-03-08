<?php

use yii\helper\html;

$this->title = 'Create Mobil';
$this->params['breadcrumbs'][] = ['label' => 'mobil','url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row">
  <?= $this->render('_form', [
      'model' => $model,
  ]) ?>
</div>