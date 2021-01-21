<?php
class ModelMarki extends DB
{
    private $marka_id =-1;
    private $marka_name ="";
    private $country ="";
    private $eu =-1;
    private $table_name="marki";
    private $columns_name="marka_name,country,eu";
    
    public function setMarkaId($marka_id){
        $this->marka_id=$marka_id;
    }
    public function getMarkaId(){
        return $this->marka_id;
    }
    public function setMarkaName($marka_name){
        $this->marka_name=$marka_name;
    }
    public function getMarkaName(){
        return $this->marka_name;
    }
    public function setCountry($country){
        $this->country=$country;
    }
    public function getCountry(){
        return $this->country;
    }
    public function setEu($eu){
        $this->eu=$eu;
    }
    public function getEu(){
        return $this->eu;
    }
    public function selectMarki(){
        // return parent::selectRow($this->table_name);
        return parent::callStoredProcedureSelect('_selectMarki');
    }
}
?>