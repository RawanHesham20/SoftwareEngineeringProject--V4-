<?php

class AddSuppliersModel extends model
{
    public  $title = 'Add New supplier';
   
    protected $name;
    protected $email;
    protected $number;
    protected $supplies;

    public function __construct()
    {
        parent::__construct();
        $this->name = '';
        $this->email    = '';
        $this->number = '';
        $this->supplies = '';
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getNumber()
    {
        return $this->number;
    }
    public function setNumber($number)
    {
        $this->number = $number;
    }
    public function getSupplies()
    {
        return $this->supplies;
    }
    public function setSupplies($supplies)
    {
        $this->supplies = $supplies;
    }



    public function Add()
    {
        $this->dbh->query("INSERT INTO suppliers (`Name`, `Email`, `PhoneNumber`, `ProvidedSupplies`) VALUES(:Name, :Email, :PhoneNumber, :ProvidedSupplies)");
        $this->dbh->bind(':Name', $this->name);
        $this->dbh->bind(':Email', $this->email);
        $this->dbh->bind(':PhoneNumber', $this->number);
        $this->dbh->bind(':ProvidedSupplies', $this->supplies);
        return $this->dbh->execute();
    }
    
    public function getAllSuppliers()
    {
        $this->dbh->query('select * from suppliers');

        $WorkersRecord = $this->dbh->resultSet();
        return $WorkersRecord;
    }


}