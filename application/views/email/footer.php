<section class="container-fluid footer">
<div class="container">
<?php echo str_repeat("<br/>", 1); ?>


<!-- Bottom Footer Starts -->

<div class="row">
	<div class="col-sm-4">
		<b>Locate us :</b>
		<div id="map" style="height: 150px; width: 100%;"></div>
	</div>
	<div class="col-sm-4">
		<b>Contact:</b> <br/><br/>
		+91 92383 00403 <br/>
		support@wood-apple.co.in
	</div>
	<div class="col-sm-4">
		<b>Address:</b> <br/><br/>
		Wood apple <br/>
		N-3/192, I.R.C village <br/>
		Bhubaneswar, Odisha-751015
	</div>
</div>

<?php echo str_repeat("<br/>", 2); ?>
<div id="page-footer" role="contentinfo">
	
    <div class="copyright text-center">
    	&copy; <?php echo date('Y'); ?> Shree Sai Niketan Trust. All rights reserved.
    	<br/>
    	Made with Love
    </div>
</div>


<!-- Bottom Footer Starts -->

</div>
</section>


<!-- JS Script for GMaps -->
<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 20.298463, lng: 85.806770};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
</script>
<!-- JS Script for GMaps -->

<!-- JS Scripts-->
<script type="text/javascript" src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/user.js'); ?>"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7RpNL2_uC6XxYjutlLHvRz4oF-ADT6Qs&callback=initMap"></script>
<!-- JS Scripts-->


</body>
</html>
