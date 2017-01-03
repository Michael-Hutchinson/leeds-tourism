<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Parents & Carers Pages</h1>
            <small>Subheading</small>
        </div>
        <ol class="breadcrumb">
            <li><a href="/logout" onclick="return confirm('Are You Sure You Want To Logout?');">Logout</a>
            </li>
            <li><a href="/admin">Admin Dashboard</a>
            </li>
            <li class="active">Parents & Carers Pages</li>
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
        <p><a href="/admin/parents/view/add" class="btn btn-primary">Add New Page</a></p>
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Page Title</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($rows as $r) {
                echo '<tr>';
                    echo '<td>'.$r->id.'</td>';
                    echo '<td>'.$r->title.'</td>';
                    echo '<td>'.'<a href="/parents/page/'.$r->id.'" class="btn btn-default">View</a>'.'</td>';
                    echo '<td>'.'<a href="/admin/parents/view/edit/'.$r->id.'" class="btn btn-info">Edit</a>'.'</td>';
                    echo '<td>'.'<a href="/admin/parents/view/delete/'.$r->id.'" onclick="return confirm(\'Are You Sure You Want To Delete This?\');" class="btn btn-danger">Delete</a>'.'</td>';
                echo '</tr>';
            } ?>
            </tbody>
        </table>
        </div>
        </div>