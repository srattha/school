@extends('layouts.master')
@section('css')
<style type="text/css">

.thumb{
	height: 235px;
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	cursor: pointer;
}

.thumbnail .caption, .thumbnail .caption a{
	color:#fff;
}

.thumbnail .caption .dropdown-menu a{
	color:#000;
}

.img-responsive{
	margin: auto;
}

.cover-box{
	position: relative;
	border: 3px dashed #eeeeee;
	min-height: 235px;
	border-radius: 2px;
	background-color: #fcfcfc;
	padding: 5px;
	cursor: pointer;
}

.cover-box::before{
	content: '\ea0e';
	font-family: 'icomoon';
	font-size: 64px;
	position: absolute;
	top: 48px;
	width: 64px;
	height: 64px;
	display: inline-block;
	left: 50%;
	margin-left: -32px;
	line-height: 1;
	z-index: 2;
	color: #ddd;
	text-indent: 0;
	font-weight: normal;
	-webkit-font-smoothing: antialiased;
}

.cover-box span{
	font-size: 19px;
	margin-top: 130px;
	color: #bbb;
	text-align: center;
	font-weight: 500;
	text-shadow: 0 1px 1px #fff;
	position: absolute;
	left: 0;
	right: 0;
}
</style>
@endsection
@section('content')
<div ng-controller="MediaGroupController"> 
	<h1 style="text-align: center; text-shadow: 2px 4px 3px #38910f;">อัลบั้มรูป</h1>
	<br>
	<div class="row">
		<div class="col-lg-3 col-sm-6" ng-repeat="x in lists">
			<div class="thumbnail">
				<div class="thumb" style="background-image: url('@{{MEDIA_PATH + '/' + x.name + '/' + x.cover}}');">
					<div ng-click="enter(x.id)" style="width: 100%;height: 100%;z-index: 1"></div>
				</div>
			</div>
			<div ng-click="enter(x.id)"  style="width: 100%;height: 100%;z-index: 1">
				<h6>@{{x.name}}</h6>
			</div>

		</div>
	</div>
</div>    	
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('assets/js/angular/controller/MediaGroupController.js') }}"></script>
@endsection