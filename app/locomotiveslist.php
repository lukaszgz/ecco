<?php
require('init.php');

Part::getHeader();

$html = '
<h1>Lokomotywy</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Lokomotywa</th>
      <th scope="col">Maszyniści i kursy</th>
    </tr>
  </thead>
  <tbody>
';
$locomotives_array = $locomotives->getLocomotives();
foreach ($locomotives_array as $key => $locomotive) {

  $html .= "<tr>";
  $html .=  '<th scope="row">'.$locomotive->getId().'</th>';   
  $html .=  "<td>".$locomotive->getName()."</td>";
  $html .=  '<td><a href="locomotivedata.php?l_id='.$locomotive->getId().'"> Sprawdź</a></td>';
  $html .= "</tr>";
}
$html .='</tbody></table>';



echo $html;




Part::getFooter();

?>
