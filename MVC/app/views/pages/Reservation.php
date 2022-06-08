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
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
     $action = URLROOT . 'pages/Reservation';
    $text = <<<EOT
<div class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="form">
            <div class="form-header">
            <center>
              <h1 style= " color:pink;">Make your reservation</h1></center>
            </div>
            <form action="$action" method="post">
              <div class="form-group">
                    <span class="form-label">Name</span>
                <input class="form-control" type="text" placeholder="Enter your name" name="name">
          
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <span class="form-label">Meeting Date</span>
                    <input class="form-control" type="date" required name="date">
                    
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                  <br>
                    <select class="form-control" required name="time">
                      <option value="" selected hidden>Choose a time slot from the bellow schedule</option>
                      <option>Slot1</option>
                      <option>Slot2</option>
                      <option>Slot3</option>
                      <option>Slot4</option>
                      <option>Slot5</option>
                      <option>Slot6</option>
                      <option>Slot7</option>
                      <option>Slot8</option>
                      <option>Slot9</option>
                      <option>Slot10</option>
                      <option>Slot11</option>
                      <option>Slot12</option>
                      <option>Slot13</option>
                      <option>Slot14</option>
                      <option>Slot15</option>
                      <option>Slot16</option>
                      <option>Slot17</option>
                      <option>Slot18</option>
                      <option>Slot19</option>
                      <option>Slot20</option>
                    </select>
                    <span class="select-arrow"></span>
                    <a href='schedule' style="color:pink;"><i style='font-size:24px' class='far'>&#xf073;</i></a>
                  </div>
                </div>

              </div>

                <div class="col-md-4">
                  <div class="form-group">
                  <br>
                    <select class="form-control" required name="eventtype">
                      <option value="" selected hidden>Event type</option>
                      <option>Wedding</option>
                      <option>Engagment</option>
                      <option>Prom</option>
                      <option>Graduation</option>
                      <option>after graduation</option>
                      <option>conferences</option>
                    </select>
                    <span class="select-arrow"></span>
                
                  </div>
                </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <span class="form-label">Email</span>
                    <input class="form-control" type="email" placeholder="Enter your Email" name="email">
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                     <span class="form-label">Phone</span>
                    <input class="form-control" type="tel" placeholder="Enter you Phone Number" name="number">
                 
                  </div>
                </div>
              </div>

              <div class="form-btn"><center>
                <button class="submit-btn" style= "background-color: pink; border:black; color:white; font-size:20px;">Reserve</button></center>
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
