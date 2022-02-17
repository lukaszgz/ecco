<?php

class Course
{
    private $id;
    private $data_start;
    private $data_end;
    private $location_start;
    private $location_end;
    private $worker_id;
    private $locomotive_id;
    // private $timestamp; 

    public function __construct($courseJson)
    {
        $this->id = $courseJson['id'];
        $this->data_start = $courseJson['data_start'];
        $this->data_end = $courseJson['data_end'];
        $this->location_start = $courseJson['location_start'];
        $this->location_end = $courseJson['location_end'];
        $this->worker_id = $courseJson['worker_id'];
        $this->locomotive_id = $courseJson['locomotive_id'];
    }

    public function getId()
    {
        return $this->id;
    } 
    public function getDataStart()
    {
        return $this->data_start;
    } 
    public function getDataEnd()
    {
        return $this->data_end;
    } 
    public function getLocationStart()
    {
        return $this->location_start;
    } 
    public function getLocationEnd()
    {
        return $this->location_end;
    } 
    public function getWorkerId()
    {
        return $this->worker_id;
    } 
    public function getLocomotiveId()
    {
        return $this->locomotive_id;
    } 

}