<?php
class ModelSchedules extends DB{
  private $schedules_id=-1;
  private $workout_date="";
  private $product_id=-1;
  private $members_id=-1;
  private $instructor_id=-1;
  private $table_name="schedules";
  private $columns_name="workout_date,product_id,members_id,instructor_id";

  //SET-GET
  public function setSchedulesId($schedules_id){
    $this->schedules_id=$schedules_id;
  }
  public function getSchedulesId(){
    return $this->schedules_id;
  }

  public function setWorkoutDate($workout_date){
    $this->workout_date=$workout_date;
  }
  public function getWorkoutDate(){
    return $this->workout_date;
  }

  public function setProductId($product_id){
    $this->product_id=$product_id;
  }
  public function getProductId(){
    return $this->product_id;
  }

  public function setMembersId($members_id){
    $this->members_id=$members_id;
  }
  public function getMembersId(){
    return $this->members_id;
  }

  public function setInstructorId($instructor_id){
    $this->instructor_id=$instructor_id;
  }
  public function getInstructorId(){
    return $this->instructor_id;
  }
  //SELECT
  public function selectSchedules(){
    return parent::selectRow($this->table_name." INNER JOIN members ON schedules.members_id=members.members_id
                              INNER JOIN products ON schedules.product_id=products.product_id
                              INNER JOIN instructors ON schedules.instructor_id=instructors.instructor_id");
    // return parent::callStoredProcedureSelect('_selectSchedules');
  }
  //INSERT
  public function insertSchedules(){
    $columns_value="'$this->workout_date',$this->product_id,$this->members_id,$this->instructor_id";
    parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    // parent::callStoredProcedureInsert('_insertSchedules',$columns_value);
  }
  //DELETE
  public function deleteSchedules(){
    // parent::deleteRow($this->table_name,"schedules_id",$this->schedules_id);
    $pk_value="$this->schedules_id";
    parent::callStoredProcedureDelete('_deleteSchedules',$pk_value);
  }
  //UPDATE
  public function updateSchedules(){
    $columns="workout_date='$this->workout_date',product_id=$this->product_id,members_id=$this->members_id,instructor_id=$this->instructor_id";
    $condition="schedules_id=$this->schedules_id";
    parent::updateRow($this->table_name,$columns,$condition);
  }
}
?>