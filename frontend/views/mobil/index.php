<?php
  use yii\helpers\Html;
  use fedemotta\datatables\DataTables;
?>
  
<p><?= Html::a('Create', ['create'], ['class' => 'btn btn-success']); ?></p>

<!-- table dengan ajax -->
<table id="example" class="display" style="width:100%" class="table table-bordered">
  <thead>
    <tr>
      <th>No Polisi</th>
      <th>Nama</th>
      <th>Jenis</th>
      <th>Tahun Pembuatan</th>
      <th>Harga Sewa</th>
      <th>Kapasitas</th>
      <th>Status</th>
    </tr>
  </thead>
</table>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/> 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>

<script>
  var url = "http://localhost/yii-application/frontend/web/index.php?r=mobil%2Fdata";
  console.log(url);
  $(document).ready(function() {
    // ajax 
    $('#example').DataTable( {
        "processing": true,
        ajax: {
              url: "http://localhost/yii-application/frontend/web/index.php?r=mobil%2Fdata",
              type: "GET",
              "datatype": "json",
              "dataSrc": function (json) {
	                if(json != null){
	                    return json
	                } else {
	                    return "";
	                }
	            }
         },
        "columns": [
            { "data": "nopol" },
            { "data": "nama_mobil" },
            { "data": "jenis_mobil" },
            { "data": "tahun_pembuatan" },
            { "data": "harga_sewa" },
            { "data": "kapasitas_penumpang" },
            { "data": "status_mobil" }
        ],
    } );
} );

</script>
