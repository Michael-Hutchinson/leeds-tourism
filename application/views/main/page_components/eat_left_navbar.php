<div id="MainMenu">
    <div class="side-header">
        <h4>In This Section</h4>
    </div>
  <div class="list-group panel">

    <?php
    foreach($left_nav_headings as $left_nav_heading) { ?>

    <a href="#<?php echo $left_nav_heading->id; ?>" class="list-group-item list-group-item-warning" data-toggle="collapse" data-parent="#MainMenu"><?php echo $left_nav_heading->name; ?></a>
    <div class="collapse" id="<?php echo $left_nav_heading->id; ?>">
        <?php 
        //Get sub headings
        foreach($left_nav_sub_headings as $left_nav_sub_heading) {  

        //Sub heading details
        foreach ($left_nav_sub_heading as $left_nav_sub_heading_details) {

            if($left_nav_heading->id == $left_nav_sub_heading_details->section_category_id) echo '<a href=/eat/page/'.$left_nav_sub_heading_details->id.' class="list-group-item">'.$left_nav_sub_heading_details->name.'</a>';
        }
        } ?>
    </div>
    <?php } ?>
  </div>
</div>