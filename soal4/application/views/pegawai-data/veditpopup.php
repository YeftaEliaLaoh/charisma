<style type="text/css">
  table {
    font-family: Helvetica, Geneva, Arial,
          SunSans-Regular, sans-serif; 
    font-size: 12px;}

</style>

<script type="text/javascript" language="javascript" src="<?php echo $base_url; ?>assets/js/jquery.min.js"></script>
<script>
$(function()
{
	$(".tambah").click(function()
	{
		//self.close();
	});
});
</script>


<div align="center"><br>

<?php
 echo form_open('pegawai-data/cform/update_pegawai/'.$this->uri->segment(4)); ?>

  <table border="1" align="center" cellpadding="1" width="100%" cellspacing="2" bordercolor="#666666" class="proit-view" >
    <thead>
            <tr>
                <th colspan="2">Edit Data</th>
            </tr>
        </thead>
	<tbody>
	<tr>
	<tr>
		<td>
			Nama :
		</td>
		<td>
			<input type="text" id="nama" name="nama">
			
		</td>
	 </tr>
	 <tr>
		<td>
			Tanggal Lahir : 
		</td>
		<td>
			<input type="date" id="tanggal_lahir" name="tanggal_lahir" ></input> 
		</td>
	
	 </tr>
	<tr>
		<td>
			Tanggal Masuk : 
		</td>
		<td>
			<input type="date" id="tanggal_masuk" name="tanggal_masuk" ></input> 
		</td>
	
	 </tr>
	 <tr>
		<td>
			Alamat : 
		</td>
		<td>
			<input type="text" id="alamat" name="alamat" ></input> 
		</td>
	
	 </tr>
	 <tr>
		<td>
		</td>
		<td>
			<input type="button" value="Reset"><input class="update" type="submit" value="Update">
		</td>
	 </tr>
	</tr>
	</tbody>
  </table>
<?php echo $this->pagination->create_links();?>
</div>
<?php echo form_close(); ?>
