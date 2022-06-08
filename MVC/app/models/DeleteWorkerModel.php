<?php
require_once 'infoModel.php';
class DeleteWorkerModel extends model
{
    public  $title = 'Add New Worker';

    public function Delete($id)
    {
        $this->dbh->query("DELETE FROM workers WHERE id=$id");

        return $this->dbh->execute();
    }
    
  


}