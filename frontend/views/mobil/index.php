<?php
  use yii\helpers\Html;
?>
 
<p><?= Html::a('Create', ['create'], ['class' => 'btn btn-success']); ?></p>
<table class="table table-bordered">
  <tr class="text-center">
    <th>No Polisi</th>
    <th>Nama</th>
    <th>Jenis</th>
    <th>Tahun Pembuatan</th>
    <th>Harga Sewa</th>
    <th>Kapasitas</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  <?php foreach($model as $field){ ?>
  <tr class="text-center">
    <td><?= $field->nopol; ?></td>
    <td><?= $field->nama_mobil ?></td>
    <td><?= $field->jenis_mobil ?></td>
    <td><?= $field->tahun_pembuatan ?></td>
    <td><?= $field->harga_sewa ?></td>
    <td><?= $field->kapasitas_penumpang ?></td>
    <td><?= $field->status_mobil ?></td>
    <td>
      <?= Html::a("Edit", ['mobil/edit', 'id' => $field->id_mobil],['class' => 'btn btn-warning']); ?>  
      <?= Html::a("Delete", ['mobil/delete', 'id' => $field->id_mobil],['class' => 'btn btn-danger']); ?>
    </td>
  </tr>
  <?php } ?>
</table>