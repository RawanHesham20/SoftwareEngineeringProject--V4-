<html>
<head>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
  
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="http://localhost/mvc/public/css/style.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/superfish.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/magnific-popup.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/icomoon.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/bootstrap.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/animate.css">
  <script src="http://localhost/mvc/public/js/modernizr-2.6.2.min.js"></script>
  
<?php
class Gallery extends View
{
  public function output()
  {
    $title = $this->model->title;
     require APPROOT . '/views/inc/navbar.php';
    $text = <<<EOT
       <div class="container">
  <a target="_blank" href="http://localhost/mvc/public/images/pic (40).jpg">
    <img src="http://localhost/mvc/public/images/pic (40).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>
  
    <a target="_blank" href="http://localhost/mvc/public/images/pic (41).jpg" >
    <img src="http://localhost/mvc/public/images/pic (41).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

  <a target="_blank" href="http://localhost/mvc/public/images/pic (39).jpg" >
    <img src="http://localhost/mvc/public/images/pic (39).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

    <a target="_blank" href="http://localhost/mvc/public/images/pic (38).jpg" >
    <img src="http://localhost/mvc/public/images/pic (38).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>
  <a target="_blank" href="http://localhost/mvc/public/images/pic (37).jpg">
    <img src="http://localhost/mvc/public/images/pic (37).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>
  
    <a target="_blank" href="http://localhost/mvc/public/images/pic (36).jpg" >
    <img src="http://localhost/mvc/public/images/pic (36).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

  <a target="_blank" href="http://localhost/mvc/public/images/pic (35).jpg" >
    <img src="http://localhost/mvc/public/images/pic (35).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

    <a target="_blank" href="http://localhost/mvc/public/images/pic (34).jpg" >
    <img src="http://localhost/mvc/public/images/pic (34).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

   <a target="_blank" href="http://localhost/mvc/public/images/pic (33).jpg">
    <img src="http://localhost/mvc/public/images/pic (33).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>
  
    <a target="_blank" href="http://localhost/mvc/public/images/pic (32).jpg" >
    <img src="http://localhost/mvc/public/images/pic (32).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

  <a target="_blank" href="http://localhost/mvc/public/images/pic (31).jpg" >
    <img src="http://localhost/mvc/public/images/pic (31).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

    <a target="_blank" href="http://localhost/mvc/public/images/pic (30).jpg" >
    <img src="http://localhost/mvc/public/images/pic (30).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>


  <a target="_blank" href="http://localhost/mvc/public/images/pic (25).jpg" >
    <img src="http://localhost/mvc/public/images/pic (25).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

    <a target="_blank" href="http://localhost/mvc/public/images/pic (24).jpg" >
    <img src="http://localhost/mvc/public/images/pic (24).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

   <a target="_blank" href="http://localhost/mvc/public/images/pic (23).jpg">
    <img src="http://localhost/mvc/public/images/pic (23).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>
  
    <a target="_blank" href="http://localhost/mvc/public/images/pic (22).jpg" >
    <img src="http://localhost/mvc/public/images/pic (22).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

  <a target="_blank" href="http://localhost/mvc/public/images/pic (21).jpg" >
    <img src="http://localhost/mvc/public/images/pic (21).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

    <a target="_blank" href="http://localhost/mvc/public/images/pic (20).jpg" >
    <img src="http://localhost/mvc/public/images/pic (20).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

  <a target="_blank" href="http://localhost/mvc/public/images/pic (9).jpg" >
    <img src="http://localhost/mvc/public/images/pic (9).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

    <a target="_blank" href="http://localhost/mvc/public/images/pic (10).jpg" >
    <img src="http://localhost/mvc/public/images/pic (10).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

   <a target="_blank" href="http://localhost/mvc/public/images/pic (29).jpg">
    <img src="http://localhost/mvc/public/images/pic (29).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>
  
    <a target="_blank" href="http://localhost/mvc/public/images/pic (28).jpg" >
    <img src="http://localhost/mvc/public/images/pic (28).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

  <a target="_blank" href="http://localhost/mvc/public/images/pic (27).jpg" >
    <img src="http://localhost/mvc/public/images/pic (27).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

    <a target="_blank" href="http://localhost/mvc/public/images/pic (26).jpg" >
    <img src="http://localhost/mvc/public/images/pic (26).jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>



EOT;  
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}


