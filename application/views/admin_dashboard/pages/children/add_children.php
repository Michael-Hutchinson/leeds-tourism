<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Add New Children Page</h1>
            <small>Subheading</small>
        </div>
        <ol class="breadcrumb">
            <li><a href="/logout" onclick="return confirm('Are You Sure You Want To Logout?');">Logout</a>
            </li>
            <li><a href="/admin">Admin Dashboard</a>
            </li>
            <li><a href="/admin/children/view">All Pages</a>
            </li>
            <li class="active">Add New Children Page</li>
        </ol>
    </div>
</div>

        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <?php $this->load->view('admin_dashboard/page_components/admin_left_navbar'); ?>
            </div>
            <!-- Content Column -->

        <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="second-header"><i class="fa fa-fw fa-newspaper-o"></i> Add A New Children Page Below</h4>
                        </div>
                            <div class="panel-body">
                            <?php print form_open('admin/children/view/add'); ?>
                                <form>
                                    <div class="form-group row">
                                            <label for="section_category_id" class="col-sm-2 form-control-label">Left Nav Category:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="section_category_id" required />
                                                  <?php
                                                    foreach($left_nav_headings as $left_nav_heading) {
                                                  echo '<option value='.$left_nav_heading->id.'>'.$left_nav_heading->name.'</option>';
                                                    } ?>
                                                </select>
                                                <span class="text-danger"><?php echo form_error('section_category_id'); ?></span>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="name" class="col-sm-2 form-control-label">Left Nav link:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" required />
                                                <span class="text-danger"><?php echo form_error('name'); ?></span>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="title" class="col-sm-2 form-control-label">Page Title:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="title" required />
                                                <span class="text-danger"><?php echo form_error('title'); ?></span>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="body" class="col-sm-2 form-control-label">Body:</label>
                                            <div class="col-sm-10">
                                            <textarea id="editor1" rows="10" cols="80" class="form-control" name="body" required></textarea>
                                            <script>
                                            CKEDITOR.replace( 'editor1' );
                                            </script>
                                            <span class="text-danger"><?php echo form_error('body'); ?></span>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">Submit</button>
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