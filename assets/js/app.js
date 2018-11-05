'use strict';


let RPG = angular.module('RPG', [])

.controller("mapController", function($scope) {

    $scope.character = {
        map_position: 1 // start à 1
    };


    $scope.helloTo = {};
    $scope.helloTo.title = "AngularJS";


    $scope.player = {
        character_class : "",
        items: [

        ]
    }


});