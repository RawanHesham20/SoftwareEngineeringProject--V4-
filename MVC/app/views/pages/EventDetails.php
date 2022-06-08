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
class EventDetails extends view
{

  public function output()
  {
    $title = $this->model->title;
    $data = $this->model->data;

    require APPROOT . '/views/pages/adminPage.php';

     $action = URLROOT . 'pages/EventDetails';
    $text = <<<EOT
   <center> <h1 style="color:pink;">Event Details Form</h1></center>
<div class="section">
    <div class="section-center" >
      <div class="container"  >
          <div class="form">
          <center>
              
            </div>
            <form action="$action" method="post">
              <div class="row">
                 <div class="col-md-4">
                  <div class="form-group">
                  <br>
                    <select class="form-control" required placeholder="choose the event type" name="eventtype">
                      <option hidden>Enter the event type</option>
                      <option>Wedding</option>
                      <option>Engagment</option>
                      <option>Prom</option>
                      <option>Graduation</option>
                      <option>after graduation</option>
                      <option>conferences</option>
                    </select>
                     <span class="select-arrow"></span>
                    <span class="form-label" ></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <span class="form-label">Event Date</span>
                    <input class="form-control" type="date" placeholder="Enter the event date" required name="date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <br>
                  <span class="form-label">Event Starting Time</span>
                    <input class="form-control" type="time" placeholder="Enter the event start time" required name="starttime">
                    
                  </div>
                </div>
              
                <div class="col-md-6">
                  <div class="form-group">
                  <br>
                    <span class="form-label" placeholder="Enter the event end time">Event End Time</span>
                    <input class="form-control" type="time"  required name="endtime">
                  
                  </div>
                </div>
                </div>
                   <div class="row">
                  <div class="form-group">
                   <br>
                    <select class="form-control" required name="guestsnumber">
                      <option hidden>Enter the guests number</option>
                      <option>10</option>
                      <option>20</option>
                      <option>30</option>
                      <option>40</option>
                      <option>50</option>
                      <option>100</option>
                      <option>500</option>
                      <option>1000</option>
                    </select>
                    <span class="select-arrow"></span>
                    <span class="form-label"></span>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                   <br>
                    <input class="form-control" type="text" placeholder="Enter Client Name" name="client">
                    <span class="form-label"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                   <br>
                    <input class="form-control" type="text" placeholder="Enter Location of event" name="location">
                    <span class="form-label"></span>
                  </div>
                </div>
              </div>
                <div class="form-group">
                 <br>
                <input class="form-control" type="text" placeholder="Enter supplier name" name="supplier">
                <span class="form-label"></span>
              </div>
               <div class="form-group">
                <br>
                <input class="form-control" type="text" placeholder="Enter the client requirements needed" name="requirements">
                <span class="form-label"></span>
              </div>
              <div class="form-btn"><center>
                <button class="submit-btn"  style= "background-color: pink; border:black; color:white; font-size:20px;">Reserve</button>
                </center>
              </div>
            </form>
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

  }
}
?>
