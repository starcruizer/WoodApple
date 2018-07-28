<?php include "header.php"; ?>
<div class="container home-slider">

<!-- Current Event Carousel Starts -->    
<div data-ride="carousel" id="myCarousel" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel
		 data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel
		 data-slide-to="1" class="active"></li>
		<li data-target="#myCarousel
		 data-slide-to="2" class="active"></li>
	</ol>

	<!-- Wrapper for Slides -->
	<div class="carousel-inner">
		<div class="carousel-item">
			<img src="<?php echo base_url('assets/images/carousel_1.jpg')?>" class="img img-responsive" width="100%">
		</div>
        <div class="carousel-caption">
            <h3>Mute Day</h3>
            <p> Special Children. Special Event</p>
        </div>

        <div class="carousel-item active">
            <img src="<?php echo base_url('assets/images/carousel_2.jpg')?>" class="img img-responsive" width="100%">
        </div>
        <div class="carousel-caption">
            <h3>Mute Day</h3>
            <p> Special Children. Special Event</p>
        </div>

        <div class="carousel-item">
            <img src="<?php echo base_url('assets/images/carousel_3.jpg')?>" class="img img-responsive" width="100%">
        </div>
        <div class="carousel-caption">
            <h3>Mute Day</h3>
            <p> Special Children. Special Event</p>
        </div>
	</div>
</div>
<!-- Current Event Carousel Starts -->

<br/>
<hr>
<h2 class="text-center">Our Events</h2>
<hr>
<br/>

<!-- Events Row 1 Starts -->
<div class="row">
    <div class="col-sm-4">
        <div class="event-box">
            <div class="event-box-image">
                <img src="<?php echo base_url('assets/images/events/2016/kwiz_bel_2016_1.jpg'); ?>" class="img img-fluid img-thumbnail" alt="Kwiz Bel">
            </div>
            <div class="event-box-text text-center">
                <span class="text-uppercase text-bold">KWIZ BELL 2016</span>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="event-box">
            <div class="event-box-image">
                <img src="<?php echo base_url('assets/images/events/2016/mute_day_1.jpg'); ?>" class="img img-fluid img-thumbnail" alt="Mute Day">
            </div>
            <div class="event-box-text text-center">
                <span class="text-uppercase text-bold">MUTE DAY 2016</span>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="event-box">
            <div class="event-box-image">
                <img src="<?php echo base_url('assets/images/events/2017/harmony_bel_2017_1.jpg'); ?>" class="img img-fluid img-thumbnail" alt="Harmony Bel">
            </div>
            <div class="event-box-text text-center">
                //
            </div>
        </div>
    </div>
</div>
<!-- Events Row 1 Ends -->

<br/>

<!-- Events Row 2 Starts -->
<div class="row">
    <div class="col-sm-4">
        <div class="event-box">
            <div class="event-box-image">
                <img src="<?php echo base_url('assets/images/events/2017/kwiz_bel_2017_1.jpg'); ?>" class="img img-fluid img-thumbnail" alt="Kwiz Bel">
            </div>
            <div class="event-box-text text-center">
                //
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="event-box">
            <div class="event-box-image">
                <img src="<?php echo base_url('assets/images/events/2016/kwiz_bel_2016_1.jpg'); ?>" class="img img-fluid img-thumbnail">
            </div>
            <div class="event-box-text text-center">
                //
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="event-box">
            <div class="event-box-image">
                <img src="<?php echo base_url('assets/images/events/2016/kwiz_bel_2016_1.jpg'); ?>" class="img img-fluid img-thumbnail">
            </div>
            <div class="event-box-text text-center">
                //
            </div>
        </div>
    </div>
</div>
<!-- Events Row 2 Ends -->

<br><br>
</div>
<?php include "footer.php"; ?>
