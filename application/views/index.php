
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="<?=base_url()?>/css/favicon/mgfavicon.png">
  <link rel="icon" type="image/png" href="<?=base_url()?>/css/favicon/mgfavicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>/style.css">
  <style>
  
  input::-webkit-inner-spin-button,
  input::-webkit-outer-spin-button
  {
  	-webkit-appearance: none;
  }
  input[type="number"]{
  	-moz-appearance:textfield;
  }	
  #quote-carousel {
    padding: 0 10px 30px 10px;
    margin-top: 60px;
}
#quote-carousel .carousel-control {
    background: none;
    color: #CACACA;
    font-size: 2.3em;
    text-shadow: none;
    margin-top: 30px;
}
#quote-carousel .carousel-indicators {
    position: relative;
    right: 50%;
    top: auto;
    bottom: 0px;
    margin-top: 20px;
    margin-right: -19px;
}
#quote-carousel .carousel-indicators li {
    width: 50px;
    height: 50px;
    cursor: pointer;
    border: 1px solid #ccc;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    border-radius: 50%;
    opacity: 0.4;
    overflow: hidden;
    transition: all .4s ease-in;
    vertical-align: middle;
}
#quote-carousel .carousel-indicators .active {
    width: 128px;
    height: 128px;
    opacity: 1;
    transition: all .2s;
}
.item blockquote {
    border-left: none;
    margin: 0;
}
.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
}
.modal-dialog{
	margin-top: 10%!important;
}
 @media screen and (max-width: 500px){
  .modal-dialog{
  margin-top: 30%!important;
}
 }
  @media screen and (max-width: 768px){
  .modal-dialog{
  margin-top: 20%!important;
}
 }
</style>
</head>
<body>
	<?php
if($this->session->flashdata('msg')=='success')
			{
    		?>
    		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">swal('Success!!','Query Sent. We will reach you soon','success');</script>
    	<?php
			}
		  if($this->session->flashdata('msg')=="error")
			{
			?>
    		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">swal('Oops!!','Something went wrong. Please Try Again Later','error');</script>
    		<?php
			}
?>
	<?php
		if($this->session->flashdata('msg')=='success')
			{
    ?>
    <script>swal('Sent!!','We will reach you soon','success');</script>
    <?php
			}
		if($this->session->flashdata('msg')=="error")
			{
	?>
    			echo "<script>swal('Oops!!','Something went wrong. Please Try Again','error');</script>
    <?php
			}
	
	?>
  <?php
if($this->session->flashdata('feedback_msg')=='success')
      {
        ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">swal('Success!!','Thankyou for your Feedback','success');</script>
      <?php
      }
      if($this->session->flashdata('feedback_msg')=="error")
      {
      ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">swal('Oops!!','Something went wrong. Please Try Again Later','error');</script>
        <?php
      }
?>
<?php
    if($this->session->flashdata('feedback_msg')=='success')
      {
    ?>
    <script>swal('Sent!!','Thankyou for your Feedback2','success');</script>
    <?php
      }
    if($this->session->flashdata('feedback_msg')=="error")
      {
  ?>
          echo "<script>swal('Oops!!','Something went wrong. Please Try Again','error');</script>
    <?php
      }
  
  ?>
	<?php
		include("header.php");
    ?>
	<?php
		include("slider.php");
	?>
	<?php
		include("about.php");
	?>
	<?php
		include("portfolio.php");
	?>
	<?php
		include("feedback.php");
	?>
	<?php
		include("map.php");
	?>
	<?php
		include("footer.php");
	?>

</body>
</html>