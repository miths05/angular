<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>AngularJS Database Display Example</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>
<body>
<div ng-app="myApp" ng-controller="customersCtrl">
<table border="1">
<tr><th>Name of Student</th><th>Roll No</th><th>Phone No</th><th>Grade</th></tr>
<tr ng-repeat="x in data">
<td>{{ x.Name }}</td>
<td>{{ x.Rollno }}</td>
<td>{{ x.Phone }}</td>
<td>{{ x.Grade }}</td>
</tr>
</table>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
$http.get('studentdata.php')
.then(function (response) { $scope.data = response.data.records; });
});
</script>
</body>
</html>