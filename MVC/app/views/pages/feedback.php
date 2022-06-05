<?php
class feedback extends View
{
  public function output()
  {
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    

    require APPROOT . '/views/inc/navbar.php';
    $action = URLROOT . 'pages/feedback';
    $text = <<<EOT
   
<html>
 <style>
      html, body {
      min-height: 100%;
      }
      body, p { 
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      line-height: 24px;
      color: #666;
      }
      .main-block {
      display: flex;
      justify-content: center;
      align-items: center;
      }
      form {
      width: 100%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc; 
      }
      h1 {
      font-weight: 400;
      line-height: 28px;
      }
      hr {
      margin: 20px 0;
      }
      span.required {
      color: red;
      }
      .personal-details, .question-block, .statements-block {
      padding-bottom: 20px;
      }
      .personal-details >div {
      display: flex;
      flex-direction: column;
      }
      input {
      padding: 8px 5px;
      margin-bottom: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
      outline: none;
      vertical-align: middle;
      }
      input:hover, textarea:hover {
      outline: none;
      border: 1px solid #095484;
      }
      .question, .answer, table, textarea {
      width: 100%;
      }
      .answer input, table input {
      width: auto;
      }
      th, td {
      width: 14%;
      padding: 10px 0;
      border-bottom: 1px solid #ccc;
      text-align: center;
      vertical-align: unset;
      line-height: 18px;
      font-weight: 400;
      word-break: break-all;
      }
      .first-col {
      width: 30%;
      text-align: left;
      }
      small {
      display: block;
      line-height: 18px;
      opacity: 0.5;
      }
      .btn-block {
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border-radius: 5px; 
      border: none;
      background: #095484; 
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #0666a3;
      }
      @media (min-width: 568px) {
      .personal-details >div {
      flex-direction: row;
      align-items: center;
      }
      label {
      width: 95px;
      }
      input {
      width: calc((100% - 130px)/2);
      }
      input.first-name, input.seminar-title {
      margin: 0 5px 10px;
      }
      .question-block {
      display: flex;
      justify-content: space-between;
      }
      .question, .answer {
      width: 50%;
      }
      th, td {
      word-break: keep-all;
      }
      }
    </style>
  <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  

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
 <link rel="stylesheet" href="http://localhost/mvc/public/css/style.css">


<!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

<!start of feedback>
<div class="container">
 <div class="main-block">
      <form action="$action" method="post"><center>
        <h1 style="color:pink; ">Feedback Form</h1></center>
        <br>
        <p>Thank you for taking the time to fill in our online feedback form. By providing us your feedback, you are helping us understand what we do well and what improvements we need to implement.</p>

             <hr><br>
        <div class="personal-details">
          <div>
                <label style="color:pink;">Name<span class="required">*</span></label>
            <input type="text" name="name" placeholder="Please enter your Name" required/>
              </div>
<br>
             <div class="personal-details">
          <div>
                <label style="color:pink;">Email<span class="required">*</span></label>
            <input type="email" name="email" placeholder="Please enter your email" style="width:300px;" required/>
              </div></div>
            <br>
                <div class="personal-details">  
                 <label style="color:pink;">Event Type<span class="required">*</span></label>        
                    <select required  name="eventtype">
                      <option placeholder="Event Type">Event Type</option>
                      <option>wedding</option>
                      <option>engagment</option>
                      <option>gradutaion</option>
                      <option>prom</option>
                      <option>after-graduation</option>
                    </select>
                    <span class="select-arrow"></span>
                  </div>
                </div>
<p>How much do you agree with the following statements regarding the event?<span class="required">*</span></p><br>
           <div class="statements-block">
          
          <table>
            <thead>
              <tr>
                <th class="first-col"></th>
                <th>Very Satisfied</th>
                <th>Satisfied</th>
                <th>Unsatisfied</th>
                <th>Very Unsatisfied</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="first-col">Overall Event Experience</td>
                <td><input type="radio" value="very satisfied" name="experience" required/></td>
                <td><input type="radio" value="satisfied" name="experience" required/></td>
                <td><input type="radio" value="unsatisfied" name="experience" required/></td>
                <td><input type="radio" value="very unsatisfied" name="experience" required/></td>
              </tr>
              <tr>
                <td class="first-col" >Organization of the event</td>
                <td><input type="radio" value="very satisfied" name="organization" required/></td>
                <td><input type="radio" value="satisfied" name="organization" required/></td>
                <td><input type="radio" value="unsatisfied" name="organization" required/></td>
                <td><input type="radio" value="very unsatisfied" name="organization" required/></td>
              </tr>
              <tr>
                <td class="first-col" >Our Team Members</td>
                <td><input type="radio" value="very satisfied" name="teammembers" required/></td>
                <td><input type="radio" value="satisfied" name="teammembers" required/></td>
                <td><input type="radio" value="unsatisfied" name="teammembers" required/></td>
                <td><input type="radio" value="very unsatisfied" name="teammembers" required/></td>
              </tr>
            </tbody>
          </table>
        </div>
             <center>
            <button style= "background-color: transparent; border:black; color:pink; font-size:20px;" >Submit</button>
            </center>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!end of feedback>



  <!-- END fh5co-page -->

  </div>
  <!-- END fh5co-wrapper -->

  
  <!-- jQuery -->
  <script src="dist/scripts.min.js"></script>

  </body>
</html>


EOT;  
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
