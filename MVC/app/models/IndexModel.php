<?php
class IndexModel extends model
{
     public $title = ' ';
     public $subtitle = ' ';

       public function getAllUpcomingEvents()
    {
        $this->dbh->query('select * from upcomingevents');

        $eventRecord = $this->dbh->resultSet();
        return $eventRecord;
    }

}
