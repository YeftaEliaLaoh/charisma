<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Example Template</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>assets/css/datatables-bootstrap3.css" rel="stylesheet">
</head>
<body>

<div class="container">  

<table width="100%" class="table table-striped table-bordered">
 	<thead>
            <tr>
                <th>Filter Date</th>
            </tr>
        </thead>
	<tbody>
	<tr>
	<tr>
		<td>
			<input type="checkbox" id="check_tanggal_cuti" name="check_tanggal_cuti" value="1">
			<label for="check_tanggal_cuti">Tanggal Cuti</label><br>
		</td>
		<td>
			<input type="date" id="tanggal_cuti_awal" name="tanggal_cuti_awal" >
			<i class="glyphicon glyphicon-calendar"></i>
			</input> 
		</td>
		<td>
			<input type="date" id="tanggal_cuti_akhir" name="tanggal_cuti_akhir" >
			<i class="glyphicon glyphicon-calendar"></i>
			</input> 
		</td>
	 </tr>
	 <tr>
		<td>
			<input type="checkbox" id="check_durasi" name="check_durasi" value="1">
			<label for="check_durasi">Durasi</label><br>
		</td>
		<td>
			<input type="text" id="durasi" name="durasi" ></input> 
		</td>
	 </tr>
<tr>
		<td>
		</td>
		<td>
		</td>
		<td>
			<input type="button" value="Reset"><input type="button" value="Filter">
		</td>
	 </tr>
	</tr>
	</tbody>
</table>
				<td><input type="button" value="Tambah Data"><input type="button" value="Export Excel"></td>
<table width="100%" id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nomor Induk</th>
                <th>Nama</th>
                <th>Tanggal Mulai</th>
                <th>Durasi</th>
                <th>Keterangan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

			<?php
			for($j=0;$j<count($cuti_pegawai);$j++)
			{
			?>
				<tr>
				<td><?php echo $cuti_pegawai[$j]->nomor_induk ;?></td>
				<td><?php echo $cuti_pegawai[$j]->nama ;?></td>
				<td><?php echo $cuti_pegawai[$j]->tanggal_mulai ;?></td>
				<td><?php echo $cuti_pegawai[$j]->lama_cuti ;?></td>
				<td><?php echo $cuti_pegawai[$j]->keterangan ;?></td>
				<td><input type="button" value="Edit"><input type="button" value="Delete"></td>
				</tr>
			<?php } ?>
           
        </tbody>
    </table>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready( function() {
  $('#example').dataTable( {
    "aoColumns": [
      null,
      null,
      null,
      null,
      null,
{ "sType": "html" }

    ]
  } );
} );
</script>
</body>
</html>
