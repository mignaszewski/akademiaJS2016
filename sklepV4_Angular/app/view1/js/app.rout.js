var route = angular.module('route', ['ngRoute']);

route.config(function($routeProvider) {
    $routeProvider

        .when('/', {
            templateUrl : 'pages/home.html',
            controller  : 'mainController'
        })
        /*.when('/cart', {
            templateUrl : 'pages/cart.html',
            controller  : 'cartController'
        })
        .when('/sign-in', {
            templateUrl : 'pages/sign-in.html',
            controller  : 'sing-inController'
        });*/
});
