<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Annual Reports</h1>
            <small>Subheading</small>
        </div>
        <ol class="breadcrumb">
            <li><a href="/logout" onclick="return confirm('Are You Sure You Want To Logout?');">Logout</a>
            </li>
            <li><a href="/admin">Admin Dashboard</a>
            </li>
            <li class="active">Annual Reportss</li>
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
        <p><a href="/admin/reports/view/add" class="btn btn-primary">Add New PDF</a></p>
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Document Title</th>
                    <th>View</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($data->result() as $row) { ?>
                <tr>
                    <td><?= $row->id ?></td>
                    <td><?= $row->name ?></td>
                    <td><a href="<?= base_url('assets/pdf/'.$row->file_name) ?>" class="btn btn-default">View</a></td>
                    <td><a href="<?= base_url('admin/reports/view/delete/'.$row->id) ?>"onclick="return confirm('Are You Sure You Want To Delete This?');" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
        </div>