<?php

class EditWorkerModel extends model
{
    public  $title = 'Edit Worker';
   protected $id;
    protected $name;
    protected $department;
    protected $number;

    public function __construct()
    {
        parent::__construct();
        $this->id = '';
        $this->name = '';
        $this->department    = '';
        $this->number = '';
    }
  public function getID()
    {
        return $this->id;
    }
    public function setID($id)
    {
        $this->id = $id;
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


    public function Edit($id)
    {
      $this->dbh->query("UPDATE `workers` SET `Name` = :Name, `Department` = :Department, `PhoneNumber` = :Number WHERE `workers`.`id` = ".$id);
      $this->dbh->bind(':Name', $this->Name);
      $this->dbh->bind(':Department', $this->Department);
      $this->dbh->bind(':PhoneNumber', $this->PhoneNumber);

      $workerRecord = $this->dbh->execute();
      return $workerRecord;
    }


}
