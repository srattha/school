<!-- Main sidebar -->
<div class="sidebar sidebar-main sidebar-fixed">
	<div class="sidebar-content">
		<!-- Main navigation -->
		<div class="sidebar-category sidebar-category-visible">
			<div class="category-content no-padding">
				<ul class="navigation navigation-main navigation-accordion">
					@php 
					switch(Auth::user()->users_type_id){
						case '1':
					@endphp
						<li><a href="/employee"><i class="icon-user-tie" ></i><span>Employee</span></a></li>
					@php
						break;
						case '2':
					@endphp
						<li><a href="/dept_manager"><i class="icon-user-tie"></i><span>Deptmanager</span></a></li>
					@php
						break;
						case '3':
					@endphp
					<li><a href="/it_manager"><i class="icon-user-tie"></i><span>Itmanager</span></a></li>
					@php
						break;
					@endphp
					<li><a href="/guest"><i class="icon-user-tie"></i><span>Guest</span></a></li>
					@php
						break;
					}
					
					@endphp
					</ul>	
						
						
			</div>
		</div>
		<!-- /Main navigation -->

	</div>
</div>
<!-- /Main sidebar -->