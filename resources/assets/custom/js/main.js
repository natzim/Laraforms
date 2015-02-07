angular.module('forms', [])
    .controller('TestCtrl', function TestCtrl($http) {
        var test = this;

        $http.get('/api/account/authcheck').success(function (data) {
            test.isSignedIn = data;
        });

    })