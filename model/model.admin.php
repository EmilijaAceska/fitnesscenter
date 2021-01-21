<?php
class ModelAdmin extends DB
{
    private $admin_id =-1;
    private $username ="";
    private $password ="";
    private $table_name = "admin";
    private $columns_name="username,password";
    
    public function setAdminId($admin_id){
        $this->admin_id=$admin_id;
    }
    public function getAdminId(){
        return $this->admin_id;
    }
    public function setUsername($username){
        $this->username=$username;
    }
    public function getUsername(){
        return $this->username;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function getPassword(){
        return $this->password;
    }
    //inser
    public function insertAdmin(){
        $columns_value="'$this->username','$this->password'";
        parent::insertRow($this->table_name,$this->columns_name,$columns_value);
        // parent::callStoredProcedureInsert('_insertAdmin',$columns_value);
    }
    public function deleteAdmin($pk_value){
        parent::deleteRow($this->table_name,"admin_id",$pk_value);
    }
    
    public function selectAdmin(){
        return parent::selectRow($this->table_name);
        // return parent::callStoredProcedureSelect('_selectAdmin');
    }
    public function editAdmin(){
        $columns="username='$this->username', password='$this->password'";
        $condition="admin_id=$this->admin_id";
        parent::editRow($this->table_name,$columns,$condition);
    }
}
?>