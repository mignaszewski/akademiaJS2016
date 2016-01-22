var aom = []; //array of modules
angular.module("Store", aom).
controller('StoreController', function($scope) {
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

    $scope.addNote = function(){
        $scope.notesCollection.push(this.note);
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



});

