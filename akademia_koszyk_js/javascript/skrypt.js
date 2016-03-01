var routing = angular.module('appRouting', ['ngRoute']);

appRouting.config(function($routing)
{
	$routing
	
	.when('/', 
	{
		templateUrl: 'pages/index.php',
		controller: 'stronaStartowa'
	})
});