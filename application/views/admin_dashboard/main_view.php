<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Admin Dashboard</h1>
            <small>Subheading</small>
        </div>
        <ol class="breadcrumb">
            <li><a href="/logout" onclick="return confirm('Are You Sure You Want To Logout?');">Logout</a>
            </li>
            <li class="active">Admin Dashboard</li>
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

				<h2>Welcome <?php echo $session_data["first_name"]." ". $session_data["surname"]; ?>!</h2>
                <h4>Please use the navigation on the left hand side for the functions you require</h4>
                <p>If you requrie further assistance, please email: HSCB@hartlepool.gov.uk</p>

			</div>
		</div>