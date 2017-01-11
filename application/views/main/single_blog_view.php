    <section id="boxes">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 boxes">
            <div class="white-background overflow-hidden">
                <div class="col-xs-12 col-sm-12 padding0">
                  <div class="padding20 box-text">
                    <h2><span class="blue"><?php echo $row->title ?></span></h2>
                      <small>by <a href="#"><?php echo $row->author ?></a>
            </small>

        <!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-12">

                <!-- Blog Post -->

                <hr>

                <!-- Date/Time -->
                <p><i class="fa fa-clock-o"></i> Posted on <?php echo $row->date; ?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-rounded img-responsive center-block" src="<?php echo $row->image; ?>" alt="">

                <hr>

                <?php echo "<p>".$row->body."</p>";               

                ?>
                </div>
                </div>


                                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>