<?php
require_once 'infoModel.php';
class EditWorkerModel extends model
{
    public  $title = 'Add New Worker';
    protected $id;

    protected $name;
    protected $department;
    protected $number;

    public function __construct()
    {
        parent::__construct();
        $this->id='';
        $this->Name = '';
        $this->Department    = '';
        $this->PhoneNumber = '';
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getName()
    {
        return $this->Name;
    }
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    public function getDepartment()
    {
        return $this->Department;
    }
    public function setDepartment($Department)
    {
        $this->Department = $Department;
    }

    public function getNumber()
    {
        return $this->PhoneNumber;
    }
    public function setNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;
    }


    public function Edit($id)
    {
        $this->dbh->query("UPDATE `workers` SET `Name` = :Name, `Department` = :Department, `PhoneNumber` = :PhoneNumber WHERE `workers`.`id` = ".$id);
        $this->dbh->bind(':Name', $this->Name);
        $this->dbh->bind(':Department', $this->Department);
        $this->dbh->bind(':PhoneNumber', $this->PhoneNumber);
        $workRecord = $this->dbh->execute();
        return $workRecord;
    }


}
