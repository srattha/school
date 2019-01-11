app.controller('NewsController', function ($scope, $http, dataService) {
 function list(url){
  dataService.getData(url).then(res => {
   $scope.lists = res.data.data;
   $scope.currentPage = res.data.current_page;
   $scope.pageStartFrom = res.data.from;
   var pages = [];
   for(var i=1;i<=res.data.last_page;i++) {
    pages.push({page:i,url:"/api/admin-news?page="+i});
    if(pages.length == 10){
     break;
    }
   }
   $scope.range = pages;
  })
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

  var update = {"id":data.id,"date":data.date,"news":data.news}
  var add = {"date":data.date,"news":data.news}
  if (data.id) {
   dataService.putData("/api/admin-news-update",update).then(res=>{
    console.log(res)
    if (res.data.status.result) {
     swal(
      'Good job!',
      'You clicked the button!',
      'success'
      )
     list("/api/admin-news");
     $('#form').modal('hide');
    }

   });
  }else {
   dataService.putData("/api/admin-news-add",add).then(res=>{
    if (res.data.status.result) {
     swal(
      'Good job!',
      'You clicked the button!',
      'success'
      )
     list("/api/admin-news");
     $('#form').modal('hide');
    }
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
    dataService.postData("/api/admin-news-delete",{id}).then(res=>{
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
  list("/api/admin-news");
 }




 init();
})
