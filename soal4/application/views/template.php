<!doctype html>
<html lang="en">
  <head>
  	<title>CHPN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/style.css">
  </head>
  <body>
        <h2 class="mb-4">CHPN</h2>
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
		<div class="p-4 pt-5">
	        <ul class="list-unstyled components mb-5">
		  <li><a href="<?php echo base_url(); ?>index.php/pegawai-data/cform" >Data Pegawai</a></li>
		  <li><a href="<?php echo base_url(); ?>index.php/pegawai-cuti/cform" >Data Cuti</a></li>
	          <li><a href="<?php echo base_url(); ?>index.php/users-login/cform/logout">Logout</a>
		</li>
	        </ul>
	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
<?phpprint_r($isi);?>
        <?php $this->load->view($isi); ?>
      </div>
</div>

  </body>
</html>
