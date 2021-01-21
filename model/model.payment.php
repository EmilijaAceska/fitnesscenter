<?php
class ModelPayment extends DB{
  private $payment_id=-1;
  private $product_id=-1;
  private $members_id=-1;
  private $payment_status="";
  private $payment_date="";
  private $table_name="payment";
  private $columns_name="product_id, members_id, payment_status, payment_date";

  //SET-GET
  public function setPaymentId($payment_id){
    $this->payment_id=$payment_id;
  }
  public function getPaymentId(){
    return $this->payment_id;
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

  public function setPaymentStatus($payment_status){
    $this->payment_status=$payment_status;
  }
  public function getPaymentStatus(){
    return $this->payment_status;
  }

  public function setPaymentDate($payment_date){
    $this->payment_date=$payment_date;
  }
  public function getPaymentDate(){
    return $this->payment_date;
  }
  //SELECT
  public function selectPayment(){
    return parent::selectRow($this->table_name." INNER JOIN members ON payment.members_id=members.members_id INNER JOIN products ON payment.product_id=products.product_id;");
    // return parent::callStoredProcedureSelect('_selectPayment');
  }
  //INSERT
  public function insertPayment(){
    $columns_value="$this->product_id,$this->members_id,'$this->payment_status','$this->payment_date'";
    parent::insertRow($this->table_name,$this->columns_name,$columns_value);
    // parent::callStoredProcedureInsert('_insertPayment',$columns_value);
  }
  //DELETE
  public function deletePayment(){
        parent::deleteRow($this->table_name,"payment_id",$this->payment_id);
  }//dali e taka
  //UPDATE
  public function updatePayment(){
    $columns="product_id=$this->product_id,members_id=$this->members_id,payment_status='$this->payment_status',payment_date='$this->payment_date'";
    $condition="payment_id='$this->payment_id'";
    parent::updateRow($this->table_name,$columns,$condition);
  }
}
?>