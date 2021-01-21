<?php
echo "Emilija Aceska";
echo "<hr>";
$a=8;
$b=7;
$c=$a+$b;
echo $c;
echo "<hr>";

function isAdult($age)
{
    if($age>=18) {
        echo "polnoleten";
    }else{
        echo "maloleten";
    }
}

function pravoagolnik($a,$b) 
{
    $P=$a*$b;
    echo "P=A*B=" .$a. "*" .$b. "=" .$P;
}

function zivotDenovi($age)
{
    $zivot=$age*365;
    echo "Jas ziveam " .$zivot. " denovi!";
}

function zivotDenovi2($age, $b)
{
    $den=$age*$b;
    echo "<br>Zivot vo denovi " .$den;
}

function zivotDenovi3($age, $b)
{
    $year=365;
    $denovi=$age*$year;
    echo $denovi;
}

$age=38;
zivotDenovi(38,365);
echo "<hr>";

isAdult(12);
echo "<hr>";

$ageEmilija=28;
isAdult($ageEmilija);
echo "<hr>";

$agePetar=19;
isAdult($agePetar);
echo "<hr>";

$age=12;
$lang="ENG";
if($age>=18 && $lang=="D")
{
    echo "Polnoleten";
} else {
    echo "Maloleten";
}
echo "<hr>";

pravoagolnik(6,4);
echo "<hr>";

//LOOPS
//site broevi
for($i=1;$i<=10;$i++)
{
    echo $i."<br>";
}
echo "<hr>";
//parni do 10
for($i=0;$i<=10;$i=$i+2)
{
    echo $i."<br>";
}
echo "<hr>";
//neparni do 10
for($i=1;$i<=10;$i=$i+2)
{
    echo $i."<br>";
}
echo "<hr>";

require_once "matematika.php"; //open fileName.php
//instance object
$objStanBT = new Matematika();
$objStanBT->pPravoagolnik(4,8);
echo "<br>";
$objStanBT->pPravoagolnik(7,8);
echo "<br>";
$objStanBT->kruznica(5,pi());
echo "<br>";
// $objStanBT->3.42
$objStanBT->kvadrat(2);
echo "<br>";
echo "<hr>";
$objZbir = new Matematika();
$objZbir->zbirNaSite();
echo "<br>";
$objZbir->zbirNaParni();
echo "<br>";
$objZbir->zbirNaNeparni();
echo "<br>";
$objPrikazi = new Matematika;
$objPrikazi -> siteBroevi();
echo "<br>";
$objPrikazi -> siteParni();
echo "<br>";
$objPrikazi -> siteNeparni();
require_once "person.php";
$objAdult= new Person();
$objAdult -> isAdult(18);
echo "<br>";
echo "<hr>";
$objZivot= new Person();
$objZivot -> zivotDenovi(28);
echo "<br>";
$objZivot -> zivotDenovi2(28,365);
echo "<br>";
$objZivot -> zivotDenovi3(28,365);
echo "<br>";
echo "<hr>";
require_once "database.php";
$objDb= new DB();
//Parent
$table_name="marki";
$columns_name="marka_name,country,eu";
$columns_value="'dacia', 'romanija', 1";
// $objDb->insertRow($table_name,$columns_name,$columns_value);
echo "<br>";
$table_name="vraboteni";
// $objDb->selectRow($table_name);
echo "<br>";
$table_name="marki";
$columns_name="'marka_name'";
$columns_value="'zastava'";
// $objDb->deleteRow($table_name,$columns_name,$columns_value);
echo "<br>";
echo "<hr>";
require_once "model.marki.php";//children
$objMarki=new ModelMarki();
//insert marka bez seteri
// $objMarki->insertMarkiWithoutSetter("Suzuki","Japonija",0);
//insert marka so seter
/*echo $objMarki->getMarkaName();
echo "<br>";
$objMarki->setMarkaName("Suzuki");
echo $objMarki->getMarkaName();*/
$objMarki->setMarkaName("Suzuki");
$objMarki->setCountry("JAP");
$objMarki->setEu("0");
$objMarki->insertMarkiWithSetter();
//delete
// $objMarki->deleteMarki(2);
//select
$objMarki->selectMarki("marki");
echo "<br>";
echo "<hr>";
require_once "gradeznistvo.php";
//gradeznistvo so if
$objCena= new Gradeznistvo1();
$objCena-> pravoagolen('s',5,10);
echo "<br>";
$objCena-> kruzen('s',5,pi());
echo "<br>";
$objCena-> kvadraten('k',5);
echo "<hr>";
//primer od cas
require_once "primer.php";
$objGradezenObject= new Gradeznistvo();
$objGradezenObject-> prodazbaPravoagolenObject(5,10,'s');
echo "<hr>";
//gradeznostvo so switch-domasna
require_once "gradeznistvoSwitch.php";
$objCena = new Gradeznistvo2();
$objCena-> pravoagolen(5,10,'k');
echo "<br>";
$objCena-> pravoagolen(5,10,'s');
echo "<br>";
$objCena-> pravoagolen(5,10,'d');
echo "<hr>";
$objCena-> kruzen(5,pi(),'k');
echo "<br>";
$objCena-> kruzen(5,pi(),'s');
echo "<br>";
$objCena-> kruzen(5,pi(),'d');
echo "<hr>";
$objCena-> kvadraten(5,'k');
echo "<br>";
$objCena-> kvadraten(5,'s');
echo "<br>";
$objCena-> kvadraten(5,'d');
echo "<hr>";
//zemjodelie-domasna
require_once "domasna2-zemjodelie.php";
$objZemjodelie=new Zemjodelie;
$objZemjodelie-> pravoagolna(5,10,12);
echo "<br>";
$objZemjodelie-> kruzna(15,pi(),15);
echo "<br>";
$objZemjodelie-> kvadratna(20,5);
echo "<hr>";


?>