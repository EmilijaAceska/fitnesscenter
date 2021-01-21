<?php
class ModelModeli extends DB
{
    private $model_id =-1;
    private $model_name ="";
    private $color ="";
    private $price ="";
    private $km = -1;
    private $marka_id=-1;
    private $model_img ="";
    private $table_name = "modeli";
    private $columns_name="model_name,color,price,km,marka_id,model_img";
    
    public function setModelId($model_id){
        $this->model_id=$model_id;
    }
    public function getModelId(){
        return $this->model_id;
    }
    public function setModelName($model_name){
        $this->model_name=$model_name;
    }
    public function getModelName(){
        return $this->model_name;
    }
    public function setColor($color){
        $this->color=$color;
    }
    public function getColor(){
        return $this->color;
    }
    public function setPrice($price){
        $this->price=$price;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setKm($km){
        $this->km=$km;
    }
    public function getKm(){
        return $this->km;
    }
    public function setMarkaId($marka_id){
        $this->marka_id=$marka_id;
    }
    public function getMarkaId(){
        return $this->marka_id;
    }
    public function setModelImg($model_img){
        $this->model_img=$model_img;
    }
    public function getModelImg(){
        return $this->model_img;
    }
    
    public function insertModeliWithSetter(){
        $columns_value="'$this->model_name','$this->color',$this->price,$this->km,$this->marka_id,'$this->model_img'";
        // parent::insertRow($this->table_name,$this->columns_name,$columns_value);
        parent::callStoredProcedureInsert('_insertModeli',$columns_value);
    }
    public function deleteModeliWithSetter(){
        //                 ime na tabela  , ime na pk,  vrednost na pk
        //delete from         modeli  where   model_id = 7;
        parent::deleteRow($this->table_name,"model_id",$this->model_id);
    }
    public function selectModeli(){
        // return parent::selectRow($this->table_name." INNER JOIN marki ON modeli.marka_id=marki.marka_id");
        return parent::callStoredProcedureSelect('_selectModeli');
    }
    public function deleteModelWithoutSetter($model_id){
        parent::deleteRow($this->table_name,"model_id",$model_id);
    }
    public function editModeli(){
        $columns="color='$this->color', price=$this->price, km=$this->km, model_img='$this->model_img'";
        $condition="model_id=$this->model_id";
        parent::editRow($this->table_name,$columns,$condition);
    }
    
    // public function insertModeliWithoutSetter($model_name,$color,$price,$km,$marka_id{
    //     $columns_value="'$model_name','$color',$price,$km,$marka_id";
    //     parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    // }
    // public function deleteModeli($pk_value){
    //     parent::deleteRow($this->table_name,"marka_id",$pk_value);
    // }
    // public function editModeli(){
        
    // }
    // public function selectModeli($table_name){
    //     return parent::selectRow($this->table_name);
    // }
}
?>