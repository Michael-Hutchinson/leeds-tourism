    <section id="boxes">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 boxes">
            <div class="white-background overflow-hidden">
                <div class="col-xs-12 col-sm-12 padding0">
                  <div class="padding20 box-text">
                    <h2><span class="blue">LATEST NEWS</span></h2>
                      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
	
<?php foreach (array_reverse($rows) as $r) : ?>
	<div class="row">
        <div class="col-md-5">
            <a href="#">
                <img class="img-responsive img-rounded center-block img-hover" src="<?php echo $r->image; ?>" alt="">
            </a>
        </div>

		<div class="col-md-7">
            <h3>
                <a href="/"><?php echo anchor("blog/post/{$r->id}", $r->title); ?></a>
            </h3>
            <p>by <a href="#"><?php echo $r->author; ?></a>
            </p>
            <p><?php echo substr($r->body, 0, 200).'...'; ?></p>
            <a class="btn btn-default" href="<?php  base_url()?>blog/post/<?php echo $r->id ?>">Read More <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <hr>
<?php endforeach; ?>

                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>