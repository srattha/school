app.controller('MediaController', function ($scope, $http, dataService) {
    
    $scope.media_group = media_group;
    console.log($scope.media_group)
    function list(){
        dataService.postData("/api/v1/media",{media_group_id: $scope.media_group.id}).then(res => {
            console.log(res)
            $scope.lists = res.data.status.result;
        })
    }

    function init() {
        list();
    }

    

init();
})