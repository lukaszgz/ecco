<?php

class workers
{
    protected $id = 0;
    protected $first_name = '';
    protected $last_name = '';
    private $timestamp; 

    public function getFirstName()
    {
        return $this->first_name;
    } 

    public function getLastName()
    {
        return $this->last_name;
    } 

    public function setName($name)
    {
        $this->name = $name;
    } 

    public function getId()
    {
        return $this->id;
    } 

    public function setId($id)
    {
        $this->id = $id;
    } 
}