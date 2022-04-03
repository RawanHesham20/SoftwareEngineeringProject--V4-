<?php
class Index extends View
{
  public function output()
  {
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
   
    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
   
<html>

	<head>
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

	

		
		<div id="fh5co-countdown">
			<div class="row">
			
			
			
			
			
			
			
			
			
			

			


<!-- About Section -->
<div class="w3-container" style="padding:100px 10px, color=white" id="about" >
 <h3 class="w3-center">About Us</h3>
  <p class="w3-center w3-large">Key features of our website</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">partners</p>
      <p>
	  Ekdolosi offers A-Z event planning services from a team of experienced and energetic event planners, suppliers, venues and more. With the number of events we organise, Event Planner Ekdolosi does not need to add exorbitant fees and mark-ups to make its profit margins. This ensures that our clients list, which is constantly growing, make regular use of our services.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>We make it our priority to understand our client’s objectives, working alongside clients from concept to completion to create a unique and memorable event.
	  We rarely see a client just once. Most of our clients come to us again and again, enabling us to develop a solid understanding of their business objectives. Virtually all new customers arrive by personal recommendation.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">story</p>
      <p>Our web application aims to provides an online platform for costumers to easily deal with the company and as for the staff and admins they need to automate necessary documentations. Our biggest challenge is to save company data from getting lost and making it much easier to find needed data once again. This application will ease the transition to the online setting and reduce workload.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>Get responses to your questions within 1 hour..</p>
    </div>
  </div>
</div>

			</div>
		</div>

				<div class="row animate-box">
					<div class="col-md-10 col-md-offset-1">
						<form class="form-inline">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="name" class="sr-only">Name</label>
									<input type="name" class="form-control" id="name" placeholder="Name">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Email">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<button type="submit" class="btn btn-primary btn-block">I am Attending</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	

	</body>
</html>


EOT;	
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
