<?php
class Gradeznistvo2 extends Matematika
{
    public function pravoagolen($a,$b,$objType){
        $eur_m2=800;
        switch($objType){
            case 'k': $eur_m2=800;
            break;
            case 's': $eur_m2=900;
            break;
            case 'd': $eur_m2=1000;
            break;
        }
        $m2=parent::pPravoagolnikVoid($a,$b);
        $vkupno=$m2*$eur_m2;
        echo $vkupno;
    }//end pravoagolen
    public function kruzen($r,$PI,$objType){
        $eur_m2=800;
        switch($objType){
            case 'k': $eur_m2=800;
            break;
            case 's': $eur_m2=900;
            break;
            case 'd': $eur_m2=1000;
            break;
        }
        $m2=parent::kruznicaVoid($r,$PI);
        $vkupno=$m2*$eur_m2;
        echo $vkupno;
    }//end kruzen
    public function kvadraten($a,$objType){
        $eur_m2=800;
        switch($objType){
            case 'k': $eur_m2=800;
            break;
            case 's': $eur_m2=900;
            break;
            case 'd': $eur_m2=1000;
            break;
        }
        $m2=parent::kvadratVoid($a);
        $vkupno=$m2*$eur_m2;
        echo $vkupno;
    }//end kvadraten
}//end class Gradeznistvo
?>