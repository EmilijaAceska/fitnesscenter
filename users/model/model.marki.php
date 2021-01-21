<?php
class ModelMarki extends DB
{
    private $marka_id =-1;
    private $marka_name ="";
    private $country ="";
    private $eu =-1;
    private $marka_img = "";
    private $table_name = "marki";
    private $columns_name="marka_name,country,eu,marka_img";
    
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
    public function setMarkaImg($marka_img){
        $this->marka_img=$marka_img;
    }
    public function getMarkaImg(){
        return $this->marka_img;
    }
    public function insertMarkiWithSetter(){
        //linija 45 ke ja odkomentirame dokolku ne e mozno da se koristat stored procedures t.e nemame verzija mySQL pogolema od 5.0
        $columns_value="'$this->marka_name','$this->country',$this->eu,'$this->marka_img'";
        // parent::insertRow($this->table_name,$this->columns_name,$columns_value);
        parent::callStoredProcedureInsert('_insertMarki',$columns_value);
    }
    public function insertMarkiWithoutSetter($marka_name,$country,$eu,$marka_img){
        $columns_value="'$marka_name','$country',$eu,'$marka_img'";
        // parent::insertRow($this->table_name,$this->columns_name,$columns_value);
        parent::callStoredProcedureInsert('_insertMarki',$columns_value);
    }
    public function deleteMarki($pk_value){
        parent::deleteRow($this->table_name,"marka_id",$pk_value);
    }
    
    public function selectMarki(){
        // return parent::selectRow($this->table_name);
        return parent::callStoredProcedureSelect('_selectMarki');
    }
    public function editMarki(){
        $columns="country='$this->country', eu=$this->eu, marka_img='$this->marka_img'";
        $condition="marka_id=$this->marka_id";
        parent::editRow($this->table_name,$columns,$condition);
    }
}
?>