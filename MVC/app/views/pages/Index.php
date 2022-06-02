 <html>

	<head>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nuptial &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

<?php
 require APPROOT . '/views/inc/header.php';
class Index extends View
{
  public function output()
  {
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    

   

    $event=$this->model->getAllUpcomingEvents();

?>

<br><br>
	
            <div class="container">
            	<h1> Upcoming Events </h1>
                        <div class="col-md-6">


                  <?php
                       
                        foreach($event as $x){ ?>
                        	<img src="<?php echo IMAGEROOT . $x->Picture; ?>"style=" width: 500px; height: 300">
                        	<br>
                        	<?php echo $x->Title; ?><br>
                        	<?php echo " ON " ?><?php echo $x->Date; ?><?php echo " Specifically     " ?>
                        	<?php echo $x->Time; ?><br>
                        	<?php echo " @ " ?><?php echo $x->Location; ?><br>

                        	</div>
                        
          

<?php } ?>
	<h2> For Reservation call us on 01203371610 </h2>
	<br>
</div>
<?php

    $text = <<<EOT

	<!-- About Section -->
		<div id="fh5co-countdown">
			<div class="row">
<div class="w3-container" style="padding:100px 10px, color=white" id="about" >
 <h3 class="w3-center" style="font-size:60px; font-style:cursive; color:white; padding-bottom:20px;	">About Us</h3>
  <div class="w3-row-padding w3-center" style="margin-top:2px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center" style="padding:10px 0px;"></i>
      <p class="w3-large" style="font-size:40px; font-style:cursive; color:white;">Our Aim</p>
      <p>
  Ekdolosi offers A-Z event planning services from a team of experienced and energetic event planners, suppliers, venues and more. With the number of events we organise, Event Planner Ekdolosi does not need to add exorbitant fees and mark-ups to make its profit margins. This ensures that our clients list, which is constantly growing, make regular use of our services.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo" style="padding:10px 0px;"></i>
      <p class="w3-large" style="font-size:40px; font-style:cursive; color:white;">Passion</p>
      <p>We make it our priority to understand our client’s objectives, working alongside clients from concept to completion to create a unique and memorable event.
	  We rarely see a client just once. Most of our clients come to us again and again, enabling us to develop a solid understanding of their business objectives. Virtually all new customers arrive by personal recommendation.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo" style="padding:10px 0px;"></i>
      <p class="w3-large" style="font-size:40px; font-style:cursive; color:white;">story</p>
      <p>Our Journey started when we started building our own path and career that we love and we can give our all to it to make it bigger day by day and to make those events as special for us as they are special for you.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo" style="padding:10px 0px;"></i>
      <p class="w3-large" style="font-size:40px; font-style:cursive; color:white;">Support</p>
      <p>Get an appointment to meet and discuss your needs as quick as possible. So far we managed to meet all our clients after 2 or 3 days maximum from the day they apply so we can make the proccess as fast and proffesional as we can.</p>
    </div>
  </div>
</div>

			</div>
		</div>
<!end of about us section>



	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	
	<!-- jQuery -->
	<script src="dist/scripts.min.js"></script>

	</body>
</html>


EOT;	
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
