app.controller('UserController', function ($scope, $http, dataService) {
      function list(){
            dataService.postData("/api/admin-user").then(res => {

                  $scope.lists = res.data.status.result;

                  console.log($scope.lists)
           });
     }
     $scope.modal = function (data) {
            if (data) {
                  $scope.form = data;
                  $scope.form.password = '';
                  $scope.form.passwordConfirm = '';
           }else {
                  $scope.form = {};
           }
           $("#form").modal("show");
    }

    $scope.submit = function (data) {
     console.log(data)

     if($scope.form.password != $scope.form.passwordConfirm){
           swal(
                 'Error',
                 'รหัสไม่ตรงกัน!',
                 'error'
                 )
           return;
    }
    if ($scope.form.email == null) {
           swal(
                 'Error',
                 'ป้อน Email!',
                 'error'
                 )
           return;
    }else{
           var admin = {"id":data.id,"email":data.email,
           "name":data.name,"password":data.password,"passwordConfirm":data.passwordConfirm
    }
}

dataService.postData("/api/admin-user-add",admin).then(res=>{
       console.log(res);

});

}






function init() {
      list();
}




init();
})
