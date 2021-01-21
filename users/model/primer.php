<?php
class Gradeznistvo extends Matematika{
    public function prodazbaPravoagolenObject($a,$b,$objType)
    {        
        $eur_m2=800;//kuka 800eur/m2
        if($objType=="k"){$eur_m2=800;}
        if($objType=="s"){$eur_m2=900;}
        if($objType=="d"){$eur_m2=1000;}
        // parent::pPravoagolnik($a,$b);
        $m2=parent::pPravoagolnikVoid($a,$b);
        $vkupno=$m2*$eur_m2;
        echo $vkupno;
    }//end prodazbaObject
}//end class Gradeznistvo

?>