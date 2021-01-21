<?php
session_start();
$_SESSION["login"]=-1;
require_once "../classes/database.php";//parent
require_once "model.users.php";//dete
$objUser= new ModelUsers();
$results=$objUser->selectUsers();
$find=0;
foreach($results as $row){
  if($row["user_name"]==$_GET["user_name"] && $row["user_password"]==sha1($_GET["user_password"])){
    $find=1;
    $_SESSION["login"]=$row["user_id"];
  }
}

$getUser=array();
$getUser["records"][]=array("find"=>$find,"id"=>$_SESSION["login"]);
echo json_encode($getUser);

?>