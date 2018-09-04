<?php 

  echo "\nInstance data: ";
  $data = $_GET["http://169.254.169.254/latest/meta-data/"];

  var_dump($data);
?>