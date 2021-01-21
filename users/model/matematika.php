<?php
class Matematika //model-strucno ime, primer model na matematika,mozi so zbor Model i bez nego
{
    //telo na klasata
    //class members
    // private $pi=3.14;
    // public function__construct($myPI){
    //     $this->pi=($myPI);//vlezen konstruktor
    // }
    public function pPravoagolnik($a,$b)
    {
        $p=$a*$b;
        echo $p;
    }
    public function pPravoagolnikVoid($a,$b)
    {
        $p=$a*$b;
        return $p;
    }
    public function kruznica($r,$PI){
        $P=$r*$r*$PI;
        $PI=pi();
        echo $P;
    }
    public function kruznicaVoid($r,$PI){
        $P=$r*$r*$PI;
        $PI=pi();
        return $P;
    }
    public function kvadrat($a){
        $P=$a*$a;
        echo $P;
    }
    public function kvadratVoid($a){
        $P=$a*$a;
        return $P;
    }
    public function zbirNaSite(){
        $sum=0;
        for($i=1; $i<=10; $i++){
        $sum += $i;
    }
        echo "Zbirot na broevite od 1 do 10 e $sum!";
    }
    public function zbirNaParni(){
        $sum=0;
        for($i=0; $i<=10; $i=$i+2){
        $sum += $i;
    }
        echo "Zbirot na parnite broevi od 1 do 10 e $sum!";
    }
    public function zbirNaNeparni(){
        $sum=0;
        for($i=1; $i<=10; $i=$i+2){
        $sum += $i;
    }
        echo "Zbirot na neparnite broevi od 1 do 10 e $sum!";
    }
    public function siteBroevi(){
        for($i=1;$i<=10;$i++)
        {
        echo $i."<br>";
        }
    }
    public function siteParni(){
        for($i=0;$i<=10;$i=$i+2)
        {
        echo $i."<br>";
        }
    }
    public function siteNeparni(){
        for($i=1;$i<=10;$i=$i+2)
        {
            echo $i."<br>";
        }
    }
}
//instance object - ona sto go pisuvame za da ja povikame funkcijata da se izvrsi
// $objStanBT = new Matematika();
// $objStanBT->pPravoagolnik(4,8);

// $objStanOH = new Matematika();
// $objStanOH->pPravoagolnik(7,8);
?>