<br>
<br>
<div class="container" id="home">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php
        $i=0;
        foreach($this->adminmod->get_slider_image() as $rec)
        {
          if ($i==0) {
      ?>
      <div class="item active">
        <img src="<?=base_url();?>slider/<?=$rec->image_name?>" style="width:100%;">
      </div>
      <?php
        $i++;
        }
        else{
      ?>
      <div class="item">
        <img src="<?=base_url();?>slider/<?=$rec->image_name?>" style="width:100%;">
      </div>
      <?php
        }
      }
      ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
