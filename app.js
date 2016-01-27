var aom = []; //array of modules
angular.module("Store", []).
controller('StoreController', ['$http', '$scope', function($http, $scope) {
    $scope.query ="";


    $scope.URL = "https://www.googleapis.com/customsearch/v1";


    $scope.queryObj = {
        key: "AIzaSyAfv88ge0srbdRAMM92WpZfYhSFc0IDcRY",
        cx: "011106400896487923477:vutdejdv5t0",
        q: "",
        searchType: "image",
        count: 220
    }

    $scope.searchResult =[];
    $scope.queryObj.startIndex = 1;
    $scope.resultCount = 0;

    $scope.pagesCount = function(resultNum){
        return Math.floor(resultNum / 10);
    }


    $scope.currentPage = 1;




    $scope.gallery = ['first.jpg', 'second.jpg', 'third.jpg'];
    $scope.items = 3;
    $scope.current = 'second.jpg';
    $scope.myArr = [1, 2, 3];



    $scope.toggle = function(newPic){
    $scope.current =newPic;
};



    $scope.products = [
        {
            name: 'Sweater',
            price: 19,
           images: [
               'first.jpg', 'second.jpg', 'third.jpg']
        },
        {
            name: 'Shoe',
            price: 8,
           images: ['fourth.jpg', 'fifth.jpg', 'sixth.jpg']
        }
    ];

    $scope.image = 'third.jpg';



    $scope.toggle1 = function(){
            this.image= 'first.jpg';
        };
    $scope.toggle2 = function(){
        this.image= 'second.jpg';
    };
    $scope.note = {};
    $scope.resp = {};

    $scope.addNote = function(){
        $scope.notesCollection.push(this.note);
    }

    $scope.haveResults = false;


    $scope.getRequest = function() {

        $scope.queryObj.q = $scope.query;

        $http({
            method: 'GET',
            url: $scope.URL,
            params: $scope.queryObj
        }).then(function successCallback(response) {
            $scope.searchResult = response.data.items;
            console.log(response.data.items);
            $scope.haveResults = true;

            $scope.nextQuery = response.data.queries.nextPage;




        }, function errorCallback(response) {
            $scope.searchResult = response.data.error();
        });



    };


    $scope.callNext = function() {

        $scope.queryObj.start += 10;

            $http({
            method: 'GET',
            url: $scope.URL,
            params: $scope.queryObj
        }).then(function successCallback(response) {
            $scope.searchResult = response.data.items;
            console.log(response.data.items);
            $scope.haveResults = true;



        }, function errorCallback(response) {
            //$scope.searchResult = response.data.error();
        });


    }

    $scope.callPrevious= function(){

        $scope.queryObj.start-= 10;
        $scope.

        $http({
            method: 'GET',
            url: $scope.URL,
            params: $scope.queryObj
        }).then(function successCallback(response) {
            $scope.searchResult = response.data.items;
            console.log(response.data.items);
            $scope.haveResults = true;



        }, function errorCallback(response) {
            //$scope.searchResult = response.data.error();
        });



    }









    $scope.notesCollection = [
        note1= {
            title: "My opinion",
            description: "I'm very disappointed with this product",
            author: "Jeremy Clarkson"
        },
        note2 = {
            title: "...",
            description: "I would buy this product once again if only it was available....",
            author: "Richard Hammond"
        },
        note3 = {
            title: "This is what I think",
            description: "It's not easy to put here reasonable advice, but overall product is  worth buying it",
            author: "James May"
        },
        note4 = {
            title: "One big 'NO'",
            description: "It's not easy to put here reasonable advice, but overall product is  worth buying it" +
            "A long OPTIONAL description",
            author: "James Bond"
        }
    ];



}]);

