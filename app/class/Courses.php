<?php

require_once('Course.php');

class Courses
{
    private $c_array;

    public function __construct($NameJsonFile = "courses.txt")
    {
        if($data_courses = file_get_contents("./data/".$NameJsonFile))
        {
            $json_c = json_decode($data_courses, true);
            foreach($json_c as $k => $v)
            {
            $this->c_array[$v['id']] = new Course($v);
            }
        }
    }

    public function getCourses()
    {
        return $this->c_array;
    } 

    public function getCoursesById($id)
    {
        return $this->c_array[$id];
    } 

    public function getCoursesByWorkerId($id)
    {
        foreach ($this->c_array as $k => $v) {
            if($v->getWorkerId() == $id)
            {
                $array[$k] = $v;
            }
        }
        return $array;
    } 

    public function getCoursesByLocomotiveId($id)
    {
        foreach ($this->c_array as $k => $v) {
            if($v->getLocomotiveId() == $id)
            {
                $array[$k] = $v;
            }
        }
        return $array;
    } 

}