<!DOCTYPE html>
<html>
<head>
	@include('admin.layouts._head')

</head>
<body>


	@include('admin.layouts._navbarheader')
	@include('admin.layouts._rightsidebar')



	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="#">
				<img src="{{ asset('admin/vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo">
				<img src="{{ asset('admin/vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
		@include('admin.layouts._leftsidebar')
		
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
		@yield('content')
		
			
		</div>
	</div>
	
	<!-- js -->
	@include('deletemodal')
	@include('admin.layouts._scripts')
</body>
</html>