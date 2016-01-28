var Store = angular.module("Store", ['ui.bootstrap']);

Store.controller('StoreController', ['$http', '$scope', function($http, $scope) {
    $scope.query ="";
    $scope.myURL = "https://www.googleapis.com/customsearch/v1";

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

    $scope.pagesCount = function(resultNum){  //function that return total number of pages to display
        return Math.floor(resultNum / 10);
    }
    $scope.pagesNumber = 0;





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
    $scope.pagesNumArr = [];


    //$scope.getRequest = function() {
    //    $scope.queryObj.q = $scope.query;
    //    $http({
    //        method: 'GET',
    //        url: $scope.URL,
    //        params: $scope.queryObj
    //    }).then(function successCallback(response) {
    //        $scope.searchResult = response.data.items;
    //        console.log(response.data.items);
    //        $scope.haveResults = true;
    //        $scope.pagesNumber = pagesCount(response.data.queries.totalResults);
    //        console.log(pagesNumber);
    //        for (var i = 0; i < pagesNumber; i++)
    //        {$scope.pagesNumArr.push(i);
    //        }
    //        $scope.nextQuery = response.data.queries.nextPage;
    //    }, function errorCallback(response) {
    //        $scope.searchResult = response.data.error();
    //    });
    //};


    //$scope.callNext = function(pgnumber){
    //
    //    pgnumber *= 10;
    //    var myurl = 'https://www.googleapis.com/customsearch/v1?' +
    //    'googlehost=google.co.uk&safe=medium&searchType=image&num=8&start='+pgnumber+'&' +
    //    'key=AIzaSyCwA35ibvlnqrIbjGQepRtBVWJNHB3hMdA&cx=010146182105979843094:z2dcm8ayrqu&q=';
    //    $http.get(myurl + $scope.query).success(function(data){
    //        $scope.searchResult = response.data.items;
    //        // $http.get('scripts/json/temporary-google-data.json').success(function(data){
    //        // 	$scope.results = data.items;
    //    })
    //};
    //
    //$scope.callPrevious= function(){
    //
    //    $scope.queryObj.start-= 10;
    //    $scope.
    //
    //    $http({
    //        method: 'GET',
    //        url: $scope.URL,
    //        params: $scope.queryObj
    //    }).then(function successCallback(response) {
    //        $scope.searchResult = response.data.items;
    //        console.log(response.data.items);
    //        $scope.haveResults = true;
    //
    //
    //
    //    }, function errorCallback(response) {
    //        //$scope.searchResult = response.data.error();
    //    });
    //
    //
    //
    //}

    //$scope.filteredTodos = []
    //    ,$scope.currentPage = 1
    //    ,$scope.numPerPage = 10
    //    ,$scope.maxSize = 5;
    //
    //$scope.makeTodos = function() {
    //    $scope.todos = [];
    //    for (i=1;i<=1000;i++) {
    //        $scope.todos.push({ text:'todo '+i, done:false});
    //    }
    //};
    //$scope.makeTodos();
    //
    //$scope.numPages = function () {
    //    return Math.ceil($scope.todos.length / $scope.numPerPage);
    //};
    //
    //$scope.$watch('currentPage + numPerPage', function() {
    //    var begin = (($scope.currentPage - 1) * $scope.numPerPage)
    //        , end = begin + $scope.numPerPage;
    //
    //    $scope.filteredTodos = $scope.todos.slice(begin, end);
    //});

    $scope.pgnumbers = [1, 9, 17, 25, 33, 41, 49, 57, 65, 73];
    $scope.pageNumbers = [];
    $scope.totalResults=0;
    $scope.results = [];

    $scope.getResults = function(pgnumber){
        var url = 'https://www.googleapis.com/customsearch/v1?' +
            'googlehost=google.co.uk&safe=medium&searchType=image&num=8&start='+pgnumber+'&' +
            'key=AIzaSyAfv88ge0srbdRAMM92WpZfYhSFc0IDcRY&cx=011106400896487923477:vutdejdv5t0&q=';
        $http.get(url + $scope.query + "'").success(function(data){
            $scope.results = data.items;
            $scope.haveResults = true;
            //$scope.totalResults = data.searchInformation.totalResults;
            //
            //for (var i = 0; i < $scope.totalResults; i++)
            //{
            //    $scope.pageNumbers.push(i);
            //}



        })
    };









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


Store.controller('TodoController', function($scope) {
    $scope.filteredTodos = []
        ,$scope.currentPage = 1
        ,$scope.numPerPage = 10
        ,$scope.maxSize = 5;

    $scope.makeTodos = function() {
        $scope.todos = [];
        for (i=1;i<=1000;i++) {
            $scope.todos.push({ text:'todo '+i, done:false});
        }
    };
    $scope.makeTodos();

    $scope.numPages = function () {
        return Math.ceil($scope.todos.length / $scope.numPerPage);
    };

    $scope.$watch('currentPage + numPerPage', function() {
        var begin = (($scope.currentPage - 1) * $scope.numPerPage)
            , end = begin + $scope.numPerPage;

        $scope.filteredTodos = $scope.todos.slice(begin, end);
    });
});
