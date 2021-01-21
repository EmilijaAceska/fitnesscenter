<?php
$data= json_decode(file_get_contents("php://input"));
var_dump($data);
require_once "../../classes/database.php";//
$table_name=$data[0]->table_name;
$pk_value=$data[0]->pk_value;
switch ($table_name) {
  case "category":
    require_once "model.category.php";
        $objCategory= new ModelCategory();
        $category_title=$data[0]->category_title;
        $category_img=$data[0]->category_img;
        $objCategory->setCategoryTitle($category_title);
        $objCategory->setCategoryImg($category_img);
        $objCategory->updateCategory();
  break;
  case "products":
        require_once "model.products.php";
        $objProducts= new ModelProduct();
        $product_title=$data[0]->product_title;
        $product_description=$data[0]->product_description;
        $product_price=$data[0]->product_price;
        $category_title=$data[0]->category_title;
        $objProducts->setProductTitle($product_title);
        $objProducts->setProductDescription($product_description);
        $objProducts->setProductPrice($product_price);
        $objProducts->setCategoryTitle($category_title);
        $objProducts->setProductId($pk_value);
        $objProducts->updateProduct();
  break;
  case "products_gallery":
        require_once "model.products_gallery.php";
        $objProductsGallery= new ModelProductsGallery();
        $gallery_path=$data[0]->gallery_path;
        $product_id=$data[0]->product_id;
        $objProductsGallery->setProductsGalleryPath($gallery_path);
        $objProductsGallery->setProductId($product_id);
        $objProductsGallery->setProductsGalleryId($pk_value);
        $objProductsGallery->updateProductsGallery();
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
        $objMembers->setMembersId($pk_value);
        $objMembers->updateMembers();
  break;
  case "schedules":
        require_once "model.schedules.php";
        $objSchedules= new ModelSchedules();
        $workout_date=$data[0]->workout_date;
        $product_id=$data[0]->product_id;
        $members_id=$data[0]->members_id;
        $objSchedules->setWorkoutDate($workout_date);
        $objSchedules->setProductId($product_id);
        $objSchedules->setMembersId($members_id);
        $objSchedules->setSchedulesId($pk_value);
        $objSchedules->updateSchedules();
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
        $objPayment->setPaymentId($pk_value);
        $objPayment->updatePayment();
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
        $objNotifications->setNotificationId($pk_value);
        $objNotifications->updateNotifications();
  break;
}
?>