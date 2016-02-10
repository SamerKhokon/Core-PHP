var rootApp = angular.module('rootApp',['firstApp','secondApp']);

var firstApp = angular.module('firstApp',[]);
firstApp.controller(function($scope,$http) {
	$http.get('http://localhost/PHP_unicode_bangla/all.php').success(function(data){
	    $scope.profiles = data;
	});
});

var secondApp = angular.module('secondApp',[]);
secondApp.controller(function($scope,$http) {
	$http.get('http://localhost/PHP_unicode_bangla/all_hits.php').success(function(data){
	    $scope.url_hits = data;
	});
});