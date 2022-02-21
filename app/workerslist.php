<?php

require('init.php');

Part::getHeader();

$html = '
<h1>Lista pracowników</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imię</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Lokomotywy i kursy</th>
    </tr>
  </thead>
  <tbody>
';
$workers_array = $workers->getWorkers();
foreach ($workers_array as $key => $worker) {
    
  $html .= "<tr>";
  $html .=  '<th scope="row">'.$worker->getId().'</th>';
  $html .=  "<td>".$worker->getFirstName()."</td>";
  $html .=  "<td>".$worker->getLastName()."</td>";
  $html .=  '<td><a href="workerdata.php?w_id='.$worker->getId().'"> Sprawdź</a></td>';
  $html .= "</tr>";
}


  echo $html;



  Part::getFooter();

  ?>