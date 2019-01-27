<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/loginstyle.css">
	<link rel="apple-touch-icon" href="<?=base_url()?>/css/favicon/mgfavicon.png">
  <link rel="icon" type="image/png" href="<?=base_url()?>/css/favicon/mgfavicon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		if($this->session->flashdata('adminupdate')=="success")
			{
    ?>
    <script>swal('Success!!','Account Updated. Kindly Login','success').then(willRedirect => {
  if (willRedirect) {
    window.location.href = "<?=site_url('admin/backend')?>";
  }
});</script>
    <?php
			}
		if($this->session->flashdata('adminupdate')=="error")
			{
	?>
    			<script>swal('Oops!!','Something went wrong. Please Try Again','error');</script>
    <?php
			}
	
	?>
	<div class="box">
		<h2>Admin Login</h2>
		<?=form_open('admin/login');?>
			<div class="inputBox">
				<input type="text" name="username" required="">
				<label>Username</label>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required="">
				<label>Password</label>
			</div>
			<span style="color:#fff"><strong><?=$this->session->flashdata('error');?></strong></span>
                <div id="lower">
				<input type="submit" name="" value="Login">
			
		</form>
	</div>
</body>
</html>