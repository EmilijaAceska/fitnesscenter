<?php
class ModelMembers extends DB{
  private $members_id=-1;
  private $f_name="";
  private $l_name="";
  private $email="";
  private $phone_number=-1;
  private $table_name="members";
  private $columns_name="f_name, l_name, email, phone_number";

  //SET-GET
  public function setMembersId($members_id){
    $this->members_id=$members_id;
  }
  public function getMembersId(){
    return $this->members_id;
  }

  public function setFirstName($f_name){
    $this->f_name=$f_name;
  }
  public function getFirstName(){
    return $this->f_name;
  }

  public function setLastName($l_name){
    $this->l_name=$l_name;
  }
  public function getLastName(){
    return $this->l_name;
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
    $columns_value="'$this->f_name','$this->l_name','$this->email',$this->phone_number";
    parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    // parent::callStoredProcedureInsert('_insertMembers',$columns_value);
  }
  //DELETE
  public function deleteMembers(){
        parent::deleteRow($this->table_name,"members_id",$this->members_id);
        // $pk_value="$this->members_id";
        // parent::callStoredProcedureDelete('_deleteMembers',$pk_value);
  }
  //UPDATE
  public function updateMembers(){
    $columns="f_name='$this->f_name',l_name='$this->l_name',email='$this->email',phone_number=$this->phone_number";
    $condition="members_id='$this->members_id'";
    parent::updateRow($this->table_name,$columns,$condition);
    // parent::callStoredProcedureUpdate('_updateMembers',$columns,$condition);
  }
  //UPDATE with procedure
  // public function updateMembers(){
  //   $columns="f_name='$this->f_name',l_name='$this->l_name',email='$this->email',phone_number=$this->phone_number";
  //   $pk_value="members_id='$this->members_id'";
  //   parent::callStoredProcedureUpdate('_updateMembers',$columns,$pk_value);
  // }
}
?>