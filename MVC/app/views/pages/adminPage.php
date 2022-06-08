	<html>
	<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600">
	
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
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
</script>

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
								<li class="active"><a href="<?php echo URLROOT . 'pages/adminPage'; ?>">Home </a></li>
							<li><a href="<?php echo URLROOT . 'pages/EventDetails'; ?>">Event Details</a></li>
							<li><a href="<?php echo URLROOT . 'pages/AddUpcomingEvents'; ?>">Add An Upcoming Event </a></li>
							<li><a class="dropdown-item" href="<?php echo URLROOT . 'public'; ?>">Logout</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<br><br>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
<button style= 'background-color: transparent; border:black;'><a href="<?php echo URLROOT . 'pages/info'; ?>"in style ='color: #FF1493';class='edit' title='Edit' data-toggle='tooltip'><i class='far' style='font-size:48px;color:pink'>&#xf06e;</i>View Team Members</a></button>
<button style= 'background-color: transparent; border:black;'><a href="<?php echo URLROOT . 'pages/ViewSuppliers'; ?>" style ='color: #FF1493';class='edit' title='Edit' data-toggle='tooltip'><i class='far' style='font-size:48px;color:pink'>&#xf06e;</i>View Suppliers</a></button>
<button style= 'background-color: transparent; border:black;'><a href="<?php echo URLROOT . 'pages/AddAdmin'; ?>" style ='color: #FF1493';class='edit' title='Edit' data-toggle='tooltip'><i class='far' style='font-size:48px;color:pink'>&#xf06e;</i>Add An admin</a></button>
    </div>
  </div></div>
  <br><br>
</nav>

</html>
<?php
class adminPage extends view
{

  public function output()
  {
	  $title = $this->model->title;

    $events=$this->model->getNextEvents();
    $schedule=$this->model->getSchedule();

?>
<center>
<h1 style= "background-color: white; color:pink; font-size:40px;"> Our Next Events</h1></center>
<div class="container" >
     <div class="row">
          <div class="col-sm-4">
       </div>
           </div>
        

            <?php $str= "<table class='table table-bordered' width=100%>
                  <thead>
                      <tr style= 'background-color: pink; color:white; font-size:15px;' >
                      
                          <th>EventType</th>
                          <th>EventDate</th>
                          <th>Location</th>
                          <th>Event Starting Time</th>
                          <th>Event Ending Time</th>
                  				<th>Client Name</th>
                  				<th>Supplier Name</th>
                          <th>Number of Guests</th>
                  				<th>Requirement</th>
                  				<th>Actions</th>
                      </tr>
                  </thead>";

                  
                        
                        foreach($events as $x){
                        
                          $str.="<tr><td>".$x->EventType."</td><td>".$x->EventDate."</td><td>".$x->Location."</td><td>".$x->StartTime."</td><td>".$x->EndTime."</td><td>".$x->Client."</td><td>".$x->Supplier."</td><td>".$x->NumberOfGuests."</td><td>".$x->Requirements."</td><td><button style= 'background-color: transparent; border:none;''><a href='DeleteAdmin/".$x->ID."' style ='color: #FFB6C1;'' class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a> </center></button></td></tr>";


                            }

              
               
             
        
          $str.="</table>";
          echo $str;

?>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
                    <a href="schedule" style="color:pink;"><i style='font-size:50px' class='far'>&#xf073;</i>View Time Slots</a>
</div></div></div>
<br><br>
<center>
<h1 style= "background-color: white; color:pink; font-size:40px;"> This week Schedule</h1></center>
<div class="container" >
     <div class="row">
          <div class="col-sm-4">
       </div>
           </div>
        

            <?php $str1= "<table class='table table-bordered' width=100%>
                  <thead>
                      <tr style= 'background-color: pink; color:white; font-size:15px;' >
                      	<th>Meeting ID</th>
                          <th>Meeting Date</th>
                          <th>Meeting Time</th>
                         
                      </tr>
                  </thead>";

                  
                        
                        foreach($schedule as $x1){
                        
                          $str1.="<tr><td>".$x1->ID."</td><td>".$x1->MeetingDate."</td><td>".$x1->MeetingTime."</td></tr>";


                            }

              
               
             
        
          $str1.="</table>";
          echo $str1;
    
  }
}

?>

