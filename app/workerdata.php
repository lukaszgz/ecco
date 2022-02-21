<?php

require('init.php');

Part::getHeader();


$html = '
<h1>Kursy maszynisty</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Data wyjazdu</th>
      <th scope="col">Data dojazdu</th>
      <th scope="col">Wyjazd</th>
      <th scope="col">Przyjazd</th>
      <th scope="col">Maszynista</th>
      <th scope="col">Lokomotywa</th>
    </tr>
  </thead>
  <tbody>
';
$courses_array = $courses->getCoursesByWorkerId($_GET['w_id']);
foreach ($courses_array as $key => $course) {
  $worker = $workers->getWorkerById($course->getWorkerId());
  $locomotive = $locomotives->getLocomotiveById($course->getLocomotiveId());

  $html .= "<tr>";
  $html .=  '<th scope="row">'.$course->getId().'</th>';
  $html .=  "<td>".$course->getDataStart()."</td>";
  $html .=  "<td>".$course->getDataEnd()."</td>";
  $html .=  "<td>".$course->getLocationStart()."</td>";
  $html .=  "<td>".$course->getLocationEnd()."</td>";   
  $html .=  "<td>".$worker->getName()."</td>";    
  $html .=  "<td>".$locomotive->getName()."</td>";
  $html .= "</tr>";
}
$html .='</tbody></table>';

echo $html;


  Part::getFooter();

  ?>