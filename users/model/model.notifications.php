<?php
class ModelNotifications extends DB{
  private $notification_id=-1;
  private $notification_title="";
  private $notification_content="";
  private $members_id=-1;
  private $table_name="notifications";
  private $columns_name="notification_title,notification_content, members_id";

  //SET-GET
  public function setNotificationId($notification_id){
    $this->notification_id=$notification_id;
  }
  public function getNotificationId(){
    return $this->notification_id;
  }

  public function setNotificationTitle($notification_title){
    $this->notification_title=$notification_title;
  }
  public function getNotificationTitle(){
    return $this->notification_title;
  }

  public function setNotificationContent($notification_content){
    $this->notification_content=$notification_content;
  }
  public function getNotificationContent(){
    return $this->notification_content;
  }

  public function setMembersId($members_id){
    $this->members_id=$members_id;
  }
  public function getMembersId(){
    return $this->members_id;
  }
  //SELECT
  public function selectNotifications(){
    return parent::selectRow($this->table_name." INNER JOIN members ON notifications.members_id=members.members_id");
    // return parent::callStoredProcedureSelect('_selectNotifications');
  }
  //INSERT
  public function insertNotifications(){
    $columns_value="'$this->notification_title','$this->notification_content',$this->members_id";
    parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    // parent::callStoredProcedureInsert('_insertNotifications',$columns_value);
  }
  //DELETE
  public function deleteNotifications(){
        parent::deleteRow($this->table_name,"notification_id",$this->notification_id);
        // $pk_value="$this->notification_id";
        // parent::callStoredProcedureDelete('_deleteNotifications',$pk_value);
  }
  //UPDATE
  public function updateNotifications(){
    $columns="notification_title='$this->notification_title',notification_content='$this->notification_content',members_id=$this->members_id";
    $condition="notification_id='$this->notification_id'";
    parent::updateRow($this->table_name,$columns,$condition);
  }
}
?>