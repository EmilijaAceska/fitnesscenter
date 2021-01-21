<?php
session_start();
$_SESSION["login"]=-1;
require_once "../../classes/database.php";//parent
require_once "model.administration.php";//dete
$objAdmin= new ModelAdministration();
$results=$objAdmin->selectAdmin();
$find=0;
foreach($results as $row){
  if($row["admin_name"]==$_GET["admin_name"] && $row["admin_password"]==sha1($_GET["admin_password"])){
    $find=1;
    $_SESSION["login"]=$row["admin_id"];
  }
}

$getAdmin=array();
$getAdmin["records"][]=array("find"=>$find,"id"=>$_SESSION["login"]);
echo json_encode($getAdmin);

?>