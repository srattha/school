
@extends('admin.master')
@section('title','User')

@section('css')
@endsection
@section('content')
<div ng-controller="UserController">
 <ol class="breadcrumb">
  <li class="breadcrumb-item">
   <a href="#">User</a>
 </li>
</ol>
<div class="card mb-3">
  <div class="card-header">
   <button type="button" class="btn btn-info" ng-click="modal()"><i class="fas fa-plus-square"></i> Create User</button></div>
   <div class="card-body">
    <div class="row">
       <div class="col-md-4">
      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
          </div>
          <input type="text" class="form-control" ng-model="query" placeholder="Search">
        </div>
      </div>
    </div>
    <div class="table-responsive">
     <table class="table table-bordered" width="100%" cellspacing="0">
      <thead>
       <tr>
        <th></th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Create Date</th>
        <th>Update Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat="u in lists | filter:query">
        <td>@{{$index+1}} </td>
        <td>@{{u.name}} </td>
        <td>@{{u.lastname}} </td>
        <td>@{{u.email}} </td>
        <td>@{{u.created_at | convertToDate | date:'dd MMM yyyy hh:mm a'}}</td>
        <td>@{{u.updated_at | convertToDate | date:'dd MMM yyyy hh:mm a'}}</td>
        <th>
         <a href="javascript:void(0)" ng-click="delete(u.id)" class="text-danger"><i class="fas fa-trash-alt"></i></a>
         <a href="javascript:void(0)" ng-click="modal(u)" class="text-danger"><i class="fas fa-edit"></i></a>
       </th>
     </tr>
   </tbody>
 </table>
</div>
<div >
  <ul class="pagination pagination-flat">
    <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
    <li ng-repeat="r in range" ng-class="{active : currentPage === @{{r.page}}}" ><button type="button" ng-click="changePage(r.url)" class="btn btn-primary btn-sm">@{{r.page}}</button></li>
    <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
  </ul>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="form">
 <div class="modal-dialog">
  <div class="modal-content">
   <form ng-submit="submit(form)">
    <!-- Modal Header -->
    <div class="modal-header">
     <h4 class="modal-title">User</h4>
     <button type="button" class="close" data-dismiss="modal">×</button>
   </div>

   <!-- Modal body -->
   <div class="modal-body">

     <div class="form-group">
      <div class="form-label-group">
       <input type="text" id="firstName" class="form-control" placeholder="First name" ng-model="form.name" required="required" autofocus="autofocus">
       <label for="firstName">First name</label>
     </div>
   </div>
   <div class="form-group">
    <div class="form-label-group">
      <input type="text" id="lastName" class="form-control" ng-model="form.lastname" placeholder="Last name">
      <label for="lastName">Last name</label>
    </div>
  </div>
  <div class="form-group">
    <div class="form-label-group">
     <input type="email" id="inputEmail" class="form-control"  ng-model="form.email" placeholder="Email address">
     <label for="inputEmail">Email address</label>
   </div>
 </div>
 <div class="form-group">
  <div class="form-label-group">
   <input type="password" id="inputPassword" class="form-control" ng-model="form.password" placeholder="Password">
   <label for="inputPassword">Password</label>
 </div>
</div>
<div class="form-group">
  <div class="form-label-group">
   <input type="password" id="confirmPassword" class="form-control" ng-model="form.passwordConfirm" placeholder="Confirm password">
   <label for="confirmPassword">Confirm password</label>
 </div>
</div>
</div>

<!-- Modal footer -->
<div class="modal-footer">
 <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
 <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
</div>
</form>
</div>
</div>
</div>
</div>

@endsection
@section('script')
<script type="text/javascript" src="{{ asset('assets/js/angular/controller/UserController.js') }}"></script>
<script type="text/javascript">

</script>
@endsection
