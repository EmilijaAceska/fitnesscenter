<?php
class ModelCategory extends DB{
  private $category_title="";
  private $category_img="";
  private $table_name="category";
  private $columns_name="category_title,category_img";

  //SET-GET
  public function setCategoryTitle($category_title){
    $this->category_title=$category_title;
  }
  public function getCategoryTitle(){
    return $this->category_title;
  }
  public function setCategoryImg($category_img){
    $this->category_img=$category_img;
  }
  public function getCategoryImg(){
    return $this->category_img;
  }
  //SELECT
  public function selectCategory(){
    return parent::selectRow($this->table_name);
    // return parent::callStoredProcedureSelect('_selectCategory');
  }
  //INSERT
  public function insertCategory(){
    $columns_value="'$this->category_title','$this->category_img'";
    parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    // parent::callStoredProcedureInsert('_insertCategory',$columns_value);
  }
  //DELETE
  public function deleteCategory(){
    parent::deleteRowStr($this->table_name,"category_title",$this->category_title);
    // $pk_value="'$this->category_title'";
    // parent::callStoredProcedureDelete('_deleteCategory',$pk_value);
  }
  //UPDATE
  public function updateCategory(){
    $columns="category_img='$this->category_img'";
    $condition="category_title='$this->category_title'";
    parent::updateRow($this->table_name,$columns,$condition);
  }
}
?>