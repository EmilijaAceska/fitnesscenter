<?php
class ModelInstructors extends DB{
  private $instructor_id=-1;
  private $first_name="";
  private $last_name="";
  private $table_name="instructors";
  private $columns_name="first_name, last_name";

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

  //SELECT
  public function selectInstructors(){
    return parent::selectRow($this->table_name);
    // return parent::callStoredProcedureSelect('_selectInstructors');
  }
  //INSERT
  public function insertInstructors(){
    $columns_value="'$this->first_name','$this->last_name'";
    parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    // parent::callStoredProcedureInsert('_insertInsctuctors',$columns_value);
  }
  //DELETE
  public function deleteInstructors(){
        parent::deleteRow($this->table_name,"instructor_id",$this->instructor_id);
  }
  //UPDATE
  public function updateInstructors(){
    $columns="first_name='$this->first_name',last_name='$this->last_name'";
    $condition="instructor_id='$this->instructor_id'";
    parent::updateRow($this->table_name,$columns,$condition);
  }
}
?>