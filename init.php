<?php

require('class/Course.php');
require('class/Locomotive.php');
require('class/Worker.php');

$data_courses = file_get_contents("courses.txt");
$data_workers = file_get_contents("workers.txt");
$data_locomotives = file_get_contents("locomotives.txt");

$json_c = json_decode($data_courses, true);
$json_w = json_decode($data_workers, true);
$json_l = json_decode($data_locomotives, true);

$c_array = array();
$w_array = array();
$l_array = array();

foreach($json_c as $k => $v)
{
  $c_array[] = new Course($v);
}
foreach($json_w as $k => $v)
{
  $w_array[] = new Worker($v);
}
foreach($json_l as $k => $v)
{
  $l_array[] = new Locomotive($v);
}

// print_r($l_array);

$row_courses_html = '
<h1>Lista kursów</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Data start</th>
      <th scope="col">Data end</th>
      <th scope="col">location start</th>
      <th scope="col">location end</th>
      <th scope="col">worker_id</th>
      <th scope="col">locomotive_id</th>
    </tr>
  </thead>
  <tbody>
';
foreach ($c_array as $key => $value) {
    $row_courses_html .= "<tr>";
    // $row_courses_html .= '';
    $row_courses_html .=  '<th scope="row"><a href="workers.php?w_id='.$value->getWorkerId().'">'.$value->getId().'</a></th>';
    $row_courses_html .=  "<td>".$value->getDataStart()."</td>";
    $row_courses_html .=  "<td>".$value->getDataEnd()."</td>";
    $row_courses_html .=  "<td>".$value->getLocationStart()."</td>";
    $row_courses_html .=  "<td>".$value->getLocationEnd()."</td>";
    $row_courses_html .=  "<td>".$value->getWorkerId()."</td>";
    $row_courses_html .=  "<td>".$value->getLocomotiveId()."</td>";
    $row_courses_html .= "</tr>";
  }

$row_courses_html .='</tbody></table>';





$row_locomotives_html = '
<h1>Lista lokomotyw</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
';

foreach ($l_array as $key => $value) {
    $row_locomotives_html .= "<tr>";
    $row_locomotives_html .=  '<th scope="row">'.$value->getId().'</th>';
    $row_locomotives_html .=  "<td>".$value->getName()."</td>";
    $row_locomotives_html .= "</tr>";
}
$row_locomotives_html .='</tbody></table>';
