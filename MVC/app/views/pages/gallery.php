


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
        <div class="row">
  <a target="_blank" href="http://localhost/mvc/public/images/2.jpg">
    <img src="http://localhost/mvc/public/images/2.jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>
  
    <a target="_blank" href="http://localhost/mvc/public/images/1.jpg" >
    <img src="http://localhost/mvc/public/images/1.jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

  <a target="_blank" href="http://localhost/mvc/public/images/3.jpg" >
    <img src="http://localhost/mvc/public/images/3.jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

    <a target="_blank" href="http://localhost/mvc/public/images/4.jpg" >
    <img src="http://localhost/mvc/public/images/4.jpg" width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

  <a target="_blank" href="http://localhost/mvc/public/images/2.jpg">
    <img src="http://localhost/mvc/public/images/2.jpg"  width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

    <a target="_blank" href="http://localhost/mvc/public/images/1.jpg">
    <img src="http://localhost/mvc/public/images/1.jpg"  width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

    <a target="_blank" href="http://localhost/mvc/public/images/2.jpg">
    <img src="http://localhost/mvc/public/images/2.jpg"  width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

    <a target="_blank" href="http://localhost/mvc/public/images/1.jpg" >
    <img src="http://localhost/mvc/public/images/1.jpg"  width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

    <a target="_blank" href="http://localhost/mvc/public/images/4.jpg" >
    <img src="http://localhost/mvc/public/images/4.jpg"  width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

  <a target="_blank" href="http://localhost/mvc/public/images/2.jpg" >
    <img src="http://localhost/mvc/public/images/2.jpg"  width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>

    <a target="_blank" href="http://localhost/mvc/public/images/1.jpg" >
    <img src="http://localhost/mvc/public/images/1.jpg"  width="370" height="300" style="padding-top: 20px; padding-right: 15px; padding-bottom: 20px; padding-left: 15px; ">
  </a>


EOT;  
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}

