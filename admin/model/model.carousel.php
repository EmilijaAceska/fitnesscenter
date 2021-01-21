<?php
class ModelCarousel extends DB
{
    private $carousel_id =-1;
    private $carousel_img ="";
    private $table_name = "carousel";
    private $columns_name="slider_img";
    
    public function setCarouselId($carousel_id){
        $this->carousel_id=$carousel_id;
    }
    public function getCarouselId(){
        return $this->carousel_id;
    }
    public function setCarouselImg($carousel_img){
        $this->carousel_img=$carousel_img;
    }
    public function getCarouselImg(){
        return $this->carousel_img;
    }
    public function insertCarousel(){
        $columns_value="'$this->carousel_img'";
        parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    }
    public function deleteCarousel(){
        parent::deleteRow($this->table_name,"carousel_id",$this->carousel_id);
    }
    public function selectCarousel(){
        return parent::selectRow($this->table_name);
    }
}
?>