app.config(function($routeProvider) {
  $routeProvider
  .when("/main", {
    templateUrl : "view/main.html",
    controller:"myCtrl"
  })
  $routeProvider
  .when("/contact_details", {
    templateUrl : "view/contact_details.html",
    controller:"myCtrl"
  })
  .when("/orders_details", {
    templateUrl : "view/orders_details.html",
    controller:"myCtrl"
  })
   .when("/products", {
    templateUrl : "view/products.html",
    controller:"myCtrl"
  })
  .when("/products_gallery", {
    templateUrl : "view/products_gallery.html",
    controller:"myCtrl"
  })
  .when("/schedules", {
    templateUrl : "view/schedules.html",
    controller:"myCtrl"
  })
  .when("/notifications", {
    templateUrl : "view/notifications.html",
    controller:"myCtrl"
  })
  .otherwise("/main", {
    templateUrl: "view/main.html",
    controller:"myCtrl"
  });
});