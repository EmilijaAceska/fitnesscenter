<?php
function deteVoGradinka($age){
    if($age<=5){
        echo "Vaseto dete e zapisano vo gradinka!";
    } else{
        echo "Vaseto dete ne ispolnuva uslovi za zapisuvanje vo gradinka!";
    }
}
deteVoGradinka(5);
echo "<br>";
deteVoGradinka(4);
echo "<br>";
deteVoGradinka(6);
echo "<hr>";

function deteVoUciliste($age){
    if($age==6 || $age==7){
        echo "Vaseto dete e zapisano vo osnovno skolo!";
    }else{
        echo "Vaseto dete ne moze da bide zapisano vo osnovno skolo!";
    }
}
deteVoUciliste(6);
echo "<br>";
deteVoUciliste(7);
echo "<br>";
deteVoUciliste(5);
echo "<hr>";

function upisNaFakultet($diplomaSredno){
    if($diplomaSredno==true){
        echo "Cestito!Vie gi ispolnuvate uslovite!";
    }else{
        echo "Gi nemate potrebnite dokumenti za upis na fakultet!";
    }
}
upisNaFakultet(true);
echo "<br>";
upisNaFakultet(false);
echo "<hr>";

function godiniDoPenzija($gender,$age){
    $f=62;
    $penzijaF=$f-$age;
    $penzijaM=$penzijaF + 2;
    if($gender=='female'){
        echo $penzijaF;
    }else{
        echo $penzijaM;
    }
}
godiniDoPenzija('female',28);
echo "<br>";
godiniDoPenzija('male',28);
echo "<hr>";

function godiniDoPenzija2($gender,$age){
    $f=62;
    $m=64;
    $penzijaF=$f-$age;
    $penzijaM=$m-$age;
    if($gender=='female'){
        echo $penzijaF;
    }else{
        echo $penzijaM;
    }
}
godiniDoPenzija2('female',28);
echo "<br>";
godiniDoPenzija2('male',28);
echo "<hr>";

function kvadrat($a){
    $P=$a*$a;
    echo "P = a * a = $a * $a = $P";
}
kvadrat(5);
echo "<hr>";

function kruznica($r,$PI){
    $P=$r*$r*$PI;
    $PI=pi();
    echo "P = r * r * PI = $r * $r * $PI = $P";
}

kruznica(5,pi());
echo "<hr>";

// zbir na site broevi od 1 do 10
$sum=0;
for($i=1; $i<=10; $i++){
    $sum += $i;
}
echo "Zbirot na broevite od 1 do 10 e $sum!";
echo "<br>";

//zbir na parni od 1 do 10 
$sum=0;
for($i=0; $i<=10; $i=$i+2){
    $sum += $i;
}
echo "Zbirot na parnite broevi od 1 do 10 e $sum!";
echo "<br>";
//zbir na neparni od 1 do 10
$sum=0;
for($i=1; $i<=10; $i=$i+2){
    $sum += $i;
}
echo "Zbirot na broevite od 1 do 10 e $sum!";
echo "<br>";
echo "<hr>";

require_once "person.php";
$objGradinka = new Person();
$objGradinka->deteVoGradinka(5);
echo "<br>";
$objGradinka->deteVoUciliste(7);
echo "<br>";
$objGradinka->upisNaFakultet(true);
echo "<br>";
echo "<hr>";
require_once "matematika.php";
$objZbir = new Matematika();
$objZbir->zbirNaSite();
echo "<br>";
$objZbir->zbirNaParni();
echo "<br>";
$objZbir->zbirNaNeparni();
echo "<br>";

?>