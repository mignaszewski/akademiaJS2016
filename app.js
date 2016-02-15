var route = angular.module('route', ['ngRoute', 'ui.bootstrap', 'jcs-autoValidate']);


route.config(function($routeProvider) {
  $routeProvider

      .when('/', {
        templateUrl : 'pages/home.html',
        controller  : 'mainController'
      })


      .when('/cart', {
        templateUrl : 'pages/cart.html',
        controller  : 'cartController'
      })


      .when('/sign-in', {
        templateUrl : 'pages/sign-in.html',
        controller  : 'sing-inController'
      });
});

route.controller('cartController', function($scope) {

});

route.controller('mainController', function($scope/*, $uibModal, $log*/) {
    $scope.items = [{
       name: "gibson",
        description: "sgsgsdgf sg sgfs gsf sf s sg sgs ",
        img: "img/gibson.png",
        star: 1,
        cost: 300
    },
        {
            name: "fender",
            description: "sgsgsdgf sg sgfs gsf sf s sg sgs ",
            img: "img/gibson.png",
            star: 5,
            cost: 240
        },
        {
            name: "Everplay",
            description: "sfhfjghdfg  hsafa soufha jqpj sdf shd jdgjhx fdgsgsrharf s sg sgs ",
            img: "img/slider-img.jpg",
            star: 4,
            cost: 22
        },
        {
            name: "Everplay",
            description: "sfhfjghdfg  hsafa soufha jqpj sdf shd jdgjhx fdgsgsrharf s sg sgs ",
            img: "img/gibson.png",
            star: 1,
            cost: 22
        },
        {
            name: "Everplay",
            description: "sfhfjghdfg  hsafa soufha jqpj sdf shd jdgjhx fdgsgsrharf s sg sgs ",
            img: "img/Guitar_Silhouette.png",
            star: 2,
            cost: 22
        },
        {
            name: "Everplay",
            description: "sfhfjghdfg  hsafa soufha jqpj sdf shd jdgjhx fdgsgsrharf s sg sgs ",
            img: "img/Guitar_Silhouette.png",
            star: 2,
            cost: 22
        }];


});

route.controller('signController', function($scope){


});