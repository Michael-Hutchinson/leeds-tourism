<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php print $username ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php print base_url().'logout'; ?>">Edit Your Details</a>
                    </li>
                    <li>
                        <a href="<?php print base_url().'logout'; ?>">Change Password</a>
                    </li>
                    <li>
                        <a href="<?php print base_url().'logout'; ?>">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<div class="container shadow">
    <div class="container">