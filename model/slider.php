<?php
class ModelSlider extends DB
{
    private $slider_id =-1;
    private $slider_img ="";
    private $table_name = "slider";
    private $columns_name="slider_img";
    
    public function setSliderId($slider_id){
        $this->slider_id=$slider_id;
    }
    public function getSliderId(){
        return $this->slider_id;
    }
    public function setSliderImg($slider_img){
        $this->slider_img=$slider_img;
    }
    public function getSliderImg(){
        return $this->slider_img;
    }
    public function insertSlider(){
        $columns_value="'$this->slider_img'";
        parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    }
    public function deleteSlider($pk_value){
        parent::deleteRow($this->table_name,"slider_id",$pk_value);
    }
    public function selectSlider(){
        return parent::selectRow($this->table_name);
    }
}
?>