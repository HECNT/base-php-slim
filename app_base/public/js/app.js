var app = angular.module('home', [])
var url = 'http://localhost:8080'
app.controller('Ctrl', function ($scope, $http){

  // SERVICES INIT

  $http.get('http://localhost:8080/conn')
  .success(function(result){
    $scope.zona = result
    console.log(result,'result');
  })

  // GENERAL

  // EDIT REGISTRER
  $scope.btnEditar = function (item) {
    var d = item.data
    location.href = url + '/edit?id=' + d.zona_id
  }
})
