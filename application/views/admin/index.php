<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="apple-touch-icon" href="<?=base_url()?>/css/favicon/mgfavicon.png">
  <link rel="icon" type="image/png" href="<?=base_url()?>/css/favicon/mgfavicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="<?=base_url();?>css/admincss.css?v=2.1.0" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		include("header.php");
    $rec = $this->adminmod->get_admin_data();
	?>
	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <h4 class="text-center">Welcome <?=$rec->name?> !!</h4>
              <h4 class="text-center">All Systems Are Running Smoothly</h4>
              <div class="card-deck">
                <div class="col-sm-3">
                <div class="card bg-primary">
                  <div class="card-body text-center">
                    <h4>Total Queries</h4>
                      <?php
                        $rec = $this->adminmod->get_total_queries();
                      ?>
                      <h4><?=$rec?></h4>
                  </div>
                </div>
              </div>
                <div class="col-sm-3">
                <div class="card bg-primary">
                  <div class="card-body text-center">
                    <h4>Unread Queries</h4>
                      <?php
                        $rec = $this->adminmod->get_unread_query();
                      ?>
                      <h4><?=$rec?></h4>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card bg-primary">
                  <div class="card-body text-center">
                    <h4>Total Slider Images</h4>
                      <?php
                        $rec = $this->adminmod->get_total_slider();
                      ?>
                      <h4><?=$rec?></h4>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card bg-primary">
                  <div class="card-body text-center">
                    <h4>Total Portfolio Images</h4>
                      <?php
                        $rec = $this->adminmod->get_total_portfolio();
                      ?>
                      <h4><?=$rec?></h4>
                  </div>
                </div>
              </div>
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