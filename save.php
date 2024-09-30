<?php
$conn=mysqli_connect("localhost" , "username" , "password" , "databasename");

if ($conn){
    echo("connected successful");

} else{
    echo("connect failed !");
}

$name=$_POST('Name');
$specialty=$_POST('specialty');
$goal=$_POST('goal');
$lang=$_POST('lang');
$value=$_POST('value');
$link=$_POST('specialtylink');

$data="INSERT INTO login VALUES('$name' , 'specialty' , '$goal' , '$lang' , '$value' , '$link')";

$check=mysqli_query($conn,$data);

if($check){
    echo("data sent");
}else{
    echo("data not sent");
}




?>