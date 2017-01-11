    <section id="boxes">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 boxes">
            <div class="white-background overflow-hidden">
                <div class="col-xs-12 col-sm-12 padding0">
                  <div class="padding20 box-text">
                    <h2><span class="blue">REGISTER ADMIN USER</span></h2>
                      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>

        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <?php $this->load->view('admin_dashboard/page_components/admin_left_navbar'); ?>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="second-header"><i class="fa fa-fw fa-envelope"></i> Please Register New Users Below</h4>
                        </div>
                            <div class="panel-body">
                            <?php print form_open('register'); ?>
                                <form>
                                    <div class="form-group row">
                                            <label for="registerFirstName" class="col-sm-4 form-control-label">First Name:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="first_name" required />
                                                <span class="text-danger"><?php echo form_error('first_name'); ?></span>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="registerSurname" class="col-sm-4 form-control-label">Surname:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="surname" required />
                                                <span class="text-danger"><?php echo form_error('surname'); ?></span>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="registerEmail" class="col-sm-4 form-control-label">Email:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="email" required />
                                                <span class="text-danger"><?php echo form_error('email'); ?></span>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="registerUsername" class="col-sm-4 form-control-label">Username:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="username" required />
                                                <span class="text-danger"><?php echo form_error('username'); ?></span>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="registerPassword" class="col-sm-4 form-control-label">Password:</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" name="password" required />
                                                <span class="text-danger"><?php echo form_error('password'); ?></span>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button type="submit" class="btn btn-default">Register</button>
                                        </div>
                                    </div>
                                </form>
                                <?php print form_close(); ?>
                            </div>
                                    <div class="panel-footer"></div>
                    </div>
                    <?php print $this->session->flashdata("message"); ?>
                </div>
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