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

  <title>Ekdolosi Events</title>
</head>

<body>
<?php
class AddUpcomingEvents extends view
{

  public function output()
  {

    $title = $this->model->title;

    require APPROOT . '/views/pages/adminPage.php';
     $action = URLROOT . 'pages/AddUpcomingEvents';
    $text = <<<EOT
   <div class="container">
<div class="section">
    <div class="section-center">
        <div class="row">
          <div class="form">
            <div class="form-header"><center>
              <h1 style= "background-color: pink; border:black; color:white; font-size:70px;">Add The New Upcoming Event</h1>
           </center> </div>
           <br>
            <form action="$action" method="post" enctype="multipart/form-data">
              <div class="form-group">
              <span class="form-label">Title</span>
                <input class="form-control" type="text" placeholder="Enter The event Title" name="title1">
                
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                   <span class="form-label">Event Date</span>
                    <input class="form-control" type="text" placeholder="Enter the event date" required name="date">
                   
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <span class="form-label">Event Time</span>
                    <input class="form-control" type="text" placeholder="Enter the event time" required name="time">
                    
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                   <span class="form-label">Location</span>
                    <input class="form-control" type="text" placeholder="Enter the event Location" name="location">
                   
                  </div>
                </div>
                <p>
                      <label for="picture">Event Image</label>
                  <input type="file" value="Event Image" name="picture">
                  </p>
              <div class="form-btn"><center>
                <button class="submit-btn" style= "background-color: pink; border:black; color:white; font-size:20px;">Add</button></center>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src="js/jquery.min.js"></script>
  <script>
    $('.form-control').each(function () {
      floatedLabel($(this));
    });

    $('.form-control').on('input', function () {
      floatedLabel($(this));
    });

  </script>

</body>

EOT;
echo $text;

require APPROOT . '/views/inc/footer.php';
}
 
    
   
}

?>
