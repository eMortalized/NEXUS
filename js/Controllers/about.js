var app = angular.module('em', ['ngRoute','ngAnimate']);

app.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.when('/', {
        templateUrl: 'listBlogs.html',
        controller: 'listBlogs'
    }).when('/Story/:id', {
        templateUrl: 'viewBlog.html'
    }).otherwise({
        templateUrl:'404.html'
    });

}]);

app.controller('aboutController', ['$scope', function ($scope) {
    $scope.test = "hiiiiiiii";
}]);

app.controller('listBlogs', ['$scope', function ($scope) {
}]);