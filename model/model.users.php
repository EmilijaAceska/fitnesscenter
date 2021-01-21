<?php
class ModelUsers extends DB
{
    private $user_id =-1;
    private $user_name ="";
    private $user_password ="";
    private $table_name = "users";
    private $columns_name="user_name,user_password";
    
    public function setUsersId($user_id){
        $this->user_id=$user_id;
    }
    public function getUsersId(){
        return $this->user_id;
    }
    public function setName($user_name){
        $this->user_name=$user_name;
    }
    public function getName(){
        return $this->user_name;
    }
    public function setPassword($user_password){
        $this->user_password=$user_password;
    }
    public function getPassword(){
        return $this->user_password;
    }
    //inser
    public function insertUsers(){
        $columns_value="'$this->user_name','$this->user_password'";
        parent::insertRow($this->table_name,$this->columns_name,$columns_value);
        // parent::callStoredProcedureInsert('_insertUser',$columns_value);
    }
    public function deleteUsers($pk_value){
        parent::deleteRow($this->table_name,"user_id",$pk_value);
    }
    
    public function selectUsers(){
        return parent::selectRow($this->table_name);
    }
}
?>