var closeModalDialog = function () {
    $('.modal').modal('hide');
};


angular.module('powerPlantMall', ['ngRoute'])
    .factory('httpRequestInterceptor', function () {
        return {
            request: function (config) {
                config.headers['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');
                return config;
            }
        };
    })
    .config(['$httpProvider', '$routeProvider', function ($httpProvider, $routeProvider) {
        $httpProvider.interceptors.push('httpRequestInterceptor');
        $routeProvider
            .when('/', {
                templateUrl: '/merchantList',
                controller: 'merchantController',
                resolve: {
                    // I will cause a 1 second delay
                    delay: function ($q, $timeout) {
                        var delay = $q.defer();
                        $timeout(delay.resolve, 1000);
                        return delay.promise;
                    }
                }
            })
            .when('/merchants/:merchantId/:merchantName', {
                templateUrl: '/productList',
                controller: 'productController',
                resolve: {
                    // I will cause a 1 second delay
                    delay: function ($q, $timeout) {
                        var delay = $q.defer();
                        $timeout(delay.resolve, 1000);
                        return delay.promise;
                    }
                }
            })
            .when('/news', {
                templateUrl: '/news',
                controller: 'newsController',
                resolve: {
                    // I will cause a 1 second delay
                    delay: function ($q, $timeout) {
                        var delay = $q.defer();
                        $timeout(delay.resolve, 1000);
                        return delay.promise;
                    }
                }
            })
            .when('/articles', {
                templateUrl: '/articles',
                controller: 'productController',
                resolve: {
                    // I will cause a 1 second delay
                    delay: function ($q, $timeout) {
                        var delay = $q.defer();
                        $timeout(delay.resolve, 1000);
                        return delay.promise;
                    }
                }
            })
            .otherwise({redirectTo: '/'});
    }])
    .service('powerPlantService', ['$http', function ($http) {

        this.getData = function (apiService) {
            return $http.get(apiService);
        };

        this.updateDataById = function (apiService, id, data) {
            return $http.put(apiService + id, data);
        };

        this.postData = function (apiService, data) {
            return $http.post(apiService, data);
        };

        this.deleteData = function (apiService, id) {
            return $http.delete(apiService + id);
        };
    }])
    .controller('merchantController', ['$scope', 'powerPlantService', function ($scope, powerPlantService) {

        var apiService = 'api/v1/merchants/';

        $scope.merchants = {};
        $scope.merchant = {};
        $scope.products = {};

        var getMerchant = function () {
            powerPlantService.getData(apiService).then(function (response) {
                $scope.merchants = response.data;
                $scope.messageErrors = {};
            }, function (response) {
                $scope.merchants = response.data || 'Request failed';
                $scope.status = response.status;
            });
        };

        $scope.getProductsByMerchantId = function (merchantId) {
            if (angular.isUndefined(merchantId) == false) {
                powerPlantService.getData(apiService + merchantId + '/products/').then(function (response) {
                    $scope.products = response.data;
                    $scope.messageErrors = {};
                    console.log(response.data);
                }, function (response) {
                    $scope.products = response.data || 'Request failed';
                    $scope.status = response.status;
                });
            }
        };

        $scope.addMerchant = function () {
            powerPlantService.postData(apiService, $scope.merchant).then(function (response) {
               $scope.merchants.merchants.push(response.data.merchants);
                closeModalDialog();
            }, function (response) {
                $scope.messageErrors = response.data || 'Request failed';
                $scope.status = response.status;
            });
        };

        $scope.deleteMerchant = function (id) {
            powerPlantService.deleteData(apiService, id).then(function () {
                var index = $scope.merchants.merchants.indexOf($scope.merchant);
                $scope.merchants.merchants.splice(index,1);
                closeModalDialog();
            }, function (response) {
                $scope.status = response.status;
            });
        };

        $scope.getMerchantObj = function (merchants) {
            $scope.merchant = merchants;
        };

        $scope.updateMerchantById = function (id) {
            powerPlantService.updateDataById(apiService, id, $scope.merchant).then(function () {
                closeModalDialog();
            }, function (response) {
                $scope.status = response.status;
                $scope.messageErrors = response.data || 'Request failed';
            });
        };
        getMerchant();
    }])
    .controller('productController', ['$scope', 'powerPlantService', '$routeParams', '$controller', function ($scope, powerPlantService, $routeParams, $controller) {

        var apiService = 'api/v1/products/';
        $scope.params = $routeParams;

        $scope.products = {};
        $scope.product = {};

        angular.extend(this, $controller('merchantController', {$scope: $scope}));

        $scope.addProduct = function () {

            powerPlantService.postData(apiService, $scope.product).then(function (response) {
                $scope.products.products.push(response.data.products);
                closeModalDialog();

            }, function (response) {
                $scope.messageErrors = response.data || 'Request failed';
                $scope.status = response.status;
            });
        };

        $scope.deleteProduct = function (id) {
            powerPlantService.deleteData(apiService, id).then(function () {
                var index = $scope.products.products.indexOf($scope.product);
                $scope.products.products.splice(index,1);
                closeModalDialog();
            }, function (response) {
                $scope.status = response.status;
            });
        };

        $scope.getProductObj = function (products) {
            $scope.product = products;
        };

        $scope.getProducts = function () {
            powerPlantService.getData(apiService).then(function (response) {
                $scope.products = response.data;
                $scope.messageErrors = {};
            }, function (response) {
                $scope.products = response.data || 'Request failed';
                $scope.status = response.status;
            });
        };

        $scope.updateProductById = function (id) {
            powerPlantService.updateDataById(apiService, id, $scope.product).then(function () {
                closeModalDialog();
            }, function (response) {
                $scope.status = response.status;
                $scope.messageErrors = response.data || 'Request failed';
            });
        };
        $scope.getProductsByMerchantId($scope.params.merchantId);
    }])
    .controller('newsController', ['$scope','$controller', function ($scope,$controller) {

        angular.extend(this, $controller('productController', {$scope: $scope}));
        console.log('asdasd');
        $scope.getProducts();
    }]);

//# sourceMappingURL=powerplantmall.js.map
