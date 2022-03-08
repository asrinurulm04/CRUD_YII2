<?php
use yii\helpers\Html;
?>
 
<style>
  table th,td{
    padding: 10px;
  }
</style>
 
<?= Html::a('Create', ['create'], ['class' => 'btn btn-success']); ?>
 
<table border="1">
    <tr>
        <th>nopol</th>
        <th>nama_mobil</th>
        <th>jenis_mobil</th>
        <th>tahun_pembuatan</th>
        <th>harga_sewa</th>
        <th>kapasitas_penumpang</th>
        <th>status_mobil</th>
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
        <td><?= $field->nopol; ?></td>
        <td><?= $field->nama_mobil; ?></td>
        <td><?= $field->jenis_mobil; ?></td>
        <td><?= $field->tahun_pembuatan; ?></td>
        <td><?= $field->harga_sewa; ?></td>
        <td><?= $field->kapasitas_penumpang; ?></td>
        <td><?= $field->status_mobil; ?></td>
        <td><?= Html::a("Edit", ['mobil/edit', 'id' => $field->id_mobil]); ?> | <?= Html::a("Delete", ['mobil/delete', 'id' => $field->id_mobil]); ?></td>
    </tr>
    <?php } ?>
</table>