<?php

class AddAdminModel extends model
{
    public  $title = 'Add New Worker';
   
    protected $name;
    protected $email;
    protected $password;

    public function __construct()
    {
        parent::__construct();
        $this->name = '';
        $this->email    = '';
        $this->password = '';
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

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function Add()
    {
        $this->dbh->query("INSERT INTO admins (`name`, `email`, `password`) VALUES(:name, :email, :password)");
        $this->dbh->bind(':name', $this->name);
        $this->dbh->bind(':email', $this->email);
        $this->dbh->bind(':password', $this->password);

        return $this->dbh->execute();
    }
    


}