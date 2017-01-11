    <header>

<script>
$(document).ready(function () {
    $('.nav li a').click(function(e) {

        $('.nav li').removeClass('active');

        var $parent = $(this).parent();
        if (!$parent.hasClass('active')) {
            $parent.addClass('active');
        }
        e.preventDefault();
    });
});

</script>

<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">
                <img alt="Leeds Logo" src="assets/images/leeds-logo.png">
              </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
              <ul class="nav navbar-nav">
                <li><a href="/">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="/stay">Stay</a></li>
                <li><a href="/see">See & Do</a></li>
                <li><a href="/eat">Eat & Drink</a></li>
                <li><a href="/blog">Latest News</a></li>
                <li><a href="/map">City Map</a></li>
                <li><a href="/travel">Travelling</a></li>
                <li><a href="<?php print base_url().'contact'; ?>">Contact</a></li>
              </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $username; ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php print base_url().'logout'; ?>" onclick="return confirm('Are You Sure You Want To Logout?');">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>