@extends('layouts.master')
@section('css')
<style type="text/css">
  .cut{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
</style>
@endsection
@section('content')
<!-- <div ng-controller="GuestController"> -->
 <div >
   <img src="https://tak.rmutl.ac.th/assets/img/website-logo-th.jpg" class="img-responsive" />
     <br>
     <div class="row">
      <div class="col-md-6">
       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
         <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
         <li data-target="#carousel-example-generic" data-slide-to="1"></li>
         <li data-target="#carousel-example-generic" data-slide-to="2"></li>
       </ol>
       <!-- Wrapper for slides -->
       <div class="carousel-inner" role="listbox">
         <div class="item active">
          <img class="d-block w-100" src="http://www.schoolweb.in.th/timthumb.php?src=/uploads/20180603170016SPMwJ3m/slide/20180603170743.jpg&w=586&h=260" data-color="violet" alt="Third Image" style="width: 100%; height: 100%" />
        </div>
        <div class="item">
          <img src="http://www.schoolweb.in.th/timthumb.php?src=/uploads/20180603170016SPMwJ3m/slide/20180603170716.jpg&w=586&h=260" data-color="violet" alt="Third Image" style="width: 100%; height: 100%" />
        </div>
        <div class="item">
          <img src="http://www.schoolweb.in.th/timthumb.php?src=/uploads/20180603170016SPMwJ3m/slide/20180603170658.jpg&w=586&h=260" data-color="violet" alt="Third Image" style="width: 100%; height: 100%" />
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
     <div class="panel panel-success">
      <div class="panel-heading"> <b style="font-size: 20px;">ข่าวประชาสัมพันธ์</b></div>
      <div class="panel-body">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-info cut"> <i class="icon-magazine"></i> ศาสตราจารย์คลินิก นพ.อุดม คชินทร มอบนโยบาย ศาสตราจารย์คลินิก นพ.อุดม คชินทร มอบนโยบาย ศาสตราจารย์คลินิก นพ.อุดม คชินทร มอบนโยบาย <i class="icon-circle-right2"></i></a>
          <a href="#" class="list-group-item list-group-item-info cut"> <i class="icon-magazine"></i> ศาสตราจารย์คลินิก นพ.อุดม คชินทร มอบนโยบาย ศาสตราจารย์คลินิก นพ.อุดม คชินทร มอบนโยบาย ศาสตราจารย์คลินิก นพ.อุดม คชินทร มอบนโยบาย <i class="icon-circle-right2"></i></a>
        </div>
      </div>
    </div>
  </div>

</div>
<br>
<div class="row">
  <div class="col-md-6" >
   <b style="font-size: 20px;">ข่าวการศึกษา</b>
   <span class="line"></span>
   <br>
   <div class="list-group">
    <a href="#" class="list-group-item list-group-item-info cut"> <i class="icon-magazine"></i> ศาสตราจารย์คลินิก นพ.อุดม คชินทร มอบนโยบาย ศาสตราจารย์คลินิก นพ.อุดม คชินทร มอบนโยบาย ศาสตราจารย์คลินิก นพ.อุดม คชินทร มอบนโยบาย <i class="icon-circle-right2"></i></a>
     <a href="#" class="list-group-item list-group-item-info cut"> <i class="icon-magazine"></i> ศาสตราจารย์คลินิก นพ.อุดม คชินทร มอบนโยบาย ศาสตราจารย์คลินิก นพ.อุดม คชินทร มอบนโยบาย ศาสตราจารย์คลินิก นพ.อุดม คชินทร มอบนโยบาย <i class="icon-circle-right2"></i></a>
  </div>
</div>
<div class="col-md-6" >
  <b style="font-size: 20px;">ปฏิทินกิจกรรม</b>
  <span class="line"></span>
  <br>
  <div style="height: 230px;overflow: auto;">
   <div class="list-group">
    <div class="list-group-item list-group-item-success">
     <a href="#" style="text-decoration: none;">
      <h4 class="list-group-item-heading">04/06/2018</h4>
      <b class="list-group-item-text">ระชุมผู้ปกครอง ภาคเรียนที่ 1</b>
      <p class="cut">ได้มีการประชุมผู้ปกครอง ครั้งที่ 1 ในปีการศึกษา 2561ได้มีการประชุมผู้ปกครอง ครั้งที่ 1 ในปีการศึกษา 2561
      ได้มีการประชุมผู้ปกครอง ครั้งที่ 1 ในปีการศึกษา 2561
    ได้มีการประชุมผู้ปกครอง ครั้งที่ 1 ในปีการศึกษา 2561ได้มีการประชุมผู้ปกครอง ครั้งที่ 1 ในปีการศึกษา 2561</p>
  </a>
</div>
</div>

<div class="list-group">
  <div class="list-group-item list-group-item-success">
   <a href="#" style="text-decoration: none;">
    <h4 class="list-group-item-heading">04/06/2018</h4>
    <b class="list-group-item-text">ระชุมผู้ปกครอง ภาคเรียนที่ 1</b>
    <p class="cut">ได้มีการประชุมผู้ปกครอง ครั้งที่ 1 ในปีการศึกษา 2561ได้มีการประชุมผู้ปกครอง ครั้งที่ 1 ในปีการศึกษา 2561
    ได้มีการประชุมผู้ปกครอง ครั้งที่ 1 ในปีการศึกษา 2561
  ได้มีการประชุมผู้ปกครอง ครั้งที่ 1 ในปีการศึกษา 2561ได้มีการประชุมผู้ปกครอง ครั้งที่ 1 ในปีการศึกษา 2561</p>
</a>
</div>
</div>
</div>
</div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <b style="font-size: 20px;">กิจกรรม</b>
    <a href="#"><b style="font-size: 20px;" class="pull-right">ดูทั้งหมด <i class="icon-circle-right2"></i></b></a>
   <span class="line"></span>
    <br>
    <div class="col-md-4">
     <img class="img-thumbnail" src="http://www.schoolweb.in.th/timthumb.php?src=/uploads/20180603170016SPMwJ3m/news/20180603173542.jpg&w=240&h=190"  style="width: 100%;height: 100%;">

     <div class="cut">ในวันที่ 18 พฤษภาคม พ.ศ. 2561 ได้มีการประชุมผู้ปกครอง ครั้งที่ 1 ในปีการศึกษา 2561</div>
     <a href="#" class="pull-right">อ่านต่อ..</a>

   </div>
   <div class="col-md-4">
     <img class="img-thumbnail" src="http://www.schoolweb.in.th/timthumb.php?src=/uploads/20180603170016SPMwJ3m/news/20180603173542.jpg&w=240&h=190"  style="width: 100%;height: 100%;">
     <div style="text-overflow:ellipsis; white-space: nowrap;

     overflow: hidden; ">ในวันที่ 18 พฤษภาคม พ.ศ. 2561 ได้มีการประชุมผู้ปกครอง ครั้งที่ 1 ในปีการศึกษา 2561</div>

     <a href="#" class="pull-right">อ่านต่อ..</a>
   </div>
   <div class="col-md-4">
     <img class="img-thumbnail" src="http://www.schoolweb.in.th/timthumb.php?src=/uploads/20180603170016SPMwJ3m/news/20180603173542.jpg&w=240&h=190"  style="width: 100%;height: 100%;">
     <div class="cut">ในวันที่ 18 พฤษภาคม พ.ศ. 2561 ได้มีการประชุมผู้ปกครอง ครั้งที่ 1 ในปีการศึกษา 2561
   </div>
   <a href="#" class="pull-right">อ่านต่อ..</a>

 </div>
</div>
</div>


<br>
<!-- <div class="row" style="height: 5px;
display: block;
background: #85b910; ">
<span class="line"></span>

</div>
 -->




</div>
<!-- </div> -->
<!-- end of modal body-->
@endsection
@section('script')
<!-- <script type="text/javascript" src="{{ asset('assets/js/angular/controller/GuestController.js') }}"></script>
 -->

@endsection