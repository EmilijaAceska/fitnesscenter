<?php
$data= json_decode(file_get_contents("php://input"));
var_dump($data);
require_once "../../classes/database.php";
$table_name=$data[0]->table_name;
switch($table_name){
  case "orders":
        require_once "model.orders.php";
        $objOrders= new ModelOrders();
        $first_name=$data[0]->first_name;
        $last_name=$data[0]->last_name;
        $order_method=$data[0]->order_method;
        $card_number=$data[0]->card_number;
        $product_id=$data[0]->product_id;
        $objOrders->setFirstName($first_name);
        $objOrders->setLastName($last_name);
        $objOrders->setOrderMethod($order_method);
        $objOrders->setCardNumber($card_number);
        $objOrders->setProductId($product_id);
        $objOrders->insertOrders();
  break;
  case "contact":
        require_once "model.contact.php";
        $objContact= new ModelContact();
        $first_name=$data[0]->first_name;
        $last_name=$data[0]->last_name;
        $message=$data[0]->message;
        $objContact->setFirstName($first_name);
        $objContact->setLastName($last_name);
        $objContact->setMessage($message);
        $objContact->insertContact();
  break;
}
?>