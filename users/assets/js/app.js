var app = angular.module('myApp', ["ngRoute"]);
app.controller('myCtrl', function($scope,$http,$routeParams) {
  //VARIABLES
  $scope.firstName = "Emilija";
  $scope.surname="Aceska";
  $scope.successAlert=false;
  $scope.successfullAlert=false;
  $scope.dangerAlert=false;
  $scope.infoAlert=false;
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
  //SELECT-CAROUSEL
  $scope.carousel=[];
  //          file_name.php  ? variable =value
  $http.get("model/select.php?table_name=carousel")
  .then(function (response){
  $scope.carousel=response.data.records;
  });//end CAROUSEL

  //SELECT-CATEGORY
  $scope.category=[];
  //          file_name.php  ? variable =value
  $http.get("model/select.php?table_name=category")
  .then(function (response){
  $scope.category=response.data.records;
  });//end CATEGORY
  
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
  //INSERT- ORDERS
  $scope.function_orders_details = function(first_name,last_name,order_method,card_number,product_id) {
    // console.log("Function Orders " + first_name + " " + last_name + " " + order_method + " " + card_number + " " + product_id + " ");
    var ordersJson=[{"first_name":first_name,"last_name":last_name,"order_method":order_method,"card_number":card_number,"product_id":product_id, "table_name":"orders"}];
    // console.log(ordersJson);
    postJSON(ordersJson);
    $scope.successAlert=true;
    $scope.dangerAlert=false;
  }//END ORDERS

  //INSERT- CONTACT
  $scope.function_contact_details = function(first_name,last_name,message,pk_value) {
    // console.log("Function Orders " + first_name + " " + last_name + " " + message + " ");
    var contactJson=[{"first_name":first_name,"last_name":last_name,"message":message,"pk_value":pk_value, "table_name":"contact"}];
    // console.log(contactJson);
    postJSON(contactJson);
    $scope.successAlert=true;
    $scope.dangerAlert=false;
  }//END CONTACT

//DELETE
$scope.function_deleteRow= function(table_name,pk_value){
 var deleteJson=[{"table_name":table_name,"pk_value":pk_value}];
 postJSONDelete(deleteJson);
}//END deleteRow


$scope.function_getId = function(pk_value){
  $scope.getId=pk_value;
  $scope.infoAlert=false;
  // console.log("GET ID " + pk_value)
}
});