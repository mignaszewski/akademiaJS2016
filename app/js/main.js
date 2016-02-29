(function () {
    "use strict";


    var route = angular.module('route', ['ngRoute']);

    route.config(function ($routeProvider) {
        $routeProvider

            .when('/', {
                templateUrl: 'pages/home.html',
                controller: 'mainController'
            })
            .when('/cart', {
                templateUrl: 'pages/cart.html',
                controller: 'mainController'
            })
            .when('/sign-in', {
                templateUrl: 'pages/sign-in.html',
                controller: 'mainController'
            })
            .when('/electric', {
                templateUrl: 'pages/electric.html',
                controller: 'mainController'
            })
            .when('/acoustic', {
                templateUrl: 'pages/acoustic.html',
                controller: 'mainController'
            })
            .when('/bass', {
                templateUrl: 'pages/bass.html',
                controller: 'mainController'
            })
            .when('/classic', {
                templateUrl: 'pages/classic.html',
                controller: 'mainController'
            })
            .when('/accesories', {
                templateUrl: 'pages/accesories.html',
                controller: 'mainController'
            })
            .when('/sale', {
                templateUrl: 'pages/sale.html',
                controller: 'mainController'
            });
    });


    route.controller('mainController', function ($scope, $http) {

        $http.get('guitars.json').success(function (data) {
            $scope.items = data;
        });

/*
        $scope.chartLoop = function(){

            for (var o = sessionStorage.length; o > 1; o--) {
                $scope.chart += JSON.parse(sessionStorage.getItem(o));
            }
                return $scope.chart;
        };

        $scope.cartItem = $scope.chartLoop()*/

        $scope.chart= new Array();

        $scope.addItem = function (item) {
            var cartItem = {
                name: item.name,
                id: item.id,
                cost: item.cost
            };

            $scope.chart = [];

            sessionStorage.setItem(sessionStorage.length + 1, JSON.stringify(cartItem));

            for (var o = sessionStorage.length; o >= 1; o--) {
               $scope.chart += JSON.parse(sessionStorage.getItem(o));
            }

            console.log($scope.chart);

        };


        $("body").on("click", ".thumbnail", function () {

            var name = $(this).find(".name").html();
            $("#names").text(name);

            var descriptions = $(this).find("#description").html();
            $("#descriptions").text(descriptions);

            var cost = $(this).find("#cost").html();
            $("#costs").text(cost);

            var img = $(this).find(".panel-images").attr("src");
            $(".images-panels").attr("src", img);

            var star = $(this).find(".star").text();
            var mark = "";
            for (var i = 1; i <= star; i++) {
                mark += "<span class='glyphicon glyphicon-star' aria-hidden='true'></span>";
            }
            $(".mark").html("Mark: " + mark);

        });

        $scope.orderby = '-cost';
        $scope.reverse = false;
        $scope.order = function (orderby) {
            $scope.reverse = ($scope.orderby === orderby) ? !$scope.reverse : false;
            $scope.orderby = orderby;
        };

        $scope.withoutlogin = false;
        $scope.loginpanel = false;

        $scope.panelcart = function () {
            if ($scope.loginpanel) {
                $scope.withoutlogin = true;
                $scope.loginpanel = false;
            } else {
                $scope.withoutlogin = true;
            }
        };

        $scope.hideshow = function () {
            if ($scope.withoutlogin) {
                $scope.loginpanel = true;
                $scope.withoutlogin = false;
            } else {
                $scope.loginpanel = true;
            }
        };

    });

    route.controller('photoController', function () {
        this.photo = 1;

        this.setPhoto = function (clickedPhoto) {
            this.photo = clickedPhoto;
        };

        this.active = function (givePhoto) {
            return this.photo === givePhoto;
        };

        this.light = false;

        this.onlight = function (onOf) {
            this.light = onOf;
        };

        this.box = function (boxon) {
            return this.light === boxon;
        };

    });

    route.controller('TabController', function () {
        this.tab = 1;

        this.setTab = function (clickedTab) {
            this.tab = clickedTab;
        };

        this.active = function (giveTab) {
            return this.tab === giveTab;
        };
    });

    route.directive('cartTable', function () {
        return {
            restrict: 'A',
            template: '<div ng-cartTable></div>',
            transclude: true

        };
    });

})();
