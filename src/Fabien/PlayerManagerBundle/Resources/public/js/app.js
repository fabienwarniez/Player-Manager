/**
 * Created by fwarniez on 2014-03-02.
 */

rootURL = '/playermanager/web/app_dev.php/';

angular.module('player-manager', [])
    .config(function($interpolateProvider)
    {
        $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
    })
    .controller('TeamController', function($scope, $http)
    {
        $scope.playerId = -1;
        $scope.playerFirstName = "First Name";
        $scope.playerLastName = "";
        $scope.playerNumber = "";

        this.playerSelected = function selectPlayer(playerId, $scope)
        {
            // show loading GIF

            $http({method: 'GET', url: rootURL + 'api/get-player-profile/' + playerId})
                .success(function(data, status, headers, config)
                {
                    if (status = 200)
                    {
                        $scope.playerId = data.id;
                        $scope.playerFirstName = data.first_name;
                        $scope.playerLastName = data.last_name;
                    }
                    else
                    {
                        alert("The player profile could not be retrieved.");
                    }
                }).
                error(function(data, status, headers, config)
                {
                    alert("The server seems down.");
                });
        }
    });
