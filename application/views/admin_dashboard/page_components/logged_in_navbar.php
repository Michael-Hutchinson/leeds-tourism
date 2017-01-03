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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php print $session_data["username"] ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php print base_url().'logout'; ?>" onclick="return confirm('Are You Sure You Want To Logout?');">Logout</a>
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



<!-- 			<nav class="navbar navbar-inverse">
				<div class="container-fluid">

					<div class="navbar-header">
		  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
		  				</button>
		  				<a class="navbar-brand" href="<?php print base_url(); ?>">Admin</a>
					</div>


					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  				<ul class="nav navbar-nav">
		    			</ul>
		  				<ul class="nav navbar-nav navbar-right">
		  					<li class="dropdown">
          						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Posts<span class="caret"></span></a>
          						<ul class="dropdown-menu">
            						<li><a href="<?php print base_url(); ?>">View All</a></li>
            						<li><a href="<?php print base_url().'post/add'; ?>">Add Post</a></li>
            					</ul>
        					</li>
		    				<li><a href="<?php print base_url().'contact'; ?>">Contact</a></li>
		    				<li class="dropdown">
          						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php print $username ?><span class="caret"></span></a>
          						<ul class="dropdown-menu">
            						<li><a href="<?php print base_url().'logout'; ?>">Logout</a></li>
            					</ul>
        					</li>
		    			</ul>
					</div>
				</div>
			</nav>  -->