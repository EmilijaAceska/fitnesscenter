<?php
require_once "../classes/database.php";
$table_name=$_GET["table_name"];
$data=array();
switch($table_name){
  case "category":
    require_once "model.category.php";
    $objCategory= new ModelCategory();
    $result=$objCategory->selectCategory();
    // var_dump($result);
    foreach($result as $row){
            $data["records"][]=array("category_title"=>$row["category_title"],"category_img"=>$row["category_img"]);
        }
  break;
  case "instructors":
    require_once "model.instructors.php";
    $objInsctructors= new ModelInstructors();
    $result=$objInsctructors->selectInstructors();
    // var_dump($result);
    foreach($result as $row){
          $data["records"][]=array("instructor_id"=>$row["instructor_id"],"first_name"=>$row["first_name"],"last_name"=>$row["last_name"]);    
        }
  break;
  case "products":
    require_once "model.products.php";
    $objProduct= new ModelProduct();
    $result=$objProduct->selectProduct();
    // var_dump($result);
    foreach($result as $row){
          $data["records"][]=array("product_id"=>$row["product_id"],"product_title"=>$row["product_title"],"product_description"=>$row["product_description"],
          "product_price"=>$row["product_price"],"category_title"=>$row["category_title"],"category_img"=>$row["category_img"],
          "instructor_id"=>$row["instructor_id"],"first_name"=>$row["first_name"],"last_name"=>$row["last_name"]);
        }
  break;
  case "products_gallery":
    require_once "model.products_gallery.php";
    $objProductsGallery= new ModelProductsGallery();
    $result=$objProductsGallery->selectProductsGallery();
    // var_dump($result);
    foreach($result as $row){
          $data["records"][]=array("products_gallery_id"=>$row["products_gallery_id"],"gallery_path"=>$row["gallery_path"],"product_id"=>$row["product_id"],
          "product_title"=>$row["product_title"],"product_description"=>$row["product_description"],"product_price"=>$row["product_price"],"category_title"=>$row["category_title"]);    
        }
  break;
  case "members":
    require_once "model.members.php";
    $objMembers= new ModelMembers();
    $result=$objMembers->selectMembers();
    // var_dump($result);
    foreach($result as $row){
          $data["records"][]=array("members_id"=>$row["members_id"],"first_name"=>$row["first_name"],"last_name"=>$row["last_name"],
          "email"=>$row["email"],"phone_number"=>$row["phone_number"]);    
        }
  break;
  case "schedules":
    require_once "model.schedules.php";
    $objSchedules= new ModelSchedules();
    $result=$objSchedules->selectSchedules();
    // var_dump($result);
    foreach($result as $row){
          $data["records"][]=array("schedules_id"=>$row["schedules_id"],"workout_date"=>$row["workout_date"],"product_id"=>$row["product_id"],"members_id"=>$row["members_id"],
          "first_name"=>$row["first_name"],"last_name"=>$row["last_name"],"email"=>$row["email"],"phone_number"=>$row["phone_number"],"product_title"=>$row["product_title"],
        "product_description"=>$row["product_description"],"product_price"=>$row["product_price"],"category_title"=>$row["category_title"]);    
        }
  break;
  case "payment":
    require_once "model.payment.php";
    $objPayment= new ModelPayment();
    $result=$objPayment->selectPayment();
    // var_dump($result);
    foreach($result as $row){
          $data["records"][]=array("payment_id"=>$row["payment_id"],"product_id"=>$row["product_id"],"members_id"=>$row["members_id"],
          "payment_status"=>$row["payment_status"],"payment_date"=>$row["payment_date"],"first_name"=>$row["first_name"],
          "last_name"=>$row["last_name"],"email"=>$row["email"],"phone_number"=>$row["phone_number"],"product_title"=>$row["product_title"],
          "product_description"=>$row["product_description"],"product_price"=>$row["product_price"],"category_title"=>$row["category_title"]);    
        }
  break;
  case "notifications":
    require_once "model.notifications.php";
    $objNotifications= new ModelNotifications();
    $result=$objNotifications->selectNotifications();
    // var_dump($result);
    foreach($result as $row){
          $data["records"][]=array("notification_id"=>$row["notification_id"],"notification_title"=>$row["notification_title"],
          "notification_content"=>$row["notification_content"],"members_id"=>$row["members_id"],"first_name"=>$row["first_name"],
          "last_name"=>$row["last_name"],"email"=>$row["email"],"phone_number"=>$row["phone_number"]);    
        }
  break;
  case "carousel":
        require_once "model.carousel.php";
        $objCarousel= new ModelCarousel();
        $result=$objCarousel->selectCarousel();
        // var_dump($result);
        foreach($result as $row){
                $data["records"][]=array("carousel_id"=>$row["carousel_id"],"carousel_img"=>$row["carousel_img"]);    
        }
    break;
  case "orders":
        require_once "model.orders.php";
        $objOrders= new ModelOrders();
        $result=$objOrders->selectOrders();
        // var_dump($result);
        foreach($result as $row){
                $data["records"][]=array("order_id"=>$row["order_id"],"first_name"=>$row["first_name"],"last_name"=>$row["last_name"],
                "order_method"=>$row["order_method"],"card_number"=>$row["card_number"],"product_id"=>$row["product_id"],"date_time"=>$row["date_time"],
                "product_title"=>$row["product_title"],"product_description"=>$row["product_description"],"product_price"=>$row["product_price"]);    
        }
    break;
  case "contact":
        require_once "model.contact.php";
        $objContact= new ModelContact();
        $result=$objContact->selectContact();
        // var_dump($result);
        foreach($result as $row){
                $data["records"][]=array("contact_id"=>$row["contact_id"],"first_name"=>$row["first_name"],"last_name"=>$row["last_name"],
                "message"=>$row["message"]);    
        }
  break;
}
echo json_encode($data);
?>