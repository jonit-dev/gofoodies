app.controller('CreateAccountCtrl', function ($scope, $http, CONFIG, $timeout) {

        /*
        |--------------------------------------------------------------------------
        | INITIAL VARIABLES AND SETTINGS
        |--------------------------------------------------------------------------
        |
        */

        $scope.provinces = [];
        $scope.cities = [];
        $scope.user = {
            province: 2,
            city: 0
        };

        var apiURL = CONFIG.BASE_URL + '/api';

        // lets load our province list

        $scope.loadProvinces = function () {
            $http.get(apiURL + '/provinces').then(function (response) {

                $scope.provinces = response.data;

                // set default option as British columbia
                $scope.user.province = $scope.provinces[1];

                // now lets load the concerning cities

                $scope.loadCities($scope.user.province.abbrev);


            }, function (error) {
                console.log(error);
            });
        }


        $scope.loadCities = function (province) {

            $timeout(function () {
                $http.get(apiURL + '/cities/' + province).then(function (response) {

                    console.log($scope.user);
                    console.log('Trying to load cities from...'+province);
                    console.log(response.data);

                    $scope.cities = response.data;


                    // goto first element
                    $scope.user.city = $scope.cities[0];




                }, function (error) {
                    console.log(error);
                });
            }, 200);


        }


    }
)
;