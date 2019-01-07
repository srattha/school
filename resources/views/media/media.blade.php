@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<style type="text/css">
	.thumb{
		height: 235px;
		background-repeat: no-repeat;
    	background-position: center;
    	background-size: cover;
	}

</style>
<script type="text/javascript">
	var media_group = <?php echo $media_group ?>;
</script>
@endsection
@section('content')
<div ng-controller="MediaController"> 
	<h1 style="text-align: center; text-shadow: 2px 4px 3px #38910f;">อัลบั้มรูป @{{media_group.name}}</h1>
	<br>
	<div class="row">
		<div class="col-lg-3 col-sm-6" ng-repeat="x in lists" ng-if="x.type =='image'">
			<div class="thumbnail">
				<div class="thumb" style="background-image: url('@{{MEDIA_PATH + '/' + media_group.name + '/' + x.cover}}');">
					<a href="@{{MEDIA_PATH + '/' + media_group.name + '/' + x.name}}" class=" fancybox"  rel="image" style="overflow-x: none;"><div style="width: 100%;height: 100%;"></div></a>
				</div>
			</div>
		</div>
		
	</div> <!-- row / end -->
	<!-- <figure ng-repeat="x in lists">
		<a class="fancybox" rel="gallery1" href="@{{MEDIA_PATH + '/' + media_group.name + '/' + x.cover}}" title="Twilight Memories (doraartem)">
	<img src="@{{MEDIA_PATH + '/' + media_group.name + '/' + x.cover}}" alt="" />
</a>
	</figure>
 -->

</div>

@endsection
@section('script')
<script type="text/javascript" src="{{ asset('assets/js/angular/controller/MediaController.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/core/oimage.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".fancybox").fancybox({
			openEffect: "none",
			closeEffect: "none"
		});
	});

</script>
@endsection