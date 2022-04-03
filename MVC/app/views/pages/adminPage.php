	<html>
	<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/style.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/superfish.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/magnific-popup.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/icomoon.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/bootstrap.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/animate.css">
  <script src="http://localhost/mvc/public/js/modernizr-2.6.2.min.js"></script>


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	
	  <header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">

							
							
							

					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo" style="font-size: 30px; font-style: italic; color: black;"><a aria-current="page" href="<?php echo URLROOT . 'public'; ?>">Ekdolosi</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a aria-current="page" href="">Home</a></li>
							<li><a href="<?php echo URLROOT . 'pages/info'; ?>">Workers </a></li>
							<li><a href="<?php echo URLROOT . 'pages/gallery'; ?>">Event Details</a></li>
							
								
                             <li><a class="dropdown-item" href="<?php echo URLROOT . 'public'; ?>">Logout</a></li>
							
							
							
							
							
						</ul>
					</nav>
				</div>
			</div>
		</header>

    </div>
  </div>
</nav>
</html>
<?php
class adminPage extends view
{

  public function output()
  {
	  $title = $this->model->title;

    
    $text = <<<EOT
	<link rel="stylesheet" href="css/style.css">	
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"> $title</h1>
      
    </div>
  </div>
EOT;
    echo $text;
    
  }
}
?>