(function() {
  var App;

  App = angular.module('App', []);

  /* *******************************************************************************************************************
        Tracks
  *******************************************************************************************************************
  */


  App.controller('TracksController', function($scope, $http) {
    return $scope.select = function(media) {
      return $scope.entryId = media.id;
    };
  });

}).call(this);
