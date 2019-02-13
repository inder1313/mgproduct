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
  <style>
      .tabimg{height: 60px;width: 135px;}
      .tabtext{font-size: 15px;}
  </style>
</head>
<body>
	<?php
		include("header.php");
	?>
	<div class="content">
        <div class="container-fluid">
        	<div class="row">
                <div class="col-sm-3">
                    <h2>Slider Images</h2></div>
        		<div class="col-sm-6">
        			<div class="modal-body">
        				<?= form_open_multipart('admin/addSlider');?>
        					<h4 class="text-primary">Choose Your Image</h4><input type="file" name="image" placeholder="Choose Image" required=""><code>Size Should be 1200*700 Pixels</code><br><br>
        					<input type="submit" class="btn" name="submit" value="Upload">
        				</form>
        				<h3>Current Images</h3>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i=0;
                                        foreach($this->adminmod->get_slider_image() as $rec)
                                        {
                                            $i++;
                                    ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><img class="tabimg" src="<?=base_url();?>slider/<?=$rec->image_name?>"></td>
                                            <td><a href="<?=site_url("admin/delete_slider_image/$rec->id");?>"><button class="btn btn-danger">Delete</button></a></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>

                            </table>
        			</div>
        		</div>
                <div class="col-sm-3"></div>
        	</div>
        	<hr>
        	<div class="row">
                <div class="col-sm-3">
                    <h2>Portfolio Images</h2></div>
        		<div class="col-sm-6">
        			<div class="modal-body">
        				<?=form_open_multipart('admin/insert_portfolio_image');?>
        					<h4 class="text-primary">Choose Your Image</h4>
                            <input type="file" name="portfolio_image" placeholder="Choose Image" required=""><code>Size Should be 400*300 Pixels</code><br><br>
        					<h4 class="text-primary">Title</h4>
        					<input type="text" class="form-control" style="font-size: 20px;" name="description" required="">
        					<input type="submit" class="btn" name="submit" value="Upload">
        				</form>
        				<h3>Current Images</h3>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i=0;
                                        foreach($this->adminmod->get_portfolio_image() as $rec)
                                        {
                                            $i++;
                                    ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><img class="tabimg" src="<?=base_url();?>portfolio/<?=$rec->image_name?>"></td>
                                            <td><?=$rec->description?></td>
                                            <td><a href="<?=site_url("admin/delete_portfolio_image/$rec->id");?>"><button class="btn btn-danger">Delete</button></a></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>

                            </table>
        			</div>
        		</div>
                <div class="col-sm-3"></div>
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