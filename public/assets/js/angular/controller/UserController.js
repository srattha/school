app.controller('UserController', function ($scope, $http, dataService) {
    $scope.range = [];
    $scope.currentPage = 1;
  function list(url){
    dataService.getData(url).then(res => {
      $scope.lists = res.data.data;
        $scope.currentPage = res.data.current_page;
        $scope.pageStartFrom = res.data.from;
       var pages = [];
        for(var i=1;i<=res.data.last_page;i++) {
          pages.push({page:i,url:"/api/admin-user?page="+i});
          if(pages.length == 10){
            break;
          }
        }
        $scope.range = pages;
      console.log($scope.range)
    })
  }

  $scope.changePage = function(url){
      list(url);
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
     var update = {"id":data.id,"email":data.email,
     "name":data.name
   }
   var add = {"email":data.email,
   "name":data.name,"password":data.password
 }

}
if (data.id) {
  dataService.putData("/api/admin-user-update",update).then(res=>{
   list();
   $('#form').modal('hide');

 });
}else {
  dataService.putData("/api/admin-user-add",add).then(res=>{
   list();
   $('#form').modal('hide');

 });
}


}

$scope.delete = function (id) {
  swal({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then(function(isConfirm) {
    if (isConfirm) {
      dataService.postData("/api/admin-user-delete",{id}).then(res=>{
       swal(
        'Deleted!',
        'Your file has been deleted.',
        'success'
        );
        list();
     });

    }
  })

  // fn.alertDelete("/api/admin-user-delete",{id},res => {

  //     list();

  // })
}


function init() {
  list("/api/admin-user");
}




init();
})
