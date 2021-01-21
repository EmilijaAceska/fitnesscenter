<?php
class ModelContact extends DB{
  private $contact_id=-1;
  private $first_name="";
  private $last_name="";
  private $message="";
  private $table_name="contact";
  private $columns_name="first_name, last_name, message";

  //SET-GET
  public function setContactId($contact_id){
    $this->contact_id=$contact_id;
  }
  public function getContactId(){
    return $this->contact_id;
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

  public function setMessage($message){
    $this->message=$message;
  }
  public function getMessage(){
    return $this->message;
  }

  //SELECT
  public function selectContact(){
    return parent::selectRow($this->table_name);
    // return parent::callStoredProcedureSelect('_selectContact');
  }
  //INSERT
  public function insertContact(){
    $columns_value="'$this->first_name','$this->last_name','$this->message'";
    parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    // parent::callStoredProcedureInsert('_insertContact',$columns_value);
  }
  // //DELETE
  public function deleteContact(){
        parent::deleteRow($this->table_name,"contact_id",$this->contact_id);
        // $pk_value="$this->contact_id";
        // parent::callStoredProcedureDelete('_deleteContact',$pk_value);
  }
}
?>