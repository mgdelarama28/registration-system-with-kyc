@extends('admin.layouts.master')

@section('pageTitle', 'User')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Show User</h1>
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="#">Users</a></li>
	                        <li class="breadcrumb-item active"><a href="#">Show</a></li>
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
	                                {{-- users --}}
	                            </p>

	                            <div class="row">
	                            	<div class="col-md-12">
	                            		<form action="#" method="POST" enctype="multipart/form-data">
	                            			@csrf

	                            			<div class="row">
	                            				<div class="col-md-6">
				                                    <p><strong>Last Name</strong></p>
				                                    <p>{{ $user->last_name }}</p>
	                            				</div>
												
												<div class="col-md-6">
				                                    <p><strong>First Name</strong></p>
				                                    <p>{{ $user->first_name }}</p>
	                            				</div>
	                            			</div>

	                            			<div class="row">
												<div class="col-md-6">
	                            					<div class="form-group">
				                                       <p><strong>Email</strong></p>
				                                    	<p>{{ $user->email }}</p>
													</div>
												</div>
													
												<div class="col-md-6">
													<div class="form-group">
														<p><strong>Avatar</strong></p>
														<img src="{{ $user->renderProfilePicture() }}" alt="" width="100px" height="100px">
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