'use strict';


let RPG = angular.module('RPG', [])

.controller("mapController", function($scope) {
    $scope.helloTo = {};
    $scope.helloTo.title = "AngularJS";

    $scope.player = {
        character_class : "",
        items: [

        ]
    }


});