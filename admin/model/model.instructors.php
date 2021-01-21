<?php
class ModelInstructors extends DB{
  private $instructor_id=-1;
  private $first_name="";
  private $last_name="";
  private $category_title="";
  private $table_name="instructors";
  private $columns_name="first_name, last_name, category_title";

  //SET-GET
  public function setInstructorsId($instructor_id){
    $this->instructor_id=$instructor_id;
  }
  public function getInstructorsId(){
    return $this->instructor_id;
  }

  public function setFirstName($first_name){
    $this->first_name=$first_name;
  }
  public function getFirstName(){
    return $this->first_name;
  }

  public function setLastName($last_name){
    $this->last_name=$last_name;
  }
  public function getLastName(){
    return $this->last_name;
  }

  public function setCategoryTitle($category_title){
    $this->category_title=$category_title;
  }
  public function getCategoryTitle(){
    return $this->category_title;
  }

  //SELECT
  public function selectInstructors(){
    return parent::selectRow($this->table_name." INNER JOIN category ON instructors.category_title=category.category_title");
    // return parent::callStoredProcedureSelect('_selectInstructors');
  }
  //INSERT
  public function insertInstructors(){
    $columns_value="'$this->first_name','$this->last_name','$this->category_title'";
    parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    // parent::callStoredProcedureInsert('_insertInsctuctors',$columns_value);
  }
  //DELETE
  public function deleteInstructors(){
        parent::deleteRow($this->table_name,"instructor_id",$this->instructor_id);
        // $pk_value="$this->instructor_id";
        // parent::callStoredProcedureDelete('_deleteInstructors',$pk_value);
  }
  //UPDATE
  public function updateInstructors(){
    $columns="first_name='$this->first_name',last_name='$this->last_name',category_title='$this->category_title'";
    $condition="instructor_id='$this->instructor_id'";
    parent::updateRow($this->table_name,$columns,$condition);
  }
}
?>