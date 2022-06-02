<?php

class AddWorkerModel extends model
{
    public  $title = 'Add New Worker';
   
    protected $name;
    protected $department;
    protected $number;

    public function __construct()
    {
        parent::__construct();
        $this->name = '';
        $this->department    = '';
        $this->number = '';
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDepartment()
    {
        return $this->department;
    }
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function getNumber()
    {
        return $this->number;
    }
    public function setNumber($number)
    {
        $this->number = $number;
    }


    public function Add()
    {
        $this->dbh->query("INSERT INTO workers (`Name`, `Department`, `PhoneNumber`) VALUES(:Name, :Department, :PhoneNumber)");
        $this->dbh->bind(':Name', $this->name);
        $this->dbh->bind(':Department', $this->department);
        $this->dbh->bind(':PhoneNumber', $this->number);

        return $this->dbh->execute();
    }
    
    public function getAllWorkers()
    {
        $this->dbh->query('select * from workers');

        $WorkersRecord = $this->dbh->resultSet();
        return $WorkersRecord;
    }


}