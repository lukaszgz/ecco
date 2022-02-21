<?php

class Locomotive
{
    protected $id = 0;
    protected $name = '';

    public function __construct($locomotivesJson)
    {
        $this->id = $locomotivesJson['id'];
        $this->name = $locomotivesJson['name'];
    }

    public function getId()
    {
        return $this->id;
    } 

    public function getName()
    {
        return $this->name;
    } 

    public function setId($id)
    {
        $this->id = $id;
    } 

    public function setName($name)
    {
        $this->id = $name;
    } 
}