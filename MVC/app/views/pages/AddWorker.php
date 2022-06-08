<?php
class AddWorker extends view
{
  public function output()
  {

      require APPROOT . '/views/pages/adminPage.php';

    $this->printForm();
    

  }

  private function printForm()
  {
    $action = URLROOT . 'pages/AddWorker';

    $text = <<<EOT
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
      <input type="text" name="name" id="name"  >
    </div>
  <div class="form-group">
      <label for="Department"> department: <sup>*</sup></label>
      <input type="text" name="department" id="department">
    </div>
  <div class="form-group">
      <label for="PhoneNumber"> number: <sup>*</sup></label>
      <input type="text" name="number" id="number">
    </div>
      <div class="row mt-4">
        <div class="col">
          <input type="submit" value="Add" class="form-control btn btn-lg btn-primary btn-block">
        </div>
      </div>
      </div>
    </form>
    </div>
    </div>
    </div>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }

}
?>
