<?php
class ModelMembers extends DB{
  private $members_id=-1;
  private $first_name="";
  private $last_name="";
  private $email="";
  private $phone_number=-1;
  private $table_name="members";
  private $columns_name="first_name, last_name, email, phone_number";

  //SET-GET
  public function setMembersId($members_id){
    $this->members_id=$members_id;
  }
  public function getMembersId(){
    return $this->members_id;
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

  public function setEmail($email){
    $this->email=$email;
  }
  public function getEmail(){
    return $this->email;
  }

  public function setPhoneNumber($phone_number){
    $this->phone_number=$phone_number;
  }
  public function getPhoneNumber(){
    return $this->phone_number;
  }
  //SELECT
  public function selectMembers(){
    return parent::selectRow($this->table_name);
    // return parent::callStoredProcedureSelect('_selectMembers');
  }
  //INSERT
  public function insertMembers(){
    $columns_value="'$this->first_name','$this->last_name','$this->email',$this->phone_number";
    parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    // parent::callStoredProcedureInsert('_insertMembers',$columns_value);
  }
  //DELETE
  public function deleteMembers(){
        parent::deleteRow($this->table_name,"members_id",$this->members_id);
  }
  //UPDATE
  public function updateMembers(){
    $columns="first_name='$this->first_name',last_name='$this->last_name',email='$this->email',phone_number=$this->phone_number";
    $condition="members_id='$this->members_id'";
    parent::updateRow($this->table_name,$columns,$condition);
  }
}
?>