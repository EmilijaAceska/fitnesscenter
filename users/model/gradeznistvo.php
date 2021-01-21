<?php
class Gradeznistvo1 extends Matematika
{
    public function pravoagolen($objType,$a,$b){
        $eur_m2=800;//kuka 800eur/m2
        if($objType=="k"){$eur_m2=800;}
        if($objType=="s"){$eur_m2=900;}
        if($objType=="d"){$eur_m2=1000;}
        $m2=parent::pPravoagolnikVoid($a,$b);
        $vkupno=$m2*$eur_m2;
        echo $vkupno;
    }//end pravoagolen
    public function kruzen($objType,$r,$PI){
        $eur_m2=800;//kuka 800eur/m2
        if($objType=="k"){$eur_m2=800;}
        if($objType=="s"){$eur_m2=900;}
        if($objType=="d"){$eur_m2=1000;}
        $m2=parent::kruznicaVoid($r,$PI);
        $vkupno=$m2*$eur_m2;
        echo $vkupno;
    }//end kruzen
    public function kvadraten($objType,$a){
        $eur_m2=800;//kuka 800eur/m2
        if($objType=="k"){$eur_m2=800;}
        if($objType=="s"){$eur_m2=900;}
        if($objType=="d"){$eur_m2=1000;}
        $m2=parent::kvadratVoid($a);
        $vkupno=$m2*$eur_m2;
        echo $vkupno;
    }//end kvadraten
}//end class Gradeznistvo
?>