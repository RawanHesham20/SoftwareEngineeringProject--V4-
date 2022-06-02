<?php
class FeedbackModel extends model
{
     public $title = 'Feedback page';
     public $subtitle = '';

     protected $name;
    protected $email;
    protected $feedback;
    protected $rating;

    public function __construct()
    {
        parent::__construct();
        $this->name = "";
        $this->email = "";

        $this->feedback = "";
        $this->rating = "";
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

    public function getfeedback()
    {
        return $this->feedback;
    }
    public function setfeedback($feedback)
    {
        $this->feedback = $feedback;
    }

    public function getrating()
    {
        return $this->rating;
    }
    public function setrating($rating)
    {
        $this->rating = $rating;
    }

    public function Add()
    {
        $this->dbh->query("INSERT INTO feedback (`Name`, `Email`, `Feedback`,`rating`) VALUES(:Name, :Email, :Feedback, :rating)");
        $this->dbh->bind(':Name', $this->name);
        $this->dbh->bind(':Email', $this->email);
        $this->dbh->bind(':Feedback', $this->feedback);
        $this->dbh->bind(':rating', $this->rating);

        return $this->dbh->execute();
    }
}
