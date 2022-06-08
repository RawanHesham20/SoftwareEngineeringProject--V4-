<?php
require_once 'infoModel.php';
class DeleteSupplierModel extends model
{
    

    public function Delete($id)
    {
        $this->dbh->query("DELETE FROM suppliers WHERE id=$id");

        return $this->dbh->execute();
    }
    
  


}