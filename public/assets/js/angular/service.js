app.service('dataService', function ($http) {
    return {
        getData: (url) => {
            return $http.get(API_URL + url);
        },
        postData: (url, jsondata) => {
            let first = true;
            return $http.post(API_URL + url, jsondata).then(response => response, error => {
                if(first){

                    first = false;
                    return $http.post(API_URL + url, jsondata).then(response => { console.log("%c    Call service again Success!!    ",'background: #00e207; color: #fff');return response; });
                }else{
                    return error;
                }
            });
        },
        putData: (url, jsondata) => {
            return $http.put(API_URL + url, jsondata);
        },
        deleteData: (url, json) => {
            return $http.post(`${API_URL + url}/delete`,json);
        }
    }
})

app.filter('convertToDate', function () {
    return function (str) {
        return new Date(str);
    };
})

app.directive('convertToNumber', function () {
    return {
        require: 'ngModel',
        link: function (scope, element, attrs, ngModel) {
            ngModel.$parsers.push(function (val) {
                return val != null ? parseInt(val, 10) : null;
            });
            ngModel.$formatters.push(function (val) {
                return val != null ? '' + val : null;
            });
        }
    };
});

