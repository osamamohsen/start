<?php


$con = mysqli_connect("localhost", "root", "root") or die("can't connect");
$con2 = mysqli_connect("localhost", "root", "root","react") or die("can't connect");
//$mysqli = new mysqli("localhost", "root", "root", "react");

mysqli_select_db($con,'react') or die("can't connectss");

$data =[];
$results =
    mysqli_fetch_array(mysqli_query($con2,"SELECT * from users"));
    foreach ($results as $result) {
      $data['user'][] = $result;
    }

var_dump($data);
// echo  json_encode($result);
// return $result;
