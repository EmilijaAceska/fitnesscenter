app.config(function($routeProvider) {
  $routeProvider
  .when("/main", {
    templateUrl : "view/main.html",
    controller:"myCtrl"
  })
  .when("/products", {
    templateUrl : "view/products.html",
    controller:"myCtrl"
  })
  .when("/about", {
    templateUrl : "view/about.html",
    controller:"myCtrl"
  })
  .when("/orders_details", {
    templateUrl : "view/orders_details.html",
    controller:"myCtrl"
  })
   .when("/orders_details/:id", {
    templateUrl : "view/orders_details.html",
    controller:"myCtrl"
  })
  .when("/contact_details", {
    templateUrl : "view/contact_details.html",
    controller:"myCtrl"
  })
  .when("/registration_form", {
    templateUrl : "view/registration_form.html",
    controller:"myCtrl"
  })
  .when("/signin_form", {
    templateUrl : "view/signin_form.html",
    controller:"myCtrl"
  })
  .when("/signin_form/:id", {
    templateUrl : "view/signin_form.html",
    controller:"myCtrl"
  })
  .when("/index", {
    templateUrl : "index.html",
    controller:"myLogin"
  })
  .otherwise("/about", {
    templateUrl: "view/about.html",
    controller:"myCtrl"
  });
});