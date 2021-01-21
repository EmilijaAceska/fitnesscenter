<?php
class ModelOrders extends DB{
  private $order_id=-1;
  private $first_name="";
  private $last_name="";
  private $order_method="";
  private $card_number=-1;
  private $product_id=-1;
  private $date_time="";
  private $table_name="orders";
  private $columns_name="first_name, last_name, order_method, card_number, product_id, date_time";

  //SET-GET
  public function setOrdersId($order_id){
    $this->order_id=$order_id;
  }
  public function getOrdersId(){
    return $this->order_id;
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

  public function setOrderMethod($order_method){
    $this->order_method=$order_method;
  }
  public function getOrderMethod(){
    return $this->order_method;
  }

  public function setCardNumber($card_number){
    $this->card_number=$card_number;
  }
  public function getCardNumber(){
    return $this->card_number;
  }

  public function setProductId($product_id){
    $this->product_id=$product_id;
  }
  public function getProductId(){
    return $this->product_id;
  }
  public function setDateTime($date_time){
    $this->date_time=$date_time;
  }
  public function getDateTime(){
    return $this->date_time;
  }
  //SELECT
  public function selectOrders(){
    return parent::selectRow($this->table_name." INNER JOIN products ON orders.product_id=products.product_id;");
    // return parent::callStoredProcedureSelect('_selectOrders');
  }
  
  //DELETE
  public function deleteOrders(){
        parent::deleteRow($this->table_name,"order_id",$this->order_id);
        // $pk_value="$this->order_id";
        // parent::callStoredProcedureDelete('_deleteOrders',$pk_value);
  }
  
}
?>