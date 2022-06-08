<?php
class adminPageModel extends model{
	 public $title = '';
     
	public function getNextEvents(){
		 $this->dbh->query('select * from reservedevents');

        $eventsRecord = $this->dbh->resultSet();
        return $eventsRecord;
	}

		public function getSchedule(){
		 $this->dbh->query('select * from reservation');

        $scheduleRecord = $this->dbh->resultSet();
        return $scheduleRecord;
	}

	public function getAdminById($id){
        $this->dbh->query('select * from admins where id='.$id);
        $WorkersRecord = $this->dbh->resultSet();
        return $WorkersRecord;
    }
}
?>