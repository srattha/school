app.controller('NewsController', function ($scope, $http, dataService) {
  function list(){
    // dataService.postData("/api/admin-user").then(res => {

    //   $scope.lists = res.data.status.result;

    //   console.log($scope.lists)
    // });
  }
  $scope.modal = function (data) {
    if (data) {
      $scope.form = data;

    }else {
      $scope.form = {};
    }
    $("#form").modal("show");
  }

  $scope.submit = function (data) {
   console.log(data)

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
}


function init() {
  list();
}




init();
})
