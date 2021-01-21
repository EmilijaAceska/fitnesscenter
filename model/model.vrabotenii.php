<?php
class ModelVraboteni extends DB
{
    private $vraboteni_id =-1;
    private $ime ="";
    private $prezime ="";
    private $godini =-1;
    private $staz = -1;
    private $dukani_id=-1;
    private $table_name = "vrabotenii";
    private $columns_name="ime,prezime,godini,staz,dukani_id";
    
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
    public function selectVraboteni(){
        // return parent::selectRow($this->table_name." INNER JOIN dukani ON vrabotenii.dukani_id=dukani.dukani_id");
        return parent::callStoredProcedureSelect('_selectVrabotenii');
    }
}
?>