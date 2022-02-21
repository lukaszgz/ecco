<?php
require('init.php');

Part::getHeader();

$row_courses_html = '
<h1>Kursy</h1>
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
$courses_array = $courses->getCourses();
foreach ($courses_array as $key => $course) {

  $worker = $workers->getWorkerById($course->getWorkerId());
  $locomotive = $locomotives->getLocomotiveById($course->getLocomotiveId());

  $row_courses_html .= "<tr>";
  $row_courses_html .=  '<th scope="row">'.$course->getId().'</th>';
  $row_courses_html .=  "<td>".$course->getDataStart()."</td>";
  $row_courses_html .=  "<td>".$course->getDataEnd()."</td>";
  $row_courses_html .=  "<td>".$course->getLocationStart()."</td>";
  $row_courses_html .=  "<td>".$course->getLocationEnd()."</td>";   
  $row_courses_html .=  "<td>".$worker->getName()."</td>";    
  $row_courses_html .=  "<td>".$locomotive->getName()."</td>";
  $row_courses_html .= "</tr>";
}
$row_courses_html .='</tbody></table>';

echo $row_courses_html;


?>


<div class="d-grid gap-2">
<a href="workerslist.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Maszyniści</a>
<a href="locomotiveslist.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Lokomotywy</a>
</div>



<?php
Part::getFooter();
?>
