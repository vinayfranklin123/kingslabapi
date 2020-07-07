
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DBPHP</title>	
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 align="center">Data Insertion</h1>
	<div ng-app="insert" ng-controller="controller">
		<label>Name</label><input type="text" name="name" ng-model="name" class="form-control"><br/>
		<label>Email</label><input type="text" name="email" ng-model="email" class="form-control"><br/>
		<input type="time" name="time" ng-model="time" step="1">	       
		<input type="submit" name="insert" class="btn btn-danger" ng-click="insert()" value="Insert">

	</div>
</div>	

<script>
	var app = angular.module("insert",[]);
	app.controller("controller", function($scope, $http){
		$scope.insert = function(){
			$http.post(
				"insert.php",
				{'name':$scope.name, 'email':$scope.email, 'time':$scope.time}
			    ).success(function(data){
					$scope.name = null;
					$scope.email = null;
					$scope.time = null;
					
			});
		}
	});
</script>
</body>
</html>
