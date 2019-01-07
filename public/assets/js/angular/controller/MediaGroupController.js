app.controller('MediaGroupController', function ($scope, $http, dataService) {
    function list(){
        dataService.postData("/api/v1/media_group").then(res => {
         
            $scope.lists = res.data.status.result;
            
        })
    }
    function init() {
        list();
    }
     $scope.enter = id =>{
        window.location.href = "/media?media_group_id="+id;
    }

    init();
})