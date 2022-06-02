<?php
class AddUpcomingEventsModel extends model
{
     public $title = ' ';
     public $subtitle = ' ';

     protected $title1;
    protected $date;
    protected $time;
    protected $location;
      protected $picture;


    public function __construct()
    {
        parent::__construct();
        $this->title1 = '';
        $this->date    = '';
        $this->time = '';
        $this->location = '';
        $this->picture = '';
    }

    public function getTitle()
    {
        return $this->title1;
    }
    public function setTitle($title1)
    {
        $this->title1 = $title1;
    }

    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
        public function getTime()
    {
        return $this->time;
    }
    public function setTime($time)
    {
        $this->time = $time;
    }
    public function getLocation()
    {
        return $this->location;
    }
    public function setLocation($location)
    {
        $this->location = $location;
    }
        public function getPicture()
    {
        return $this->picture;
    }
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }


    public function Add()
    {
    
 
         $this->dbh->query("INSERT INTO upcomingevents (`Title`, `Date`, `Time`, `Location`,`Picture`) VALUES(:Title, :Date, :Time, :Location, :Picture)");
        $this->dbh->bind(':Title', $this->title1);
        $this->dbh->bind(':Date', $this->date);
         $this->dbh->bind(':Time', $this->time);
          $this->dbh->bind(':Location', $this->location);
        $this->dbh->bind(':Picture', $this->picture);

        return $this->dbh->execute();
    }
        public function getAllUpcomingEvents()
    {
        $this->dbh->query('select * from upcomingevents');

        $eventRecord = $this->dbh->resultSet();
        return $eventRecord;
    }
}
