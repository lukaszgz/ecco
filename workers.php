<?php

require('init.php');

$row_workers_html = '
<h1>Lista pracowników</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
    </tr>
  </thead>
  <tbody>
';

foreach ($w_array as $key => $value) {
    if($value->getId() == $_GET['w_id'])
    {
        $row_workers_html .= "<tr>";
        $row_workers_html .=  '<th scope="row">'.$value->getId().'</th>';
        $row_workers_html .=  "<td>".$value->getFirstName()."</td>";
        $row_workers_html .=  "<td>".$value->getLastName()."</td>";
        $row_workers_html .= "</tr>";
    }
  }
  $row_workers_html .='</tbody></table>';

  echo $row_workers_html;