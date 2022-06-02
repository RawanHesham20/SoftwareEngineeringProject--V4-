<?php
class AddSupplier extends view
{
  public function output()
  {

    require APPROOT . '/views/pages/adminPage.php';

    $this->printForm();
    require APPROOT . '/views/inc/footer.php';

  }

  private function printForm()
  {
    $action = URLROOT . 'pages/AddSupplier';

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
      <label for="ID"> ID: <sup>*</sup></label>
      <input type="text" name="id" id="id"  >
    </div>
  <div class="form-group">
      <label for="Name"> Name: <sup>*</sup></label>
      <input type="text" name="name" id="name"  >
    </div>
  <div class="form-group">
      <label for="email"> email: <sup>*</sup></label>
      <input type="text" name="email" id="email">
    </div>
  <div class="form-group">
      <label for="PhoneNumber"> Number: <sup>*</sup></label>
      <input type="text" name="number" id="number">
    </div>
      <div class="form-group">
      <label for="supplies"> Supplies: <sup>*</sup></label>
      <input type="text" name="supplies" id="supplies">
    </div>
    <div class="container">
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
  }

}
?>
