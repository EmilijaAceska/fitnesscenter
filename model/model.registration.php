<?php
class ModelRegistration extends DB
{
    private $registration_id =-1;
    private $first_name ="";
    private $last_name ="";
    private $email ="";
    private $password ="";
    private $table_name = "registration";
    private $columns_name="first_name,last_name,email,password";
    
    public function setUsersId($registration_id){
        $this->registration_id=$registration_id;
    }
    public function getUsersId(){
        return $this->registration_id;
    }
    public function setFName($first_name){
        $this->first_name=$first_name;
    }
    public function getFName(){
        return $this->first_name;
    }
    public function setLName($last_name){
        $this->last_name=$last_name;
    }
    public function getLName(){
        return $this->last_name;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function getPassword(){
        return $this->password;
    }
    //inser
    public function insertRegistration(){
        $columns_value="'$this->first_name','$this->last_name','$this->email','$this->password'";
        parent::insertRow($this->table_name,$this->columns_name,$columns_value);
        // parent::callStoredProcedureInsert('_insertRegistration',$columns_value);
    }
    public function deleteRegistration($pk_value){
        parent::deleteRow($this->table_name,"registration_id",$pk_value);
    }
    
    public function selectRegistration(){
        return parent::selectRow($this->table_name);
        // return parent::callStoredProcedureSelect('_selectRegistration');
    }
}
?>