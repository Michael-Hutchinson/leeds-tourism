<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Contact</h1>
            <small>If you wish to contact us do so here</small>
        </div>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a>
            </li>
            <li class="active">Contact</li>
        </ol>
    </div>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Map Column -->
    <div class="col-md-8">
        <!-- Google Map -->
        <div class="map" id="map"></div>
                <div class="hidden-lg hidden-md"><hr></div>
    </div>
    <!-- Contact Details Column -->
    <div class="col-md-4">
        <address>
          <strong>Hartlepool Safeguarding Children Board.</strong><br>
          Civic Centre, Level 4,<br>
          Victoria Road, Hartlepool,<br>
          TS24 8AY.
        </address>

        <p><i class="fa fa-phone"></i> 
            <abbr title="Telephone">T</abbr>: (01429) 523825</p>
        <p><i class="fa fa-envelope-o"></i> 
            <abbr title="Email">E</abbr>: <a href="mailto:HSCB@Hartlepool.gov.uk">HSCB@Hartlepool.gov.uk</a>
        </p>
        <p><i class="fa fa-clock-o"></i> 
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
            
    </div>
</div>
<!-- /.row -->

<!-- Contact Section -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                <h1>Send Us A Message</h1>
                </div>
            </div>
        </div>
                <!-- Contact Form -->
        <div class="row">
            <div class="col-md-12">
            	<div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                    	<div class="panel-heading">
                            <h4 class="second-header"><i class="fa fa-fw fa-envelope"></i> Please Note We Only Reply During Working Hours</h4>
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

<!-- Map -->
<script>
var map;
function initMap() {
var myLatLng = {lat: 54.685797, lng: -1.214287};
map = new google.maps.Map(document.getElementById('map'), {
center: myLatLng,
zoom: 17,
disableDefaultUI: true,
mapTypeId: google.maps.MapTypeId.HYBRID
});

var contentString = '<div id="content">'+
  '<div id="siteNotice">'+
  '</div>'+
  '<h2 id="firstHeading" class="firstHeading">Hartlepool Safeguarding Childrens Board</h2>'+
  '<div id="bodyContent">'+
  '<p><b>Hartlepool Borough Council</b></br>'+
  'Victoria Rd, Hartlepool TS24 8AY,</br>'+
  'United Kingdom'+
  '</div>'+
  '</div>';

var infowindow = new google.maps.InfoWindow({
content: contentString
});

var image = '/assets/images/map_marker.png';
var mapMarker = new google.maps.Marker({
position: myLatLng,
map: map,
icon: image
});

mapMarker.addListener('click', function() {
infowindow.open(map, mapMarker);
});
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDu1IymTNXLuAiHhDeO-OzClhYgkDLCS-g&amp;callback=initMap" async defer> </script>