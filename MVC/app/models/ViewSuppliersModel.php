<?php
class ViewSuppliersModel extends model{
	 public $title = 'Workers Informations';
     
	public function getAllSuppliers()
    {
        $this->dbh->query('select * from suppliers');

        $suppliersRecord = $this->dbh->resultSet();
        return $suppliersRecord;
    }
	
}


?>