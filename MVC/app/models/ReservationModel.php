<?php
class ReservationModel extends model
{
     public $title = 'About MIU SE305 Blog';
     public $data = 'Test Data';

      protected $name;
    protected $date;
    protected $time;
    protected $eventtype;
    protected $number;
    protected $email;
    protected $availability;

    public function __construct()
    {
        parent::__construct();
        $this->name = '';
        $this->date    = '';
        $this->time = '';
         $this->eventtype = '';
          $this->number = '';
           $this->email = '';
            $this->availability = "1";
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getMeetingDate()
    {
        return $this->date;
    }
    public function setMeetingDate($date)
    {
        $this->date = $date;
    }
        public function getMeetingTime()
    {
        return $this->time;
    }
    public function setMeetingTime($time)
    {
        $this->time = $time;
    }

    public function getEventType()
    {
        return $this->eventtype;
    }
    public function setEventType($eventtype)
    {
        $this->eventtype = $eventtype;
    }

    public function getNumber()
    {
        return $this->number;
    }
    public function setNumber($number)
    {
        $this->number = $number;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function Add()
    {
        $this->dbh->query("INSERT INTO reservation (`Name`, `MeetingDate`, `MeetingTime`, `EventType`,`PhoneNumber`,`Email`) VALUES(:Name, :MeetingDate, :MeetingTime, :EventType, :PhoneNumber, :Email)");
        $this->dbh->bind(':Name', $this->name);
        $this->dbh->bind(':MeetingDate', $this->date);
         $this->dbh->bind(':MeetingTime', $this->time);
          $this->dbh->bind(':EventType', $this->eventtype);
        $this->dbh->bind(':PhoneNumber', $this->number);
         $this->dbh->bind(':Email', $this->email);

        return $this->dbh->execute();
    }






}
