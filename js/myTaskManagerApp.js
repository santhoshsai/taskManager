var myTaskManagerApp = angular.module('myTaskManagerTabsApp',['ngRoute']);

myTaskManagerApp.config(function($routeProvider) {
        $routeProvider
            // route for the home page
            .when('/taskList', {
                templateUrl : 'app/taskList.html',
                controller  : 'taskLists'
            })

            // route for the about page
            .when('/createTask', {
                templateUrl : 'app/createTask.html'
               // controller  : 'aboutController'
            })

            // route for the contact page
            .when('/manageTask', {
                templateUrl : 'app/manageTask.html'
               // controller  : 'contactController'
            }).
				otherwise({redirectTo: '/taskLists'})
                });
	myTaskManagerApp.controller('myTabs',function($scope, $location){
				    $scope.isActive = function (viewLocation)
					{
						console.log(viewLocation);
						return viewLocation === $location.path();
					};
				});
    myTaskManagerApp.controller('taskLists',function($scope,$http){
				$http.get('./php/myDetails.php').
				then(function(response) {
					$scope.myData = response.data;
				    $scope.myClicks = function(event){
							alert('test');
						}     
				});
		});
