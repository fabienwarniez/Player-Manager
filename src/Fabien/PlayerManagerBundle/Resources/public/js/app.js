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
        $scope.playerSelected = false;
        $scope.imageAvailable = true;
        $scope.playerId = -1;
        $scope.playerFirstName = "";
        $scope.playerLastName = "";
        $scope.playerNumber = "";
        $scope.playerPosition = "";

        this.playerSelected = function selectPlayer(playerId)
        {
            // show loading GIF

            $http({method: 'GET', url: rootURL + 'api/get-player-profile/' + playerId})
                .success(function(data, status, headers, config)
                {
                    if (status = 200)
                    {
                        $scope.playerSelected = true;
                        $scope.playerId = data.id;
                        $scope.playerFirstName = data.first_name;
                        $scope.playerLastName = data.last_name;
                        $scope.playerNumber = data.number;
                        $scope.playerPosition = data.position;
                        $scope.playerPictureFileName = data.picture_file_name;
                        $scope.imageAvailable = data.picture_file_name != undefined;
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
