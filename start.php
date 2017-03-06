<?php


//$con = mysqli_connect("localhost", "root", "root") or die("can't connect");
//$con2 = mysqli_connect("localhost", "root", "root","react") or die("can't connect");
////$mysqli = new mysqli("localhost", "root", "root", "react");
//
//mysqli_select_db($con,'react') or die("can't connectss");
//
//$data =[];
//$results =
//    mysqli_fetch_array(mysqli_query($con2,"SELECT * from users"));
//    foreach ($results as $result) {
//      $data['user'][] = $result;
//    }



header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");


$users['users'] = [
    ["id"=>1,"first_name"=>"osana","last_name"=>"mohsen","iamge"=>"my_image"],
    ["id"=>2,"first_name"=>"amr","last_name"=>"mohamed","iamge"=>"my_image2"]
];
$rsut = json_encode($users);
echo $rsut;