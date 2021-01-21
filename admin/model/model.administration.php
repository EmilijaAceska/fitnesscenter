<?php
class ModelAdministration extends DB
{
    private $admin_id =-1;
    private $user_name ="";
    private $user_password ="";
    private $table_name = "administration";
    private $columns_name="admin_name,admin_password";
    
    public function setAdminId($admin_id){
        $this->admin_id=$admin_id;
    }
    public function getAdminId(){
        return $this->admin_id;
    }
    public function setName($admin_name){
        $this->admin_name=$admin_name;
    }
    public function getName(){
        return $this->admin_name;
    }
    public function setPassword($admin_password){
        $this->admin_password=$admin_password;
    }
    public function getPassword(){
        return $this->admin_password;
    }
    //insert
    public function insertAdmin(){
        $columns_value="'$this->admin_name','$this->admin_password'";
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
    public function checkAdmin(){
        // SELECT COUNT(*) FROM admin WHERE username LIKE 'username' AND password LIKE SHA1('password');
        // "SELECT admin_id FROM administration
		// WHERE username like '$username' AND password like '$password'";
    }
    
}
?>