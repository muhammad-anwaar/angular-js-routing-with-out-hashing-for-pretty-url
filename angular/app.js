var app = angular.module("routApp", ['ngResource', 'ngRoute']);

app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {

	$routeProvider
		.when('/', {

			templateUrl: 'template/home.php'
		})
		.when('/home', {
			templateUrl: 'template/home.php'
		})
		.when('/news', {
			templateUrl: 'template/news.php'
		})
		.otherwise({
			redirectTo: "/"
		});

	 $locationProvider.html5Mode(true); //activate HTML5 Mode

}]);