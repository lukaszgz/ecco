<?php

require_once('iPerson.php');

class Worker implements iPerson
{
    private int $id = 0;
    private string $first_name;
    private string $last_name;
    private string $name;
    private $timestamp; 

    public function __construct($workersJson)
    {
        $this->id = $workersJson['id'];
        $this->name = $workersJson['name'];
        $name_array = explode(' ',$workersJson['name']);
        $this->first_name = $name_array[0];
        $this->last_name = $name_array[1];

    }

    public function getFirstName()
    {
        return $this->first_name;
    } 

    public function getLastName()
    {
        return $this->last_name;
    } 

    public function getName()
    {
        return $this->name;
    } 

    public function getId()
    {
        return $this->id;
    } 

    public function setId($id)
    {
        $this->id = $id;
    } 
    public function setFirstName($f_name)
    {
        $this->first_name = $f_name;
        $this->updateTimestamp();
    } 
    public function setLastName($l_name)
    {
        $this->last_name = $l_name;
        $this->updateTimestamp();
    } 

    private function updateTimestamp()
    {
        $this->timestamp = date("Y-m-d, H:i");
    }
}