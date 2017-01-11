    <section id="boxes">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 boxes">
            <div class="white-background overflow-hidden">
                <div class="col-xs-12 col-sm-12 padding0">
                  <div class="padding20 box-text">
                    <h2><span class="blue"><?php echo $rows->title; ?></span></h2>
                      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>

<!-- About/Team Photo -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <?php $this->load->view('main/page_components/stay_left_navbar'); ?>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
            <?php echo "<p>".$rows->body."</p>";   ?>
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