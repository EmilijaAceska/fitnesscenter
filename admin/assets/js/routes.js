app.config(function($routeProvider) {
  $routeProvider
  .when("/main", {
    templateUrl : "view/main.html",
    controller:"myCtrl"
  })
  .when("/orders", {
    templateUrl : "view/orders.html",
    controller:"myCtrl"
  })
  .when("/contact", {
    templateUrl : "view/contact.html",
    controller:"myCtrl"
  })
  .when("/category", {
    templateUrl : "view/category.html",
    controller:"myCtrl"
  })
  .when("/category_details", {
    templateUrl : "view/category_details.html",
    controller:"myCtrl"
  })
  .when("/category_details/:id", {
    templateUrl : "view/category_details.html",
    controller:"myCtrl"
  })
  .when("/instructors", {
    templateUrl : "view/instructors.html",
    controller:"myCtrl"
  })
  .when("/instructors_details", {
    templateUrl : "view/instructors_details.html",
    controller:"myCtrl"
  })
  .when("/instructors_details/:id", {
    templateUrl : "view/instructors_details.html",
    controller:"myCtrl"
  })
  .when("/products", {
    templateUrl : "view/products.html",
    controller:"myCtrl"
  })
  .when("/products_details", {
    templateUrl : "view/products_details.html",
    controller:"myCtrl"
  })
  .when("/products_details/:id", {
    templateUrl : "view/products_details.html",
    controller:"myCtrl"
  })
  .when("/products_gallery", {
    templateUrl : "view/products_gallery.html",
    controller:"myCtrl"
  })
  .when("/products_gallery_details", {
    templateUrl : "view/products_gallery_details.html",
    controller:"myCtrl"
  })
  .when("/products_gallery_details/:id", {
    templateUrl : "view/products_gallery_details.html",
    controller:"myCtrl"
  })
  .when("/members", {
    templateUrl : "view/members.html",
    controller:"myCtrl"
  })
  .when("/members_details", {
    templateUrl : "view/members_details.html",
    controller:"myCtrl"
  })
  .when("/members_details/:id", {
    templateUrl : "view/members_details.html",
    controller:"myCtrl"
  })
  .when("/schedules", {
    templateUrl : "view/schedules.html",
    controller:"myCtrl"
  })
  .when("/schedules_details", {
    templateUrl : "view/schedules_details.html",
    controller:"myCtrl"
  })
  .when("/schedules_details/:id", {
    templateUrl : "view/schedules_details.html",
    controller:"myCtrl"
  })
  .when("/payment", {
    templateUrl : "view/payment.html",
    controller:"myCtrl"
  })
  .when("/payment_details", {
    templateUrl : "view/payment_details.html",
    controller:"myCtrl"
  })
  .when("/payment_details/:id", {
    templateUrl : "view/payment_details.html",
    controller:"myCtrl"
  })
  .when("/notifications", {
    templateUrl : "view/notifications.html",
    controller:"myCtrl"
  })
  .when("/notifications_details", {
    templateUrl : "view/notifications_details.html",
    controller:"myCtrl"
  })
  .when("/notifications_details/:id", {
    templateUrl : "view/notifications_details.html",
    controller:"myCtrl"
  })
  .when("/orders", {
    templateUrl : "view/orders.html",
    controller:"myCtrl"
  })
  .when("/signin_form", {
    templateUrl : "view/signin_form.html",
    controller:"myCtrl"
  })
  .when("/main", {
    templateUrl : "main.html",
    controller:"myCtrl"
  })
  //za login
  .when("/index", {
    templateUrl : "index.html",
    controller:"myLogin"
  })
  .otherwise("/category", {
    templateUrl: "view/category.html",
    controller:"myCtrl"
  });
});