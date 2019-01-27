<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="apple-touch-icon" href="<?=base_url()?>/css/favicon/mgfavicon.png">
  <link rel="icon" type="image/png" href="<?=base_url()?>/css/favicon/mgfavicon.png">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="<?=base_url();?>css/admincss.css?v=2.1.0" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>

</head>
<body>
	<?php
		include("header.php");
	?>
  <?php
    if($this->session->flashdata('querydelete')=="success")
      {
    ?>
    <script>swal('Success!!','Query Deleted from Database','success');</script>
    <?php
      }
    if($this->session->flashdata('querydelete')=="error")
      {
  ?>
          echo "<script>swal('Oops!!','Something went wrong. Please Try Again','error');</script>
    <?php
      }
  
  ?>
	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>Query Manager</h2>
              <?php
                $i=0;
                foreach($results as $rec)
                {
                  if($rec->read_status=='0')
                  {
              ?>
                <button class="accordion">From <?=$rec->name?> (Click to view)</button>
                <div class="panel">
                  <p>Contact <?=$rec->contact?><br>Email <?=$rec->email?><br>Message<br><?=$rec->query_text?></p>
                  <a href="<?=site_url("admin/update_read/$rec->id")?>"><button class='btn btn-primary'>Mark as Read</button></a>&nbsp;
                  <a href="mailto:<?=$rec->email?>"><button class='btn btn-success'>Reply</button></a>
                  <a href=""><button class="btn btn-danger" disabled="">Delete Query</button></a>
                </div><br><br>
              <?php
                }
                if($rec->read_status=='1')
                {
              ?>
                <button class="accordion">From <?=$rec->name?> (Click to view)</button>
                <div class="panel">
                  <p>Contact <?=$rec->contact?><br>Email <?=$rec->email?><br>Message<br><?=$rec->query_text?></p>
                  <a href=""><button class='btn btn-primary' disabled=''>Read</button></a>&nbsp;<a href='mailto:<?=$rec->email?>'><button class='btn btn-success'>Reply</button></a>
                  <a href="<?=site_url("admin/delete_query/$rec->id")?>"><button class="btn btn-danger">Delete Query</button></a>
                </div><br><br>
              <?php
                }
              }
              ?>
              <div class="pagination">
                <p><?php echo $links; ?></p>
              </div>
          </div>
        </div>
  </div>
  <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
  <script src="<?= base_url();?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url();?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url();?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?= base_url();?>assets/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="<?= base_url();?>assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
</body>
</html>