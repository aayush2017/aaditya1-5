	// create the module and name it scotchApp
	var scotchApp = angular.module('scotchApp', ['ngRoute']);

	// configure our routes
	scotchApp.config(function($routeProvider) {
		$routeProvider

			// route for the home page
			.when('/', {
				templateUrl : 'pages/home.html',
				controller  : 'mainController'
			})
			// route for the portfolio page
			.when('/portfolio', {
				templateUrl : 'pages/portfolio.html',
				controller  : 'portfolioController'
			})
			// route for the about page
			.when('/about', {
				templateUrl : 'pages/about.html',
				controller  : 'aboutController'
			})

			// route for the contact page
			.when('/contact', {
				templateUrl : 'pages/contact.html',
				controller  : 'contactController'
			});
	});

	// create the controller and inject Angular's $scope
	scotchApp.controller('mainController', function($scope) {
		// create a message to display in our view
		$scope.message = 'Everyone come and see how good I look!';
		$scope.menuItems = [{"location":"#", "name":"Main" }, 
		{"location":"#portfolio", "name":"Portfolio" }, {"location":"#about", "name":"About" }, {"location":"#contact", "name":"Contact" }];
		$scope.activeMenu = $scope.menuItems[0];
		$scope.setActive = function(menuItem) {
		$scope.activeMenu = menuItem
		}
	});

	scotchApp.controller('portfolioController', function($scope) {
		$scope.message = 'Look! I am an portfolio page.';
	});
	scotchApp.controller('aboutController', function($scope) {
		$scope.message = 'Look! I am an about page.';
	});

	scotchApp.controller('contactController', function($scope) {
		$scope.message = 'Contact us! JK. This is just a demo.';
	});