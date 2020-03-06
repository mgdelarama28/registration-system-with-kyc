@extends('admin.layouts.master')

@section('pageTitle', 'Account Settings')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Account Settings</h1>
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="{{ route('admin.account_settings') }}">Account Settings</a></li>
	                    </ol>
	                </div><!-- /.col -->
	            </div><!-- /.row -->
	        </div><!-- /.container-fluid -->
	    </div>
	    <!-- /.content-header -->

	    <!-- Main content -->
	    <div class="content">
	        <div class="container-fluid">
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="card card-primary card-outline">
	                        <div class="card-body">
	                            <p class="card-text">
									
	                            </p>

	                            <div class="row">
	                            	<div class="col-md-12">
	                            		@if(session('status'))
											<div class="alert alert-success text-center">{{ session('status') }}</div>
	                            		@endif

	                            		<form action="{{ route('admin.update_account_settings') }}" method="POST" enctype="multipart/form-data">
	                            			@csrf

	                            			<div class="row">
	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                        <label for="first_name">First Name</label>
				                                        <input name="first_name" type="text" class="form-control" id="first_name" placeholder="First Name" value="{{ $user->renderFirstName() }}" required>
				                                    </div>
	                            				</div>

	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                        <label for="last_name">Last Name</label>
				                                        <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Last Name" value="{{ $user->renderLastName() }}" required>
				                                    </div>
	                            				</div>

	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                        <label for="email">Email</label>
				                                        <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="{{ $user->renderEmail() }}" required>
				                                    </div>
	                            				</div>
	                            			</div>

	                            			<div class="row">
	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                        <label for="profile_picture_path">Profile Picture</label>
				                                        
				                                        <div class="row mb-1">
				                                        	<div class="col-md-12">
				                                        		<img id="profile_picture" src="{{ asset($user->renderProfilePicture()) }}" alt="Admin Profile Picture" width="20%">
				                                        	</div>
				                                        
				                                        </div>
				                                        <input name="profile_picture_path" type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control" id="profile_picture_path" placeholder="Image" value="{{ old('profile_picture_path') }}">
				                                    </div>
	                            				</div>
	                            			</div>

	                            			<div class="row">
												<div class="col-md-1">
		                            				<div class="form-group">
		                            					<button class="btn btn-primary form-control">Update</button>
		                            				</div>
	                            				</div>
	                            			</div>
	                            		</form>
	                            	</div>
	                            	<!-- /.col-md-12 -->
					            </div>
					            <!-- /.row -->
	                        </div>
	                    </div>
	                    <!-- /.card -->
	                </div>
	                <!-- /.col-md-12 -->
	            </div>
	            <!-- /.row -->
	        </div>
	        <!-- /.container-fluid -->
	    </div>
	    <!-- /.content -->
	</div>
@endsection

@section('scripts')
	@section('scripts')
	<script>
		$(document).ready(function(){
			$('#profile_picture_path').change(function() {
				var input = this;
			    var url = $(this).val();
			    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();

			    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
			     {
			        var reader = new FileReader();

			        reader.onload = function (e) {
			           $('#profile_picture').attr('src', e.target.result);
			        }

			       reader.readAsDataURL(input.files[0]);
			    } else
			    {
			      $('#profile_picture').attr('src', '/storage/default_images/no-image.png');
			    }
			});
		});
	</script>
@endsection
@endsection