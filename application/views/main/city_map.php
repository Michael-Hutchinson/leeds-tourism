    <section id="boxes">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 boxes">
            <div class="white-background overflow-hidden">
                <div class="col-xs-12 col-sm-12 padding0">
                  <div class="padding20 box-text">
                    <h2><span class="blue">CITY MAP</span></h2>
                      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>

                <!-- Map -->
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
                          <strong>Leeds. Leeds. Leeds</strong><br>
                          The Headrow,<br>
                          Leeds,<br>
                          LS1 3AA.
                        </address>

                        <p><i class="fa fa-phone"></i> 
                            <abbr title="Telephone">T</abbr>: +44 (0) 113 378 6977</p>
                        <p><i class="fa fa-envelope-o"></i> 
                            <abbr title="Email">E</abbr>: <a href="mailto:tourinfo@leeds.gov.uk">tourinfo@leeds.gov.uk</a>
                        </p>
                        <p><i class="fa fa-clock-o"></i> 
                            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                            
                    </div>
                </div>


                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!-- Map -->
<script>
var map;
function initMap() {
var myLatLng = {lat: 53.8059209, lng: -1.6758144};
map = new google.maps.Map(document.getElementById('map'), {
center: myLatLng,
zoom: 17,
disableDefaultUI: true,
mapTypeId: google.maps.MapTypeId.HYBRID
});

var contentString = '<div id="content">'+
  '<div id="siteNotice">'+
  '</div>'+
  '<h2 id="firstHeading" class="firstHeading">Visit Our Offices</h2>'+
  '<div id="bodyContent">'+
  '<p><b>For More Information</b></br>'+
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