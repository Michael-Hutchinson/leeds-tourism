    <section id="boxes">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 boxes">
            <div class="white-background overflow-hidden">
                <div class="col-xs-12 col-sm-12 padding0">
                  <div class="padding20 box-text">
                    <h2><span class="blue">ADMIN DASHBOARD</span></h2>
                      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>

        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <?php $this->load->view('admin_dashboard/page_components/admin_left_navbar'); ?>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">

				<h2><span class="purple">Welcome <?php echo $session_data["first_name"]." ". $session_data["surname"]; ?>!</span></h2>
                <h4>Please use the navigation on the left hand side for the functions you require</h4>

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