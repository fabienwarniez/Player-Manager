/**
 * Created by fwarniez on 2014-03-02.
 */

angular.module('player-manager', []).config(
    function($interpolateProvider)
    {
        $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
    }
);
