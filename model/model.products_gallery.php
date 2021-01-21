<?php
class ModelProductsGallery extends DB{
  private $products_gallery_id=-1;
  private $gallery_path="";
  private $product_id=-1;
  private $table_name="products_gallery";
  private $columns_name="gallery_path,product_id";

  //SET-GET
  public function setProductsGalleryId($products_gallery_id){
    $this->products_gallery_id=$products_gallery_id;
  }
  public function getProductsGalleryId(){
    return $this->products_gallery_id;
  }

  public function setProductsGalleryPath($gallery_path){
    $this->gallery_path=$gallery_path;
  }
  public function getProductsGalleryPath(){
    return $this->gallery_path;
  }

  public function setProductId($product_id){
    $this->product_id=$product_id;
  }
  public function getProductId(){
    return $this->product_id;
  }
  //SELECT
  public function selectProductsGallery(){
    return parent::selectRow($this->table_name." INNER JOIN products ON products_gallery.product_id=products.product_id");
    // return parent::callStoredProcedureSelect('_selectProducts_gallery');
  }
  //INSERT
  public function insertProductsGallery(){
    $columns_value="'$this->gallery_path',$this->product_id";
    parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    // parent::callStoredProcedureInsert('_insertProducts_dallery',$columns_value);
  }
  //DELETE
  public function deleteProductsGallery(){
    parent::deleteRow($this->table_name,"products_gallery_id",$this->products_gallery_id);
  }//dali e taka
  //UPDATE
  public function updateProductsGallery(){
    $columns="gallery_path='$this->gallery_path',product_id=$this->product_id";
    $condition="products_gallery_id=$this->products_gallery_id";
    parent::updateRow($this->table_name,$columns,$condition);
  }

}
?>