<?php
class ModelVraboteni extends DB
{
    private $vraboteni_id =-1;
    private $ime ="";
    private $prezime ="";
    private $godini =-1;
    private $staz = -1;
    private $dukani_id=-1;
    private $vraboten_img ="";
    private $table_name = "vrabotenii";
    private $columns_name="ime,prezime,godini,staz,dukani_id,vraboten_img";
    
    public function setVraboteniId($vraboteni_id){
        $this->vraboteni_id=$vraboteni_id;
    }
    public function getVraboteniId(){
        return $this->vraboteni_id;
    }
    public function setIme($ime){
        $this->ime=$ime;
    }
    public function getIme(){
        return $this->ime;
    }
    public function setPrezime($prezime){
        $this->prezime=$prezime;
    }
    public function getPrezime(){
        return $this->prezime;
    }
    public function setGodini($godini){
        $this->godini=$godini;
    }
    public function getGodini(){
        return $this->godini;
    }
    public function setStaz($staz){
        $this->staz=$staz;
    }
    public function getStaz(){
        return $this->staz;
    }
    public function setDukaniId($dukani_id){
        $this->dukani_id=$dukani_id;
    }
    public function getMarkaId(){
        return $this->dukani_id;
    }
    public function setVrabotenImg($vraboten_img){
        $this->vraboten_img=$vraboten_img;
    }
    public function getVrabotenImg(){
        return $this->vraboten_img;
    }
    public function insertVraboteniWithSetter(){
        $columns_value="'$this->ime','$this->prezime',$this->godini,$this->staz,$this->dukani_id,'$this->vraboten_img'";
        // parent::insertRow($this->table_name,$this->columns_name,$columns_value);
        parent::callStoredProcedureInsert('_insertVrabotenii',$columns_value);
    }
    public function deleteVraboteniWithSetter(){
        //                 ime na tabela  , ime na pk,  vrednost na pk
        //delete from         modeli  where   model_id    =      7;
        parent::deleteRow($this->table_name,"vraboteni_id",$this->vraboteni_id);
    }
    public function selectVraboteni(){
        // return parent::selectRow($this->table_name." INNER JOIN dukani ON vrabotenii.dukani_id=dukani.dukani_id");
        return parent::callStoredProcedureSelect('_selectVrabotenii');
    }
    public function deleteVraboteniWithoutSetter($vraboteni_id){
        parent::deleteRow($this->table_name,"vraboteni_id",$vraboteni_id);
    }
    public function editVraboteni(){
        $columns="ime='$this->ime',prezime='$this->prezime', godini=$this->godini, staz=$this->staz, dukani_id=$this->dukani_id, vraboten_img='$this->vraboten_img'";
        $condition="vraboteni_id=$this->vraboteni_id";
        parent::editRow($this->table_name,$columns,$condition);
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