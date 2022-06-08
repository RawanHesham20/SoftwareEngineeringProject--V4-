<?php
require_once APPROOT .'/controllers/pages.php';
class EditWorker extends view
{
  public function output()
  {

    require APPROOT . '/views/pages/adminPage.php';

    $this->printForm();
   

  }

  private function printForm()
  {
    $action = URLROOT . 'pages/EditWorker/' .$this->controller->worker->id;

    $text = <<<EOT
    <div class="row">
    <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
    <center>
    <h2>{$this->controller->worker->Name}</h2></center>
    <form action="$action" method="post">
EOT;
    echo $text;
    $text = <<<EOT
    <div class="container">
  <div class="form-group">
      <label for="Name"> Name: <sup>*</sup></label>
      <input type="text" name="Name" id="name" value="{$this->controller->worker->Name}" >
    </div>
  <div class="form-group">
      <label for="Department"> department: <sup>*</sup></label>
      <input type="text" name="Department" id="department" value="{$this->controller->worker->Department}">
    </div>
  <div class="form-group">
      <label for="PhoneNumber"> number: <sup>*</sup></label>
      <input type="text" name="PhoneNumber" id="number" value="{$this->controller->worker->PhoneNumber}">
    </div>
    <div class="container">
      <div class="row mt-4">
        <div class="col">
          <input type="submit" value="Edit" class="form-control btn btn-lg btn-primary btn-block">
        </div>
      </div>
      </div>
    </form>
    </div>
    </div>
    </div></div>
EOT;
    echo $text;
  }

}
?>

