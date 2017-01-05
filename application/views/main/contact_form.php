    <section id="boxes">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 boxes">
            <div class="white-background overflow-hidden">
                <div class="col-xs-12 col-sm-12 padding0">
                  <div class="padding20 box-text">
                    <h2><span class="blue">CONTACT US</span></h2>
                      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>

                <!-- Contact Form -->
        <div class="row">
            <div class="col-md-12">
              <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                            <h4 class="second-header"><i class="fa fa-fw fa-envelope"></i> Send Us A Message</h4>
                        </div>
                      <div class="panel-body">
                            <?php print form_open('contact'); ?>
                        <form>
                            <div class="form-group row">
                                    <label for="fullname" class="col-sm-4 form-control-label">Full Name:</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name" required>
                                            <span class="text-danger"><?php echo form_error('name'); ?></span>
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="phone" class="col-sm-4 form-control-label">Phone Number:</label>
                                    <div class="col-sm-8">
                                    <input type="tel" class="form-control" name="phone" required>
                                            <span class="text-danger"><?php echo form_error('phone'); ?></span>
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="email" class="col-sm-4 form-control-label">Email Address:</label>
                                    <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" required>
                                            <span class="text-danger"><?php echo form_error('email'); ?></span>
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="message" class="col-sm-4 form-control-label">Message:</label>
                                    <div class="col-sm-8">
                                    <textarea rows="3" cols="100" class="form-control" name="message" required maxlength="999" style="resize:none"></textarea>
                                            <span class="text-danger"><?php echo form_error('message'); ?></span>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-default">Send Message</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </form>
                                <?php print form_close(); ?>
                    </div>
                          <div class="panel-footer"></div>
                </div>
                    <?php echo $this->session->flashdata('msg'); ?>
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