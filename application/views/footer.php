<?php

?>
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <address>
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Bahadurgarh Road, Delhi</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91-99115 78581</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91-93105 78581</p>
      <p><span class="glyphicon glyphicon-envelope"></span> mgp.manoj@gmail.com</p>
      <p><span class="glyphicon glyphicon-envelope"></span> mgp.manoj20@gmail.com</p>
      </address>
    </div>
    <?= form_open('main/send_query'); ?>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required="">
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required="">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="contact" name="contact" maxlength="10" placeholder="Contact" type="number" class="contact" required="">
        </div>
        <div class="col-sm-6 form-group">
          <textarea class="form-control" id="comments" name="query" placeholder="Your Query" rows="1" required=""></textarea><br/>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </form>
  <br>
    <div class="col-sm-12" id="dev">
       <a href="#dev" style="text-decoration:none;color: #818181;" title="Inderjeet Singh" data-toggle="popover" data-trigger="focus" data-content="inderjeet1313@outlook.com">Developer</a>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>


