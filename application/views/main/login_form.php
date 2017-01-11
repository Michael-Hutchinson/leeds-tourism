    <section id="boxes">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 boxes">
            <div class="white-background overflow-hidden">
                <div class="col-xs-12 col-sm-12 padding0">
                  <div class="padding20 box-text">
                    <h2><span class="blue">LOGIN PAGE</span></h2>
                      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>

                <!-- Contact Form -->
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="second-header"><i class="fa fa-fw fa-envelope"></i> Please Login Below</h4>
                        </div>
                            <div class="panel-body">
                            <?php print form_open('login'); ?>
                                <form>
                                    <div class="form-group row">
                                            <label for="inputUsername" class="col-sm-4 form-control-label">Username:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="username" required />
                                                <span class="text-danger"><?php echo form_error('username'); ?></span>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-4 form-control-label">Password:</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" name="password" required />
                                                <span class="text-danger"><?php echo form_error('password'); ?></span>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button type="submit" class="btn btn-default">Login</button>
                                        </div>
                                    </div>
                                </form>
                                <?php print form_close(); ?>
                            </div>
                                    <div class="panel-footer"></div>
                    </div>
                    <?php print $this->session->flashdata("Login_Error"); ?>
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