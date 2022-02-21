<?php

require_once('Locomotive.php');

class Locomotives
{
    private $l_array;

    public function __construct($NameJsonFile = "locomotives.txt")
    {
        if($data_locomotives = file_get_contents("./data/".$NameJsonFile))
        {
            $json_l = json_decode($data_locomotives, true);
            foreach($json_l as $k => $v)
            {
            $this->l_array[$v['id']] = new Locomotive($v);
            }
        }
    }

    public function getLocomotives()
    {
        return $this->l_array;
    } 

    public function getLocomotiveById($id)
    {
        return $this->l_array[$id];
    } 

}