<?php

class Worker
{
    protected $id = 0;
    protected $first_name = '';
    protected $last_name = '';
    static private $timestamp; 

    public function __construct($workersJson)
    {
        $this->id = $workersJson['id'];
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