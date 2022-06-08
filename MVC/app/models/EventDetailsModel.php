<?php
class EventDetailsModel extends model
{
     public $title = 'About MIU SE305 Blog';
     public $data = 'Test Data';

        protected $name;
    protected $date;
    protected $starttime;
    protected $endtime;
    protected $eventType;
    protected $client;
    protected $location;
    protected $guestsNumber;
     protected $requirements;

    public function __construct()
    {
        parent::__construct();
        $this->supplier = "";
        $this->date = "";
        $this->starttime = "";
        $this->endtime = "";
        $this->eventType = "";
        $this->client = "";
        $this->location = "";
        $this->guestsnumber = "";
        $this->requirements = "";
    }
    public function getSupplier()
    {
        return $this->supplier;
    }

    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
    }
    public function getRequirements()
    {
        return $this->requirements;
    }

    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getStartTime()
    {
        return $this->starttime;
    }

    public function setStartTime($starttime)
    {
        $this->starttime = $starttime;
    }
        public function getEndTime()
    {
        return $this->endtime;
    }

    public function setEndTime($endtime)
    {
        $this->endtime = $endtime;
    }
    public function getEventType()
    {
        return $this->EventType;
    }

    public function setEventType($eventtype)
    {
        $this->eventtype = $eventtype;
    }
    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getClient()
    {
        return $this->client;
    }
    public function setClient($client)
    {
        $this->client = $client;
    }

    public function getGuestsNumber()
    {
        return $this->guestsnumber;
    }
    public function setGuestsNumber($guestsnumber)
    {  
        $this->guestsnumber = $guestsnumber;
    }

    public function Add()
    {
        $this->dbh->query("INSERT INTO reservedevents (`Client`, `EventDate`, `StartTime`,`EndTime`,`EventType`,`Location`,`Supplier`,`NumberOfGuests`,`Requirements`) VALUES(:Client, :EventDate, :StartTime, :EndTime,:EventType,:Supplier,:Location,:NumberOfGuests,:Requirements)");
        $this->dbh->bind(':Client', $this->client);
        $this->dbh->bind(':EventDate', $this->date);
        $this->dbh->bind(':StartTime', $this->starttime);
        $this->dbh->bind(':EndTime', $this->endtime);
        $this->dbh->bind(':EventType', $this->eventtype);
        $this->dbh->bind(':Supplier', $this->supplier);
        $this->dbh->bind(':Location', $this->location);
        $this->dbh->bind(':NumberOfGuests', $this->guestsnumber);
          $this->dbh->bind(':Requirements', $this->requirements);
        return $this->dbh->execute();
    }
}
