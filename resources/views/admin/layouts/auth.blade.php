<!DOCTYPE html>
<html lang="en">

@include('admin.includes.meta-tags')

@include('admin.includes.styles')

<body class="hold-transition login-page">
	<div id="app" class="wrapper">
		
		<div class="login-box mt-5">
			<div class="login-logo">
				<a href="#">{{ config('app.name') }}</a>	
			</div>

			<div class="login-box-body">
				@yield('content')
			</div>
		</div>

	</div>

</body>

@include('admin.includes.scripts')

</html>