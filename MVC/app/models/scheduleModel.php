<?php
class scheduleModel extends model{
	 public $title = 'Schedule';

	public function getSchedule()
    {
        $this->dbh->query('select * from schedule');

        $schedule = $this->dbh->resultSet();
        return $schedule;
    }


}


?>
