var app = angular.module('myApp', ["ngRoute"]);
app.controller('myCtrl', function($scope,$http,$routeParams) {
  //VARIABLES
  $scope.firstName = "Emilija";
  $scope.surname="Aceska";
  $scope.successAlert=false;
  $scope.successfullAlert=false;
  $scope.dangerAlert=false;
  $scope.infoAlert=false;
  $scope.deleteAlert=false;
  $scope.getId=0;
  $scope.checkUrl=$routeParams.id;
  

  //FUNCTIONS post-insert,update,delete
  function postJSON(dataObject){
    $http(
        {
            method: "post",//od kade
            url: 'model/insert.php',//kade
            data: dataObject,//sto
            headers: { 'Content-Type':
            'application/x-www-form-urlencoded' }
        }
    );
    // window.location.reload();//????????????????
    }
    function postUpdateJSON(dataObject){
    $http(
        {
            method: "post",//od kade
            url: 'model/update.php',//kade
            data: dataObject,//sto
            headers: { 'Content-Type':
            'application/x-www-form-urlencoded' }
        }
    );
    }
    function postJSONDelete(dataObject){
      $http(
          {
              method: "post",//od kade
              url: 'model/delete.php',//kade
              data: dataObject,//sto
              headers: { 'Content-Type':
              'application/x-www-form-urlencoded' }
          }
      );
      window.location.reload();
    }

  //**JSON**//
  
  //SELECT-CATEGORY
  $scope.category=[];
  //          file_name.php  ? variable =value
  $http.get("model/select.php?table_name=category")
  .then(function (response){
  $scope.category=response.data.records;
  });//end CATEGORY
  
  //SELECT-INSTRUCTORS
  $scope.instructors=[];
  $http.get("model/select.php?table_name=instructors")
  .then(function (response){
  $scope.instructors=response.data.records;
  });//END INSTRUCTORS

  //SELECT-PRODUCTS
  $scope.products=[];
  $http.get("model/select.php?table_name=products")
  .then(function (response){
  $scope.products=response.data.records;
  });//END PRODUCTS

  //SELECT-PRODUCTS GALLERY
  $scope.products_gallery=[];
  $http.get("model/select.php?table_name=products_gallery")
  .then(function (response){
  $scope.products_gallery=response.data.records;
  });//END PRODUCTS GALLERY

  //SELECT-MEMBERS
  $scope.members=[];
  $http.get("model/select.php?table_name=members")
  .then(function (response){
  $scope.members=response.data.records;
  });//END MEMBERS

  //SELECT-SCHEDULES
  $scope.schedules=[];
  $http.get("model/select.php?table_name=schedules")
  .then(function (response){
  $scope.schedules=response.data.records;
  });//END SCHEDULES

  //SELECT-PAYMENT
  $scope.payment=[];
  $http.get("model/select.php?table_name=payment")
  .then(function (response){
  $scope.payment=response.data.records;
  });//END PAYMENT

  //SELECT-NOTIFICATIONS
  $scope.notifications=[];
  $http.get("model/select.php?table_name=notifications")
  .then(function (response){
  $scope.notifications=response.data.records;
  });//END NOTIFICATIONS

  //SELECT-ORDERS
  $scope.orders=[];
  $http.get("model/select.php?table_name=orders")
  .then(function (response){
  $scope.orders=response.data.records;
  });//END ORDERS

  //SELECT-CONTACT
  $scope.contact=[];
  $http.get("model/select.php?table_name=contact")
  .then(function (response){
  $scope.contact=response.data.records;
  });//END CONTACT

  //***FUNCTIONS***
  //INSERT-CATEGORY
  $scope.function_category_details = function(category_title,category_img,pk_value,action){
  var find=0;
  angular.forEach($scope.category, function(value,keys){
    // console.log($scope.category[keys].category_title+" ");
    if($scope.category[keys].category_title == category_title){
      find = 1;      
      console.log($scope.category[keys].category_title+" ");
      $scope.infoAlert=true;
      $scope.successfullAlert=false;
    } 
  });
  if(find==0){
    var categoryJson=[{"category_title":category_title,"category_img":category_img, "table_name":"category", "action":action}];
    console.log(categoryJson);
    postJSON(categoryJson);
    $scope.dangerAlert=false;
    $scope.successAlert=true;
    $scope.infoAlert=false;
  } else {
    var categoryJson=[{"category_title":category_title,"category_img":category_img,"pk_value":pk_value, "table_name":"category", "action":action}];
    console.log(categoryJson);
    postUpdateJSON(categoryJson);
    $scope.successfullAlert=true;  
  }
}//END CATEGORY

//INSERT- INSTRUCTORS
$scope.function_instructors_details = function(first_name,last_name,category_title,pk_value,action) {
  // console.log("Function Members " + first_name + " " + last_name + " ");
  var instructorsJson=[{"first_name":first_name,"last_name":last_name,"category_title":category_title,"pk_value":pk_value, "table_name":"instructors", "action":action}];
  console.log(instructorsJson);
  if(action=='insert'){
    postJSON(instructorsJson);
    $scope.successAlert=true;
  }else {
    postUpdateJSON(instructorsJson);
    $scope.successfullAlert=true;  
  }
  $scope.dangerAlert=false;
}//END INSTRUCTORS

//INSERT- PRODUCTS
$scope.function_products_details = function(product_title,product_description,product_price,category_title,instructor_id,pk_value,action) {
  // console.log("Function Products " + product_title + " " + product_description + " " + product_price + " " + category_title + " " +instructor_id+" ");
  var productsJson=[{"product_title":product_title,"product_description":product_description,"product_price":product_price,
                    "category_title":category_title,"instructor_id":instructor_id,"pk_value":pk_value, "table_name":"products", "action":action}];
  console.log(productsJson);
  if(action=='insert'){
    postJSON(productsJson);
    $scope.successAlert=true;
  }else {
    postUpdateJSON(productsJson);
    $scope.successfullAlert=true;  
  }
  $scope.dangerAlert=false;
}//END PRODUCTS

//INSERT- PRODUCTS GALLERY
$scope.function_products_gallery_details = function(gallery_path,product_id,pk_value,action) {
  // console.log("Function Products Gallery " + gallery_path + " " + product_id + " ");
  var products_galleryJson=[{"gallery_path":gallery_path,"product_id":product_id,"pk_value":pk_value, "table_name":"products_gallery", "action":action}];
  console.log(products_galleryJson);
  if(action=='insert'){
    postJSON(products_galleryJson);
    $scope.successAlert=true;
  }else {
    postUpdateJSON(products_galleryJson);  
    $scope.successfullAlert=true;
  }
  $scope.dangerAlert=false;
}//END PRODUCTS GALLERY

//INSERT- MEMBERS
$scope.function_members_details = function(f_name,l_name,email,phone_number,pk_value,action) {
  // console.log("Function Members " + f_name + " " + l_name + " " + email + " " + phone_number + " ");
  var membersJson=[{"f_name":f_name,"l_name":l_name,"email":email,"phone_number":phone_number,"pk_value":pk_value, "table_name":"members", "action":action}];
  console.log(membersJson);
  if(action=='insert'){
    postJSON(membersJson);
    $scope.successAlert=true;
  }else {
    postUpdateJSON(membersJson);
    $scope.successfullAlert=true;  
  }
  $scope.dangerAlert=false;
}//END MEMBERS

//INSERT- SCHEDULES
$scope.function_schedules_details = function(workout_date,product_id,members_id,instructor_id,pk_value,action) {
  // console.log("Function Schedules " + workout_date + " " + product_id + " " + members_id + " " + instructor_id + " ");
  var schedulesJson=[{"workout_date":workout_date,"product_id":product_id,"members_id":members_id,"instructor_id":instructor_id,"pk_value":pk_value, "table_name":"schedules", "action":action}];
  console.log(schedulesJson);
  if(action=='insert'){
    postJSON(schedulesJson);
    $scope.successAlert=true;
  }else {
    postUpdateJSON(schedulesJson); 
     $scope.successfullAlert=true; 
  }
  $scope.dangerAlert=false;
}//END SCHEDULES

//INSERT- PAYMENT
$scope.function_payment_details = function(product_id,members_id,payment_status,payment_date,pk_value,action) {
  // console.log("Function Payment " + product_id + " " + members_id + " "+ payment_status + " " + payment_date + " ");
  var paymentJson=[{"product_id":product_id,"members_id":members_id,"payment_status":payment_status,"payment_date":payment_date,"pk_value":pk_value, "table_name":"payment", "action":action}];
  console.log(paymentJson);
  if(action=='insert'){
    postJSON(paymentJson);
    $scope.successAlert=true;
  }else {
    postUpdateJSON(paymentJson); 
     $scope.successfullAlert=true; 
  }
  $scope.dangerAlert=false;
}//END PAYMENT

//INSERT- NOTIFICATION
$scope.function_notification_details = function(notification_title,notification_content,members_id,pk_value,action) {
  console.log("Function Notifications " + notification_id + " " + notification_title + " "+ notification_content + " " + members_id + " ");
  var notificationsJson=[{"notification_title":notification_title,"notification_content":notification_content,"members_id":members_id,"pk_value":pk_value, "table_name":"notifications", "action":action}];
  console.log(notificationsJson);
  if(action=='insert'){
    postJSON(notificationsJson);
    $scope.successAlert=true;
  }else {
    postUpdateJSON(notificationsJson);  
     $scope.successfullAlert=true;
  }
  $scope.dangerAlert=false;
}//END NOTIFICATION

//INSERT ADMIN
$scope.function_admin_form = function(admin_name,admin_password) {
    console.log("Function Admin " + admin_name + " " + admin_password + " " );
    var adminJson=[{"admin_name":admin_name,"admin_password":admin_password, "table_name":"administration"}];
    console.log(adminJson);
    postJSON(adminJson);
    $scope.successAlert=true;
    $scope.dangerAlert=false;
  }//END ADMIN

//FUNCTION ERROR
$scope.function_error=function() {
  $scope.successAlert=false;
  $scope.dangerAlert=true;
  $scope.infoAlert=false;
  // console.log("error");
}

//DELETE
$scope.function_deleteRow= function(table_name,pk_value){
 $scope.deleteAlert=true;
 var deleteJson=[{"table_name":table_name,"pk_value":pk_value}];
//  console.log(deleteJson); 
 postJSONDelete(deleteJson);
}//END deleteRow

//DELETE RowCategory
$scope.function_deleteRowCategory= function(pk_value){
  // console.log("deleteRowCategory");
 $scope.deleteAlert=true;
 var find=0;
 var find_products=0;
 var find_instructors=0;
  angular.forEach($scope.products, function(value,keys){
    if($scope.products[keys].category_title == pk_value){
      find_products=1;
      $scope.deleteAlert=false;
      $scope.infoAlert=true;
    }
  });
  angular.forEach($scope.instructors, function(value,keys){
    if($scope.instructors[keys].category_title == pk_value){
      find_instructors=1;
      $scope.deleteAlert=false;
      $scope.infoAlert=true;
    }
  });
  if(find_products==1 || find_instructors==1){
    find=1;
    $scope.deleteAlert=false;
    $scope.infoAlert=true;
  }
}//END deleteRowCategory

//DELETE RowInstructors
$scope.function_deleteRowInstructors= function(pk_value){
  // console.log("deleteRowCategory");
 $scope.deleteAlert=true;
 var find=0;
 angular.forEach($scope.products, function(value,keys){
    if($scope.products[keys].instructor_id == pk_value){
      find = 1;
      $scope.deleteAlert=false;
      $scope.infoAlert=true;
    }
  });
}//END deleteRowInstructors

//DELETE RowProducts
$scope.function_deleteRowProducts= function(pk_value){
 $scope.deleteAlert=true;
 var find=0;
 var find_orders=0;
 var find_payment=0;
 var find_products_gallery=0;
 var find_schedules=0;

  angular.forEach($scope.orders, function(value,keys){
    if($scope.orders[keys].product_id == pk_value){
      find_order = 1;
      $scope.deleteAlert=false;
      $scope.infoAlert=true;
    }
  });
  angular.forEach($scope.payment, function(value,keys){
    if($scope.payment[keys].product_id == pk_value){
      find_payment = 1;
      $scope.deleteAlert=false;
      $scope.infoAlert=true;
    }
  });
  angular.forEach($scope.products_gallery, function(value,keys){
    if($scope.products_gallery[keys].product_id == pk_value){
      find_products_gallery = 1;
      $scope.deleteAlert=false;
      $scope.infoAlert=true;
    }
  });
  angular.forEach($scope.schedules, function(value,keys){
    if($scope.products_gallery[keys].product_id == pk_value){
      find_schedules = 1;
      $scope.deleteAlert=false;
      $scope.infoAlert=true;
    }
  });
  if(find_orders==1 || find_payment==1 || find_products_gallery==1 || find_schedules==1){
    find=1;
    $scope.deleteAlert=false;
    $scope.infoAlert=true;
  }
}//END deleteRowProducts

// DELETE RowMembers
$scope.function_deleteRowMembers= function(pk_value){
 $scope.deleteAlert=true;
 var find=0;
 var find_notifications=0;
 var find_payment=0;
 var find_schedules=0;

  angular.forEach($scope.notifications, function(value,keys){
    if($scope.notifications[keys].members_id == pk_value){
      find_notifications = 1;
      $scope.deleteAlert=false;
      $scope.infoAlert=true;
    }
  });
  angular.forEach($scope.payment, function(value,keys){
    if($scope.payment[keys].members_id == pk_value){
      find_payment = 1;
      $scope.deleteAlert=false;
      $scope.infoAlert=true;
    }
  });
  angular.forEach($scope.schedules, function(value,keys){
    if($scope.schedules[keys].members_id == pk_value){
      find_schedules = 1;
      $scope.deleteAlert=false;
      $scope.infoAlert=true;
    }
  });
  if(find_payment==1 || find_notifications==1 || find_schedules==1){
    find=1;
    $scope.deleteAlert=false;
    $scope.infoAlert=true;
  }
}//END deleteRowMembers

$scope.function_getId = function(pk_value){
  $scope.getId=pk_value;
  $scope.infoAlert=false;
  console.log("GET ID " + pk_value)
}
});

app.controller('myLogin', function($scope,$http,$routeParams) {
  $scope.logIn = function(admin_name,admin_password){
   
    $scope.administration=[];
    $http.get("model/login.php?admin_name="+admin_name+"&admin_password="+admin_password)
    .then(function(response){
    $scope.administration=response.data.records;
    console.log($scope.administration[0].id);
    
    if($scope.administration[0].id>-1){
      // console.log("found");
      window.location = "http://localhost/fitnesscenter/admin/main.html";   
    }else{
      window.location = "http://localhost/fitnesscenter/admin/index.html";
    }
    });
  }
});