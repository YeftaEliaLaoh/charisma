<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/style.css">
</head>
<body>

<div class="container">  
<?php
echo form_open('pegawai-data/cform/cari');
?>
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
			<input type="button" value="Reset"><input type="submit" value="Filter">
		</td>
	 </tr>
	</tr>
	</tbody>
</table>
<?php echo form_close(); ?>
		<input type="button" value="Tambah Data" onclick="javascript: 
            openCenteredWindow('<?php echo base_url(); ?>index.php/pegawai-data/cform/show_popup_pegawai/');" >

<table width="100%" id="maintable" class="table table-striped table-bordered">
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
				<td><input type="button" value="Edit" onclick="javascript: 
            openCenteredWindow('<?php echo base_url(); ?>index.php/pegawai-data/cform/edit_pegawai/<?php echo $data_pegawai[$j]->nomor_induk; ?>');" >
				<a href="<?php echo base_url()."index.php/pegawai-data/cform/delete/".$data_pegawai[$j]->nomor_induk; ?>"
 onclick=\"return confirm('Hapus data ini?')\">Delete</a></td>
				</td>
				</tr>
			<?php } ?>
           
        </tbody>
    </table>
</div>

<script type="text/javascript" src="<?php echo $base_url; ?>assets/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>assets/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>assets/js/jszip.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>assets/js/pdfmake.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>assets/js/vfs_fonts.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>assets/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>assets/js/buttons.print.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>assets/js/jquery.mark.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>assets/js/datatables.mark.js"></script>


<script type="text/javascript">


function openCenteredWindow(url) {

		var width = 680;
		var height = 360;
		var left = parseInt((screen.availWidth/2) - (width/2));
		var top = parseInt((screen.availHeight/2) - (height/2));
		var windowFeatures = "width=" + width + ",height=" + height +
			",status,resizable,toolbar,scrollbars,left=" + left + ",top=" + top +
			",screenX=" + left + ",screenY=" + top;
		myWindow = window.open(url, "subWind", windowFeatures);
	}
</script>
</body>
</html>
