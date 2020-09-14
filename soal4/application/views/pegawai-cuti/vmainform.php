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
echo form_open('pegawai-cuti/cform/cari');
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
			<input type="button" value="Reset"><input type="submit" value="Filter">
		</td>
	 </tr>
	</tr>
	</tbody>
</table>
<?php echo form_close(); ?>

<table width="100%" id="maintable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nomor Induk</th>
                <th>Nama</th>
                <th>Tanggal Mulai</th>
                <th>Durasi</th>
                <th>Keterangan</th>
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

</body>
</html>
