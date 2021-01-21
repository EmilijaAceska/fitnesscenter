<?php
class Person
{
   public function deteVoGradinka($age){
    if($age<=5){
        echo "Vaseto dete e zapisano vo gradinka!";
    } else{
        echo "Vaseto dete ne ispolnuva uslovi za zapisuvanje vo gradinka!";
    }
    }
    public function deteVoUciliste($age){
        if($age==6 || $age==7){
            echo "Vaseto dete e zapisano vo osnovno skolo!";
        }else{
            echo "Vaseto dete ne moze da bide zapisano vo osnovno skolo!";
        }
    }
    public function upisNaFakultet($diplomaSredno){
        if($diplomaSredno==true){
            echo "Cestito!Vie gi ispolnuvate uslovite!";
        }else{
            echo "Gi nemate potrebnite dokumenti za upis na fakultet!";
        }
    }
    public function godiniDoPenzija($gender,$age){
        $f=62;
        $penzijaF=$f-$age;
        $penzijaM=$penzijaF + 2;
        if($gender=='female'){
            echo $penzijaF;
        }else{
            echo $penzijaM;
        }
    }
    public function godiniDoPenzija2($gender,$age){
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
    public function isAdult($age)
    {
        if($age>=18) {
        echo "polnoleten";
        }else{
        echo "maloleten";
        }
    }
    public function zivotDenovi($age)
    {
        $zivot=$age*365;
        echo "Jas ziveam " .$zivot. " denovi!";
    }

    public function zivotDenovi2($age, $b)
    {
        $den=$age*$b;
        echo "<br>Zivot vo denovi " .$den;
    }

    public function zivotDenovi3($age, $b)
    {
        $year=365;
        $denovi=$age*$year;
        echo $denovi;
        }
    }
?>