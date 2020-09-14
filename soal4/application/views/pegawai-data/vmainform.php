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
			<input type="checkbox" id="check_tanggal_lahir" name="check_tanggal_lahir" value="1">
			<label for="check_tanggal_lahir">Tanggal Lahir</label><br>
		</td>
		<td>
			<input type="date" id="tanggal_lahir_awal" name="tanggal_lahir_awal" >
			<i class="glyphicon glyphicon-calendar"></i>
			</input> 
		</td>
		<td>
			<input type="date" id="tanggal_lahir_akhir" name="tanggal_lahir_akhir" >
			<i class="glyphicon glyphicon-calendar"></i>
			</input> 
		</td>
	 </tr>
	 <tr>
		<td>
			<input type="checkbox" id="check_tanggal_masuk" name="check_tanggal_masuk" value="1">
			<label for="check_tanggal_masuk">Tanggal Masuk</label><br>
		</td>
		<td>
			<input type="date" id="tanggal_masuk_awal" name="tanggal_masuk_awal" >
			<i class="glyphicon glyphicon-calendar"></i></input> 
		</td>
		<td>
			<input type="date" id="tanggal_masuk_akhir" name="tanggal_masuk_akhir" >
			<i class="glyphicon glyphicon-calendar"></i></input> 
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
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Tanggal Masuk</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

			<?php
			for($j=0;$j<count($data_pegawai);$j++)
			{
			?>
				<tr>
				<td><?php echo $data_pegawai[$j]->nomor_induk ;?></td>
				<td><?php echo $data_pegawai[$j]->nama ;?></td>
				<td><?php echo $data_pegawai[$j]->alamat ;?></td>
				<td><?php echo $data_pegawai[$j]->tanggal_lahir ;?></td>
				<td><?php echo $data_pegawai[$j]->tanggal_masuk ;?></td>
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
