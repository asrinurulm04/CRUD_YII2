<?php
	use yii\helpers\Html;
	use yii\widgets\DetailView;

	$this->title = $model->nopol;
	$this->params['breadcrumbs'][] = ['label' => 'Penyewas', 'url' => ['index']];
	$this->params['breadcrumbs'][] = $this->title;
	\yii\web\YiiAsset::register($this);
?>

<div class="penyewa-view">
  <h1><?= Html::encode($this->title) ?></h1>
  <p>
    <?= Html::a('Update', ['update', 'id_mobil' => $model->id_mobil], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Delete', ['delete', 'id_mobil' => $model->id_mobil], [
      'class' => 'btn btn-danger',
      'data' => [
        'confirm' => 'Are you sure you want to delete this item?',
        'method' => 'post',
      ],
    ]) ?>
  </p>

  <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
      'id_mobil',
      'nopol',
      'nama_mobil',
      'jenis_mobil',
      'tahun_pembuatan',
      'harga_sewa',
      'st'
    ],
  ]) ?>
</div>