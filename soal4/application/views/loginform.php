<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title></title>

<!-- Beginning of compulsory code below -->
	
</head>
<body>

<h1>Sistem Informasi </h1>


<!-- / END -->
<br><br><br><br>

<center><h3>CHPN</h3></center>
<div align="center"><br>
<?php if ($pesan != "") echo "<i>".$pesan."</i><br>"; ?>
<?php echo form_open('users-login/cform/proseslogin'); ?>

<table>
		<tr>
			<td>Email</td>
			<td> : <input type="text" name="email" id="email" value="" maxlength="20" size="20">
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td> : <input type="password" name="password" id="password" value="" maxlength="20" size="20"></td>
		</tr>		
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Login">&nbsp;<input type="reset" name="batal" value="Reset">
			 </td>
		</tr>
	</table>
	
<?php echo form_close(); ?>

</div>

</body>
</html>

