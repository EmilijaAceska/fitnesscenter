<?php
class Zemjodelie extends Matematika
{ 
    public function pravoagolna($a,$b,$br_meseci){
        $eur_m2=10;
        $m2=parent::pPravoagolnikVoid($a,$b);
        $vkupno=$m2*$eur_m2*$br_meseci;
        echo $vkupno;
    }//end pravoagolna
    public function kruzna($r,$PI,$br_meseci){
        $eur_m2=10;
        $m2=parent::kruznicaVoid($r,$PI);
        $vkupno=$m2*$eur_m2*$br_meseci;
        echo $vkupno;
    }//end kruzna
    public function kvadratna($a,$br_meseci){
        $eur_m2=10;
        $m2=parent::kvadratVoid($a);
        $vkupno=$m2*$eur_m2*$br_meseci;
        echo $vkupno;
    }//end kvadratna
}//end class Zemjodelie
?>