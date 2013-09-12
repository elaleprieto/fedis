App = angular.module('App', [])

### *******************************************************************************************************************
      Tracks
******************************************************************************************************************* ###
App.controller 'TracksController', ($scope, $http) ->
	# $scope.medias = [{name:'John', age:25, gender:'boy'},{name:'Jessie', age:30, gender:'girl'}]

	$scope.select = (media) ->
		$scope.entryId = media.id	
  
