<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="apple-touch-icon" href="<?=base_url()?>/css/favicon/mgfavicon.png">
  <link rel="icon" type="image/png" href="<?=base_url()?>/css/favicon/mgfavicon.png">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="<?=base_url();?>css/admincss.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
	<?php
		include("header.php");
	?>
	<div class="content">
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-sm-12">
              <div class="col-sm-6 mobileform" style="margin-left: 25%;">
                <?php
                    $rec = $this->adminmod->get_admin_data();?>

                    <?=form_open("admin/admin_setting/$rec->id");?>
                    <label class="form-control-label">Name</label><input type="text" class="form-control" name="name" required="" value="<?=$rec->name?>"><br>
                    <label class="form-control-label">Email</label><input class="form-control" type="Email" name="email" required="" value="<?=$rec->email?>"><br>
                    <label>Username</label><input type="text" class="form-control" name="username" required="" value="<?=$rec->username?>"><br>
                    <label>Password</label><input class="form-control" type="Password" name="password" required=""><br>
                    <input type="submit" class="btn btn-success" name="submit" value="Submit">
                </form>   
              </div>
        		</div>
        	</div>
    	</div>
    </div>
  <script src="<?= base_url();?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url();?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url();?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?= base_url();?>assets/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="<?= base_url();?>assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
</body>
</html>