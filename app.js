var Store = angular.module("Store", ['ui.bootstrap']);

Store.controller('StoreController', ['$http', '$scope', function ($http, $scope) {
    $scope.query = "";





    $scope.results = [];
    $scope.currentPage = 1
        , $scope.numPerPage = 10
        , $scope.total = 0,
        $scope.maxSize = 5;


    $scope.getResults = function (pgnumber) {
        var url = 'https://www.googleapis.com/customsearch/v1?' +
            'googlehost=google.co.uk&safe=medium&searchType=image&num=8&start=' + pgnumber + '&' +  //get query
            'key=AIzaSyCOnaiRZtq2zfeTQGAdrFDREUciHckJ3mU&cx=005170073531244001680:l7l4mlzvw0y&q=';
        $http.get(url + $scope.query + "'").success(function (data) {
            $scope.results = data.items;  //results = searched items
            $scope.haveResults = true;  //hide and show certain elements on index.html
            $scope.total = data.searchInformation.totalResults;  //display total amount of results
            console.log(data.items[2].title);  //a checkout, if everything is going well

        })
    };


    $scope.numPages = function () {
        return Math.ceil($scope.total / $scope.numPerPage); // return  number of all pages
    };

    $scope.$watch('currentPage + numPerPage', function () {


        if ($scope.query)
            $scope.getResults($scope.currentPage); //call getResult function every time pagination elements is clicked


    });


    $scope.gallery = ['first.jpg', 'second.jpg', 'third.jpg'];
    $scope.items = 3;
    $scope.current = 'second.jpg';
    $scope.myArr = [1, 2, 3];

    $scope.toggle = function (newPic) {
        $scope.current = newPic;
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


    $scope.toggle1 = function () {
        this.image = 'first.jpg';
    };
    $scope.toggle2 = function () {
        this.image = 'second.jpg';
    };
    $scope.note = {};
    $scope.resp = {};

    $scope.addNote = function () {
        $scope.notesCollection.push(this.note);
    }



    //$scope.getResults = function (pgnumber) {
    //    var url = 'https://www.googleapis.com/customsearch/v1?' +
    //        'googlehost=google.co.uk&safe=medium&searchType=image&num=8&start=' + pgnumber + '&' +
    //        'key=AIzaSyCwA35ibvlnqrIbjGQepRtBVWJNHB3hMdA&cx=010146182105979843094:z2dcm8ayrqu&q=';
    //    $http.get(url + $scope.query + "'").success(function (data) {
    //        $scope.results = data.items;
    //        $scope.haveResults = true;
    //        //$scope.totalResults = data.searchInformation.totalResults;
    //        //
    //        //for (var i = 0; i < $scope.totalResults; i++)
    //        //{
    //        //    $scope.pageNumbers.push(i);
    //        //}
    //
    //
    //    })
    //};


    $scope.notesCollection = [
        note1 = {
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



