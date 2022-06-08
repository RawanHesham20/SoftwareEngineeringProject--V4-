<?php
class FeedbackModel extends model
{
     public $title = 'Feedback page';
     public $subtitle = '';

     protected $name;
    protected $email;
    protected $eventtype;
    protected $experience;
    protected $organization;
    protected $teammembers;

    public function __construct()
    {
        parent::__construct();
        $this->name = "";
        $this->email = "";
        $this->eventtype = "";
        $this->experience = "";
        $this->organization = "";
        $this->teammembers = "";
    }
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getemail()
    {
        return $this->email;
    }

    public function setemail($email)
    {
        $this->email = $email;
    }

    public function getEventType()
    {
        return $this->eventtype;
    }
    public function setEventType($eventtype)
    {
        $this->eventtype = $eventtype;
    }

    public function getExperience()
    {
        return $this->experience;
    }
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function getOrganization()
    {
        return $this->organization;
    }
    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }

    public function getTeamMembers()
    {
        return $this->teammembers;
    }
    public function setTeamMembers($teammembers)
    {
        $this->teammembers = $teammembers;
    }

    public function Add()
    {
        $this->dbh->query("INSERT INTO feedback (`Name`, `Email`, `EventType`,`Experience`,`Organization`,`TeamMembers`) VALUES(:Name, :Email, :EventType, :Experience, :Organization, :TeamMembers)");
        $this->dbh->bind(':Name', $this->name);
        $this->dbh->bind(':Email', $this->email);
        $this->dbh->bind(':EventType', $this->eventtype);
        $this->dbh->bind(':Experience', $this->experience);
        $this->dbh->bind(':Organization', $this->organization);
        $this->dbh->bind(':TeamMembers', $this->teammembers);

        return $this->dbh->execute();
    }
}
