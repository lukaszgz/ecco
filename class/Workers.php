<?php

require_once('Worker.php');

class Workers
{
    private $w_array;

    public function __construct($NameJsonFile = "workers.txt")
    {
        if($data_workers = file_get_contents("./".$NameJsonFile))
        {
            $json_w = json_decode($data_workers, true);
            foreach($json_w as $k => $v)
            {
            $this->w_array[$v['id']] = new Worker($v);
            }
        }
    }

    public function getWorkers()
    {
        return $this->w_array;
    } 

    public function getWorkerById($id)
    {
        return $this->w_array[$id];
    } 

}