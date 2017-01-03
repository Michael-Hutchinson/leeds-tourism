<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Add New Annual Reports</h1>
            <small>Subheading</small>
        </div>
        <ol class="breadcrumb">
            <li><a href="/logout" onclick="return confirm('Are You Sure You Want To Logout?');">Logout</a>
            </li>
            <li><a href="/admin">Admin Dashboard</a>
            </li>
            <li><a href="/admin/reports/view">Annual Reports</a>
            </li>
            <li class="active">Upload New Business Report</li>
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
                <form action="<?php print base_url(). 'admin/reports/view/do_upload'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                            <label for="name" class="col-sm-2 form-control-label">Document Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" required />
                            </div>
                    </div>
                    <input type="file" name="userfile"><br>
                    <input type="submit" value="Upload Annual Reports" name="save">
                </form>
                <span class="text-danger"><?php if(isset($error)){echo $error;} ?></span>
            </div>
        </div>