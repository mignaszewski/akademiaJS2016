var app = angular.module('sklep', []);
	
app.config(['$routeProvider', function($routeProvider) {
    $routeProvider.

      when('/home', {
	templateUrl: 'index_pokaz.php'
      }).

      when('/jajka', {
	templateUrl: 'jajka.php'
      }).

      when('/origami', {
	templateUrl: 'origami.php'
      }).

      when('/szutasz', {
	templateUrl: 'szutasz.php'
      }).

      when('/szydelko', {
	templateUrl: 'szydelko.php'
      }).

      when('/forma%203D', {
	templateUrl: 'forma.php'
      }).

      otherwise({
	templateUrl: 'index_pokaz.php'
      });
}]);