var powerPlantMall = angular.module('powerPlantMall', [''])
    .factory('httpRequestInterceptor', function () {
        return {
            request: function (config) {
                config.headers['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');
                return config;
            }
        };
    });
//# sourceMappingURL=powerplantmall.js.map
