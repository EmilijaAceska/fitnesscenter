<?php
$data= json_decode(file_get_contents("php://input"));
var_dump($data);
require_once "../../classes/database.php";
$table_name=$data[0]->table_name;
switch($table_name){
  case "category":
    require_once "model.category.php";
        $objCategory= new ModelCategory();
        $category_title=$data[0]->category_title;
        $category_img=$data[0]->category_img;
        $objCategory->setCategoryTitle($category_title);
        $objCategory->setCategoryImg($category_img);
        $objCategory->insertCategory();
  break;
  case "instructors":
        require_once "model.instructors.php";
        $objInstructors= new ModelInstructors();
        $first_name=$data[0]->first_name;
        $last_name=$data[0]->last_name;
        $category_title=$data[0]->category_title;
        $objInstructors->setFirstName($first_name);
        $objInstructors->setLastName($last_name);
        $objInstructors->setCategoryTitle($category_title);
        $objInstructors->insertInstructors();
  break;
  case "products":
        require_once "model.products.php";
        $objProducts= new ModelProduct();
        $product_title=$data[0]->product_title;
        $product_description=$data[0]->product_description;
        $product_price=$data[0]->product_price;
        $category_title=$data[0]->category_title;
        $instructor_id=$data[0]->instructor_id;
        $objProducts->setProductTitle($product_title);
        $objProducts->setProductDescription($product_description);
        $objProducts->setProductPrice($product_price);
        $objProducts->setCategoryTitle($category_title);
        $objProducts->setInstructorsId($instructor_id);
        $objProducts->insertProduct();
  break;
  case "products_gallery":
        require_once "model.products_gallery.php";
        $objProductsGallery= new ModelProductsGallery();
        $gallery_path=$data[0]->gallery_path;
        $product_id=$data[0]->product_id;
        $objProductsGallery->setProductsGalleryPath($gallery_path);
        $objProductsGallery->setProductId($product_id);
        $objProductsGallery->insertProductsGallery();
  break;
  case "members":
        require_once "model.members.php";
        $objMembers= new ModelMembers();
        $f_name=$data[0]->f_name;
        $l_name=$data[0]->l_name;
        $email=$data[0]->email;
        $phone_number=$data[0]->phone_number;
        $objMembers->setFirstName($f_name);
        $objMembers->setLastName($l_name);
        $objMembers->setEmail($email);
        $objMembers->setPhoneNumber($phone_number);
        $objMembers->insertMembers();
  break;
  case "schedules":
        require_once "model.schedules.php";
        $objSchedules= new ModelSchedules();
        $workout_date=$data[0]->workout_date;
        $product_id=$data[0]->product_id;
        $members_id=$data[0]->members_id;
        $instructor_id=$data[0]->instructor_id;
        $objSchedules->setWorkoutDate($workout_date);
        $objSchedules->setProductId($product_id);
        $objSchedules->setMembersId($members_id);
        $objSchedules->setInstructorId($instructor_id);
        $objSchedules->insertSchedules();
  break;
  case "payment":
        require_once "model.payment.php";
        $objPayment= new ModelPayment();
        $product_id=$data[0]->product_id;
        $members_id=$data[0]->members_id;
        $payment_status=$data[0]->payment_status;
        $payment_date=$data[0]->payment_date;
        $objPayment->setProductId($product_id);
        $objPayment->setMembersId($members_id);        
        $objPayment->setPaymentStatus($payment_status);
        $objPayment->setPaymentDate($payment_date);
        $objPayment->insertPayment();
  break;
  case "notifications":
        require_once "model.notifications.php";
        $objNotifications= new ModelNotifications();
        $notification_title=$data[0]->notification_title;
        $notification_content=$data[0]->notification_content;
        $members_id=$data[0]->members_id;
        $objNotifications->setNotificationTitle($notification_title);
        $objNotifications->setNotificationContent($notification_content);
        $objNotifications->setMembersId($members_id);
        $objNotifications->insertNotifications();
  break;
  case "orders":
        require_once "model.orders.php";
        $objOrders= new ModelOrders();
        $members_id=$data[0]->members_id;
        $order_method=$data[0]->order_method;
        $card_number=$data[0]->card_number;
        $product_id=$data[0]->product_id;
        $objOrders->setMembersId($members_id);
        $objOrders->setOrderMethod($order_method);
        $objOrders->setCardNumber($card_number);
        $objOrders->setProductId($product_id);
        $objOrders->insertOrders();
  break;
  case "administration":
        require_once "model.administration.php";
        $objAdmin= new ModelAdministration();
        $admin_name=$data[0]->admin_name;
        $admin_password=$data[0]->admin_password;
        $objAdmin->setName($admin_name); 
        $objAdmin->setPassword($admin_password);
        $objAdmin->insertAdmin();
    break;
}
?>