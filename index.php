<?php

require('class/courses.php');

?>

<!doctype html>
<html lang="pl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Zadanie Ecco RAIL!</title>
  </head>
  <body>
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
<?php
$data = file_get_contents("courses.txt");
$json_a = json_decode($data, true);

$c_array = array();

foreach($json_a as $k => $v)
{
  $c_array[] = new courses($v);
}

foreach ($c_array as $key => $value) {
  echo "<tr>";
  echo  '<th scope="row">'.$value->getId().'</th>';
  echo  "<td>".$value->getDataStart()."</td>";
  echo  "<td>".$value->getDataEnd()."</td>";
  echo  "<td>".$value->getLocationStart()."</td>";
  echo  "<td>".$value->getLocationEnd()."</td>";
  echo  "<td>".$value->getWorkerId()."</td>";
  echo  "<td>".$value->getLocomotiveId()."</td>";
  echo "</tr>";
}
// print_r($c_array);

?>
        
      </tbody>
    </table>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>