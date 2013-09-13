App = angular.module('App', [])

### *******************************************************************************************************************
      Tracks
******************************************************************************************************************* ###
App.controller 'TracksController', ($scope, $http, $timeout) ->
	$scope.mensaje = {}

	$scope.getMedias = ->
		aux = []
		angular.forEach $scope.added, (video, index) ->
			aux.push video.Track.entryId
		angular.forEach $scope.medias, (media, index) ->
			if media.id in aux
				$scope.medias.splice(index, 1)
		$scope.medias

	$scope.select = (media) ->
		$scope.entryId = media.id	
		$scope.selected = media
  
	$scope.submit = (event) ->
		event.preventDefault()
		window.location = '#'
		$scope.mensaje.text = 'Enviando el formulario...'
		$scope.mensaje.tag = 'info'
		if $scope.formulario.$valid
			$.post('/cargador', $('#formulario').serialize())
				.error () ->
					$scope.mensaje.text = 'Ocurrió un error enviando el formulario. Por favor, verifique los datos e intente nuevamente.'
					$scope.mensaje.tag = 'danger'
					$scope.$apply()
				.success (data) ->
					$scope.mensaje.text = 'Formulario enviado correctamente.'
					$scope.mensaje.tag = 'success'
					$('#formulario')[0].reset()
					$scope.$apply()
					$timeout () -> 
						$scope.mensaje.text = ''
					, 5000

	$scope.init = ->
		$scope.getMedias()

	$timeout () -> 
		$scope.init()
	, 200