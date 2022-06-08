
<?php
require_once 'adminPageModel.php';
class DeleteAdminModel extends model
{
  

    public function Delete($id)
    {
        $this->dbh->query("DELETE FROM reservedevents WHERE id=$id");

        return $this->dbh->execute();
    }
    
   


}