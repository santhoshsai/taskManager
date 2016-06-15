var myTaskManagerApp = angular.module('myTaskManagerTabsApp',['ngRoute']);

myTaskManagerApp.config(function($routeProvider) {
        $routeProvider.
            when('/taskList', {
	    templateUrl : 'app/taskList.html',
                controller  : 'taskLists'
            }).
            when('/createTask', {
                templateUrl : 'app/createTask.html'
               // controller  : 'aboutController'
            }).
            when('/manageTask', {
                templateUrl : 'app/manageTask.html'
               // controller  : 'contactController'
            }).
				otherwise({redirectTo: '/taskList'});
            });

	myTaskManagerApp.controller('myTabs',function($scope, $location){
				    $scope.isActive = function (viewLocation)
					{
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
				$scope.taskStatus = function(days){
					
					return (days > 10) ?"active":"danger";
				}
				$scope.statusIcon = function(days)
				{
						return (days > 0) ?"fa fa-check green":"fa fa-remove red";
					//{true:'fa fa-check', false:'fa fa-remove'}[{{tasklist.dateDiffInt}} > 0]
				}
				$scope.createTask = "ng-hide";	
				$scope.newTask = function(){
					if($scope.displayStatus)
					{
						$scope.createTask = "ng-show";
					}
					else
					{
						$scope.createTask = "ng-hide";
					}
				}
		});
