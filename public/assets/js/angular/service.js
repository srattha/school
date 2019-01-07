app.service('dataService', function ($http) {
    return {
        getData: function (url) {
            return $http.get(API_URL + url).then(function (response) {
                return response;
            }, function (error) {
                return error
            });
        },
        postData: function (url, jsondata) {
            let first = true;
            return $http.post(API_URL + url, jsondata).then(function (response) {
                return response;
                
            }, function (error) {
                if(first){
                    console.log("%c    Internal Server Error 500 call again    ",'background: #f44336; color: #fff')
                    first = false;
                    return $http.post(API_URL + url, jsondata).then(function (response) { console.log("%c    Call service again Success!!    ",'background: #00e207; color: #fff');return response; });
                }else{
                    return error;
                }
            });
        },
        
        deleteData: function (url, json, id) {
            return $http.delete(API_URL+url+id).then(function (response) {
                return response;
            }, function (error) {
                return error
            });


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

app.filter('diffDate', function () {
    return function (enddate) {
        console.log(enddate)
        if(enddate){
            const end = new Date(enddate);
            const today = new Date();
            let timeDiff = Math.abs(end.getTime() - today.getTime());
            let delta = Math.ceil(timeDiff / 1000); 
            let days = Math.floor(delta / 86400);
            delta -= days * 86400;

            // calculate (and subtract) whole hours
            let hours = Math.floor(delta / 3600) % 24;
            delta -= hours * 3600;

            // calculate (and subtract) whole minutes
            let minutes = Math.floor(delta / 60) % 60;
            delta -= minutes * 60;
            if(delta <= 0 ){
                return "หมดเวลาแล้ว";
            }
            return days+"D "+hours+"H "+minutes+"M";
        }else {
            return "ไม่มี";
        }
        
    };
})

app.directive('validateForm',function($rootScope){
    return {
        require: 'ngModel',
        link: function (scope, element, attrs, ngModel) {
            ngModel.$parsers.push(function (val) {
                console.log(val)
                console.log($rootScope.validForm)
                if($rootScope.validForm){
                    if($rootScope.validForm.indexOf(attrs.ngModel) < 0){
                        $rootScope.validForm.push(attrs.ngModel)
                    }
                }else{
                    $rootScope.validForm = [];
                    $rootScope.validForm.push(attrs.ngModel)
                }
                
                if (val) {
                    element.parent('.has-feedback').removeClass('has-error');
                    element.parent('.has-feedback').addClass('has-success');
                    element.next('.form-control-feedback').children().addClass('icon-checkmark-circle');
                    element.next('.form-control-feedback').children().removeClass('icon-cancel-circle2');
                }else{
                    $('.enter').prop('disabled',true)
                    element.parent('.has-feedback').removeClass('has-success');
                    element.parent('.has-feedback').addClass('has-error');
                    element.next('.form-control-feedback').children().removeClass('icon-checkmark-circle');
                    element.next('.form-control-feedback').children().addClass('icon-cancel-circle2');
                }
                if(!ArrayxArray($rootScope.validForm,$rootScope.formRequired) || !val){
                    $('.enter').prop('disabled',true)
                }else{
                    $('.enter').prop('disabled',false)
                }
                return val;
            });
            
        }
    };

    function ArrayxArray(zx,asd){
        for(x in zx){
            if(asd.indexOf(zx[x]) > 0){
                return true;
            }
        }
        return false;
    }
})

