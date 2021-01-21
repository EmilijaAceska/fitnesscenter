<?php
class ModelDukani extends DB
{
    private $dukani_id =-1;
    private $ime_dukan ="";
    private $grad ="";
    private $br_dukan =-1;
    private $table_name = "dukani";
    private $columns_name="ime_dukan,grad,br_dukan";
    
    public function setDukaniId($dukani_id){
        $this->dukani_id=$dukani_id;
    }
    public function getDuukaniId(){
        return $this->dukani_id;
    }
    public function setImeDukan($ime_dukan){
        $this->ime_dukan=$ime_dukan;
    }
    public function getImeDukan(){
        return $this->ime_dukan;
    }
    public function setGrad($grad){
        $this->grad=$grad;
    }
    public function getGrad(){
        return $this->grad;
    }
    public function setBrojDukan($br_dukan){
        $this->br_dukan=$br_dukan;
    }
    public function getBrojDukan(){
        return $this->br_dukan;
    }
    //insert
    public function insertDukaniWithSetter(){
        $columns_value="'$this->ime_dukan','$this->grad',$this->br_dukan";
        parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    }
    //delete so seter
    public function deleteDukaniWithSetter(){
        //                 ime na tabela  , ime na pk,  vrednost na pk
        //delete from         modeli  where   model_id =     7;
        parent::deleteRow($this->table_name,"dukani_id",$this->dukani_id);
    }
    //select
    public function selectDukani(){
        // return parent::selectRow($this->table_name);
        return parent::callStoredProcedureSelect('_selectDukani');
    }
    //delete bez seter
    public function deleteDukaniWithoutSetter($dukani_id){
        parent::deleteRow($this->table_name,"dukani_id",$dukani_id);
    }
    // public function insertMarkiWithoutSetter($marka_name,$country,$eu){
    //     $columns_value="'$marka_name','$country',$eu";
    //     parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    // }
    // public function deleteMarki($pk_value){
    //     parent::deleteRow($this->table_name,"marka_id",$pk_value);
    // }
    // public function editMarki(){
        
    // }
    // public function selectMarki($table_name){
    //     return parent::selectRow($this->table_name);
    // }
}
?>