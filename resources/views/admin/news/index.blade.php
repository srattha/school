
@extends('admin.master')
@section('title','News')
@section('css')
<style type="text/css">


</style>
@endsection
@section('content')
<div ng-controller="NewsController">
   <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="#">News</a>
     </li>
 </ol>
 <div class="card mb-3">
  <div class="card-header">
     <button type="button" class="btn btn-info" ng-click="modal()"><i class="fas fa-plus-square"></i> Create News</button></div>
     <div class="card-body">

     </div>
 </div>

 <div class="modal fade" id="form">
     <div class="modal-dialog">
        <div class="modal-content">
           <form ng-submit="submit(form)">
              <!-- Modal Header -->
              <div class="modal-header">
                 <h4 class="modal-title">News</h4>
                 <button type="button" class="close" data-dismiss="modal">×</button>
             </div>

             <!-- Modal body -->
             <div class="modal-body">

                 <div class="form-group">
                    <div class="form-label-group">
                       <input type="dete" id="firstName" class="form-control" placeholder="First name" ng-model="form.name" required="required" autofocus="autofocus">
                       <label for="firstName">First name</label>
                   </div>
                   <div class="form-group">

                      <label for="comment">News:</label>
                      <textarea class="form-control" rows="5" placeholder="News" ng-model="form.news"   id="comment"></textarea>
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
<script type="text/javascript" src="{{ asset('assets/js/angular/controller/NewsController.js') }}"></script>
<script type="text/javascript"></script>
@endsection
