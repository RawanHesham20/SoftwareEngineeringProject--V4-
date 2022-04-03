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
class Reservation extends view
{

  public function output()
  {
    $title = $this->model->title;
    $data = $this->model->data;

    require APPROOT . '/views/inc/navbar.php';
    $text = <<<EOT
<div id="booking" class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="booking-form">
            <div class="form-header">
              <h1>Make your reservation</h1>
            </div>
            <form>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Enter your name">
                <span class="form-label">Name</span>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="date" required>
                    <span class="form-label">Meeting Date</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="time" required>
                    <span class="form-label">Meeting Time</span>
                  </div>
                </div>
              </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <select class="form-control" required>
                      <option value="" selected hidden>Event type</option>
                      <option>Wedding</option>
                      <option>Engagment</option>
                      <option>Prom</option>
                      <option>Graduation</option>
                      <option>after graduation</option>
                      <option>conferences</option>
                    </select>
                    <span class="select-arrow"></span>
                    <span class="form-label">Rooms</span>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="email" placeholder="Enter your Email">
                    <span class="form-label">Email</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="tel" placeholder="Enter you Phone Number">
                    <span class="form-label">Phone</span>
                  </div>
                </div>
              </div>
              <div class="form-btn">
                <button class="submit-btn">Reserve</button>
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
    require APPROOT . '/views/inc/footer.php';
  }
}
?>