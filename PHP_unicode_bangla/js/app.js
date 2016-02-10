var app = angular.module('myFirstApp',[]);

app.controller('GetCustomers',function($scope,$http){
    getAllData();
	function getAllData(){
	   $http.get('http://localhost/PHP_unicode_bangla/all.php').success(function(data){
			$scope.profiles= data;
	   });
	}
	
});
