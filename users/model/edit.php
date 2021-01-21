<?php
$data= json_decode(file_get_contents("php://input"));
var_dump($data);
require_once "../../classes/database.php";//parent
$table_name=$data[0]->table_name;//vnesi ime na tabela
$pk_value=$data[0]->pk_value;
switch($table_name){
  case "marki":
    require_once "model.marki.php";//dete
    $country=$data[0]->country;
    $eu=$data[0]->eu;
    $marka_img=$data[0]->marka_img;
    $objMarki=new ModelMarki();
    $objMarki->setCountry($country);
    $objMarki->setEu($eu);
    $objMarki->setMarkaImg($marka_img);
    $objMarki->setMarkaId($pk_value);
    $objMarki->editMarki();
  break;
  case "modeli":
    require_once "model.modeli.php";
    $color=$data[0]->color;
    $price=$data[0]->price;
    $km=$data[0]->km;
    $model_img=$data[0]->model_img;
    $objModel= new ModelModeli();
    $objModel->setColor($color);
    $objModel->setPrice($price);
    $objModel->setKm($km);
    $objModel->setModelImg($model_img);
    $objModel->setModelId($pk_value);
    $objModel->editModeli();
  break;
  case "dukani":
    require_once "model.dukani.php";
    $grad=$data[0]->grad;
    $br_dukan=$data[0]->br_dukan; 
    $dukan_img=$data[0]->dukan_img;
    $objDukani= new ModelDukani();
    $objDukani->setGrad($grad);
    $objDukani->setBrojDukan($br_dukan);
    $objDukani->setDukanImg($dukan_img);
    $objDukani->setDukaniId($pk_value);
    $objDukani->editDukani();
  break;
  case "vrabotenii":
    require_once "model.vrabotenii.php";
    $ime=$data[0]->ime;
    $prezime=$data[0]->prezime;
    $godini=$data[0]->godini;
    $staz=$data[0]->staz;
    $dukani_id=$data[0]->dukani_id;
    $vraboten_img=$data[0]->vraboten_img;
    $objVraboteni= new ModelVraboteni();
    $objVraboteni->setIme($ime);
    $objVraboteni->setPrezime($prezime);
    $objVraboteni->setGodini($godini);
    $objVraboteni->setStaz($staz);
    $objVraboteni->setDukaniId($dukani_id);
    $objVraboteni->setVrabotenImg($vraboten_img);
    $objVraboteni->setVraboteniId($pk_value);
    $objVraboteni->editVraboteni();
  break;
}
?>