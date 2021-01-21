<?php
class ModelProduct extends DB{
  private $product_id=-1;
  private $product_title="";
  private $product_description="";
  private $product_price="";
  private $category_title="";
  private $instructor_id=-1;
  private $table_name="products";
  private $columns_name="product_title,product_description,product_price,category_title,instructor_id";

  //SET-GET
  public function setProductId($product_id){
    $this->product_id=$product_id;
  }
  public function getProductId(){
    return $this->product_id;
  }

  public function setProductTitle($product_title){
    $this->product_title=$product_title;
  }
  public function getProductTitle(){
    return $this->product_title;
  }

  public function setProductDescription($product_description){
    $this->product_description=$product_description;
  }
  public function getProductDescription(){
    return $this->product_description;
  }

  public function setProductPrice($product_price){
    $this->product_price=$product_price;
  }
  public function getProductPrice(){
    return $this->product_price;
  }

  public function setCategoryTitle($category_title){
    $this->category_title=$category_title;
  }
  public function getCategoryTitle(){
    return $this->category_title;
  }

  public function setInstructorsId($instructor_id){
    $this->instructor_id=$instructor_id;
  }
  public function getInstructorsId(){
    return $this->instructor_id;
  }
  //SELECT
  public function selectProduct(){
    return parent::selectRow($this->table_name." INNER JOIN category ON products.category_title=category.category_title 
                                                INNER JOIN instructors ON products.instructor_id=instructors.instructor_id");
    // return parent::callStoredProcedureSelect('_selectProducts');
  }
  //INSERT
  public function insertProduct(){
    $columns_value="'$this->product_title','$this->product_description',$this->product_price,'$this->category_title',$this->instructor_id";
    parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    // parent::callStoredProcedureInsert('_insertProducts',$columns_value);
  }
  //DELETE
  public function deleteProduct(){
        // parent::deleteRow($this->table_name,"product_id",$this->product_id);
        $pk_value="$this->product_id";
        parent::callStoredProcedureDelete('_deleteProducts',$pk_value);
  }
  //UPDATE
  public function updateProduct(){
    $columns="product_title='$this->product_title',product_description='$this->product_description',product_price=$this->product_price,
              category_title='$this->category_title',instructor_id=$this->instructor_id";
    $condition="product_id='$this->product_id'";
    parent::updateRow($this->table_name,$columns,$condition);
  }
}
?>