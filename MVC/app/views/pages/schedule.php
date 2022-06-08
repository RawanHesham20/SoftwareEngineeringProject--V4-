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

<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>


<?php
require APPROOT . '/views/inc/navbar.php';
class schedule extends view
{

public function output()
{
  $title = $this->model->title;
  $schedule=$this->model->getSchedule();


}
}
?>
<br><br>
<div class="container">
              <div class="timetable-img text-center">
                  <img src="img/content/timetable.png" alt="">
              </div>
              <div class="table-responsive">
                  <table class="table table-bordered text-center">
                      <thead>
                          <tr class="bg-light-gray">
                              <th class="text-uppercase">Time
                              </th>
                              <th class="text-uppercase">Monday</th>
                              <th class="text-uppercase">Tuesday</th>
                              <th class="text-uppercase">Wednesday</th>
                              <th class="text-uppercase">Thursday</th>
                              <th class="text-uppercase">Friday</th>
                              <th class="text-uppercase">Saturday</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="align-middle">09:00am</td>
                              <td>
                                  
                                  <div class="margin-10px-top font-size14">9:00-10:00</div>
                                  <div class="font-size13 text-light-gray">Slot 1</div>
                              </td>
                              <td>
                                 
                                  <div class="margin-10px-top font-size14">9:00-10:00</div>
                                  <div class="font-size13 text-light-gray">Slot 8</div>
                              </td>

                              <td>
                                  
                                  <div class="margin-10px-top font-size14">9:00-10:00</div>
                                  <div class="font-size13 text-light-gray">Slot 9</div>
                              </td>
                              <td>
                                  
                                  <div class="margin-10px-top font-size14">9:00-10:00</div>
                                  <div class="font-size13 text-light-gray">Slot 7</div>
                              </td>
                              <td>
                                  
                                  <div class="margin-10px-top font-size14">9:00-10:00</div>
                                  <div class="font-size13 text-light-gray">Slot 10</div>
                              </td>
                              <td>
                                  
                                  <div class="margin-10px-top font-size14">9:00-10:00</div>
                                  <div class="font-size13 text-light-gray">Slot 11</div>
                              </td>
                          </tr>

                          <tr>
                              <td class="align-middle">10:00am</td>
                              <td>
                                  
                                  <div class="margin-10px-top font-size14">10:00-11:00</div>
                                  <div class="font-size13 text-light-gray">Slot 5</div>
                              </td>
                              <td class="bg-light-gray">

                              </td>
                              <td>
                                 
                                  <div class="margin-10px-top font-size14">10:00-11:00</div>
                                  <div class="font-size13 text-light-gray">Slot 12</div>
                              </td>
                              <td>
                                  
                                  <div class="margin-10px-top font-size14">10:00-11:00</div>
                                  <div class="font-size13 text-light-gray">Slot 2</div>
                              </td>
                              <td>
                                  
                                  <div class="margin-10px-top font-size14">10:00-11:00</div>
                                  <div class="font-size13 text-light-gray">Slot 13</div>
                              </td>
                              <td class="bg-light-gray">

                              </td>
                          </tr>

                          <tr>
                              <td class="align-middle">11:00am</td>
                              <td>
                               
                                  <div class="margin-10px-top font-size14"></div>
                              </td>
                              <td>
                                  
                                  <div class="margin-10px-top font-size14"></div>
                              </td>
                              <td>
                                  
                                  <div class="margin-10px-top font-size14"></div>
                              </td>
                              <td>
                                  
                                  <div class="margin-10px-top font-size14"></div>
                              </td>
                              <td>
                                  
                                  <div class="margin-10px-top font-size14"></div>
                              </td>
                              <td>
                                 
                                  <div class="margin-10px-top font-size14"></div>
                              </td>
                          </tr>

                          <tr>
                              <td class="align-middle">12:00pm</td>
                              <td class="bg-light-gray">

                              </td>
                              <td>
                                  
                                  <div class="margin-10px-top font-size14">12:00-1:00</div>
                                  <div class="font-size13 text-light-gray">Slot 4</div>
                              </td>
                              <td>
                                  
                                  <div class="margin-10px-top font-size14">12:00-1:00</div>
                                  <div class="font-size13 text-light-gray">Slot 14</div>
                              </td>
                              <td>
                
                                  <div class="margin-10px-top font-size14">12:00-1:00</div>
                                  <div class="font-size13 text-light-gray">Slot 15</div>
                              </td>
                              <td class="bg-light-gray">

                              </td>
                              <td>
                                  <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</span>
                                  <div class="margin-10px-top font-size14">12:00-1:00</div>
                                  <div class="font-size13 text-light-gray">Slot 16</div>
                              </td>
                          </tr>

                          <tr>
                              <td class="align-middle">01:00pm</td>
                              <td>
                                  <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                                  <div class="margin-10px-top font-size14">1:00-2:00</div>
                                  <div class="font-size13 text-light-gray">Slot 3</div>
                              </td>
                              <td>
                                  <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>
                                  <div class="margin-10px-top font-size14">1:00-2:00</div>
                                  <div class="font-size13 text-light-gray">Slot 6</div>
                              </td>
                              <td class="bg-light-gray">

                              </td>
                              <td>
                                  <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                                  <div class="margin-10px-top font-size14">1:00-2:00</div>
                                  <div class="font-size13 text-light-gray">Slot 17</div>
                              </td>
                              <td>
                                  <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</span>
                                  <div class="margin-10px-top font-size14">1:00-2:00</div>
                                  <div class="font-size13 text-light-gray">Slot 18</div>
                              </td>
                              <td>
                                  <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>
                                  <div class="margin-10px-top font-size14">1:00-2:00</div>
                                  <div class="font-size13 text-light-gray">Slot 19</div>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
           <div class="form-btn"><center>
                <a href='Reservation' class="submit-btn" style= "background-color: pink; border:black; color:white; font-size:40px;">Back to form</a></center>
              </div>
