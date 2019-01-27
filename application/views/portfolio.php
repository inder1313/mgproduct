<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>Keeping in mind the diversified and varied requirements & demands of our patrons, we are offering these items in various stipulations. </h4>

  <div class="row text-center">
    <?php
      foreach($this->adminmod->get_portfolio_image() as $rec)
      {
    ?>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="<?=base_url();?>portfolio/<?=$rec->image_name?>" alt="Paris" width="400" height="300">
            <p><?=$rec->description?></p>
          </div>
        </div>
    <?php
      }
    ?>
  </div>
</div>
