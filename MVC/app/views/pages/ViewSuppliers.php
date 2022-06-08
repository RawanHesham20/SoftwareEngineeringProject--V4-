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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
</script>
  <title>Ekdolosi Events</title>
</head>
<body>
<?php
require APPROOT . '/views/pages/adminPage.php';
class ViewSuppliers extends view
{


  public function output()
  {
    $title = $this->model->title;
            }
          }

    $suppliers=$this->model->getAllSuppliers();

?>

<div class="container" >
      <div class="table-responsive">
          <div class="table-wrapper">
              <div class="table-title">
                  <div class="row">
                      <div class="col-sm-4">
                    <button style= 'background-color: transparent; border:black;'><a href='AddSuppliers' style ='color: #FF1493';class='edit' title='Edit' data-toggle='tooltip'><i class='fas fa-plus' style='font-size:48px;color:pink'></i>Add New Supplier</a></button>
                      </div>
                  </div>
              </div>
            </div>
          </div>

            <?php $str= "<table class='table table-bordered' width=100%>
                  <thead >
                      <tr style= 'background-color: pink; color:white; font-size:20px;'>
                      
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>ProvidedSupplies</th>
                          <th>Action</th>
                  

                      </tr>
                  </thead>";

                  
                        
                        foreach($suppliers as $x){
                        
                          $str.="<tr><td>".$x->Name."</td><td>".$x->Email."</td><td>".$x->PhoneNumber."</td><td>".$x->ProvidedSupplies."</td><td><a href='DeleteSupplier/".$x->ID."' style ='color: #FFB6C1;'' class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a></td></tr>";


                            }

              
               
             
        
          $str.="</table>";
          echo $str;
          ?>
        </div></div>
      </body></html>
 

    
                    


