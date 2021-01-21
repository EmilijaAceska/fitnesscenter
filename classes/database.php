<?php
class DB{
private $conn = null;
private $db_server = "localhost";
private $db_username = "root";
private $db_password = "";
private $db_name = "fitnesscenter";
public function __construct(){
    try {  
        $this->conn = new PDO("mysql:host=$this->db_server;dbname=$this->db_name", $this->db_username, $this->db_password);  
        // set the PDO error mode to exception  
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        // echo "Connected successfully";
        } catch(PDOException $e) 
        {  echo "Connection failed: " . $e->getMessage();}}

//INSERT
public function insertRow($table_name,$columns_name,$columns_value){
    $query="INSERT INTO $table_name($columns_name)
    VALUES ($columns_value);";
    // use exec() because no results are returned
  $this->conn->exec($query);
}//END InsertRow

//insert with stored procedures
public function callStoredProcedureInsert($storedProcedureName,$columns_value){
  $query="CALL $storedProcedureName($columns_value)";
    // use exec() because no results are returned
  $this->conn->exec($query);
}//END callStoredProcedureInsert

//SELECT
public function selectRow($table_name){
    $query="SELECT * FROM $table_name";
    $stmt=$this->conn->prepare($query);
    $stmt->execute();
  return $stmt->fetchAll();
}//END selectRow

//select with stored procedures
public function callStoredProcedureSelect($storedProcedureName){
  $query="CALL $storedProcedureName()";
    $stmt=$this->conn->prepare($query);
    $stmt->execute();
  return $stmt->fetchAll();
}//END callStoredProcedureSelect

//DELETE
public function deleteRow($table_name,$pk_name,$pk_value){
    $query="DELETE FROM $table_name WHERE $pk_name = $pk_value";
    // use exec() because no results are returned
  $this->conn->exec($query);
}//END deleteRow

//delete STRING
public function deleteRowStr($table_name,$pk_name,$pk_value){
    $query="DELETE FROM $table_name WHERE $pk_name LIKE '$pk_value'";
    // use exec() because no results are returned
  $this->conn->exec($query);
}//END deleteRow

//delete with stored procedures
public function callStoredProcedureDelete($storedProcedureName,$pk_value){
    $query="CALL $storedProcedureName($pk_value)";
    // use exec() because no results are returned
  $this->conn->exec($query);
}//END deleteRow

public function deleteAllRows($table_name){
    $query="DELETE FROM $table_name";
    // use exec() because no results are returned
  $this->conn->exec($query);
}//END deleteRow

//EDIT/UPDATE
public function updateRow($table_name,$columns,$condition){
  $query="UPDATE $table_name SET $columns WHERE $condition";
  // use exec() because no results are returned
  $this->conn->exec($query);
}//END updateRow

//update with stored procedures
public function callStoredProcedureUpdate($storedProcedureName,$columns,$condition){
  $query="CALL $storedProcedureName($columns,$condition)";
    // use exec() because no results are returned
  $this->conn->exec($query);
}//END callStoredProcedureUpdate

}//END class DB

?>