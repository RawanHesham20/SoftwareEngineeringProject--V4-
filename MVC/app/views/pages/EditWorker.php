<?php
class EditWorker extends view
{
  public function output()
  {

    require APPROOT . '/views/inc/navbar.php';

    $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }

  private function printForm()
  {
    $action = URLROOT . 'pages/EditWorker';

    $text = <<<EOT
    <div class="container">
    <div class="row">
    <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
    <h2>Sign Up</h2>
    <form action="$action" method="post">
EOT;
    echo $text;
    $text = <<<EOT
	<div class="form-group">
      <label for="Name"> Name: <sup>*</sup></label>
      <input type="text" Name="name" id="Name" >
    </div>
	<div class="form-group">
      <label for="Department"> department: <sup>*</sup></label>
      <input type="text" name="Department" id="Department">
    </div>
	<div class="form-group">
      <label for="PhoneNumber"> number: <sup>*</sup></label>
      <input type="text" name="Number" id="Number">
    </div>
      <div class="row mt-4">
        <div class="col">
          <input type="submit" value="Edit" class="form-control btn btn-lg btn-primary btn-block">
        </div>
      </div>
      </div>
    </form>
    </div>
    </div>
    </div>
EOT;
    echo $text;
  }

}
