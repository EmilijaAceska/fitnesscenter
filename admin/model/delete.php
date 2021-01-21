<?php
$data= json_decode(file_get_contents("php://input"));
// var_dump($data);
require_once "../../classes/database.php";
$table_name=$data[0]->table_name;
$pk_value=$data[0]->pk_value;
switch ($table_name) {
  case "category":
        require_once "model.category.php";
        $objCategory= new ModelCategory();
        $objCategory->setCategoryTitle($pk_value);
        $objCategory->deleteCategory();
  break;
  case "instructors":
        require_once "model.instructors.php";
        $objInstructors= new ModelInstructors();
        $objInstructors->setInstructorsId($pk_value);
        $objInstructors->deleteInstructors();
  break;
  case "products":
        require_once "model.products.php";
        $objProduct= new ModelProduct();
        $objProduct->setProductId($pk_value);
        $objProduct->deleteProduct();
  break;
  case "products_gallery":
        require_once "model.products_gallery.php";
        $objProductsGallery= new ModelProductsGallery();
        $objProductsGallery->setProductsGalleryId($pk_value);
        $objProductsGallery->deleteProductsGallery();
  break;
  case "members":
        require_once "model.members.php";
        $objMember= new ModelMembers();
        $objMember->setMembersId($pk_value);
        $objMember->deleteMembers();
  break;
  case "schedules":
        require_once "model.schedules.php";
        $objSchedules= new ModelSchedules();
        $objSchedules->setSchedulesId($pk_value);
        $objSchedules->deleteSchedules();
  break;
  case "payment":
        require_once "model.payment.php";
        $objPayment= new ModelPayment();
        $objPayment->setPaymentId($pk_value);
        $objPayment->deletePayment();
  break;
  case "notifications":
        require_once "model.notifications.php";
        $objNotifications= new ModelNotifications();
        $objNotifications->setNotificationId($pk_value);
        $objNotifications->deleteNotifications();
  break;
  case "orders":
        require_once "model.orders.php";
        $objOrders= new ModelOrders();
        $objOrders->setOrdersId($pk_value);
        $objOrders->deleteOrders();
  break;
 case "contact":
        require_once "model.contact.php";
        $objContact= new ModelContact();
        $objContact->setContactId($pk_value);
        $objContact->deleteContact();
 break;
}