<?php
class infoModel extends model{
	 public $title = 'Workers Informations';
     
	public function getAllWorkers()
    {
        $this->dbh->query('select * from workers');

        $WorkersRecord = $this->dbh->resultSet();
        return $WorkersRecord;
    }
	
}


?>
