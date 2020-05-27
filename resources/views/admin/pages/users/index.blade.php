@extends('admin.layouts.master')

@section('pageTitle', 'Users')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Users</h1>
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="#">Users</a></li>
	                        <li class="breadcrumb-item active"><a href="#">Index</a></li>
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
	                                Users
	                            </p>

	                            <div class="row">
	                            	<div class="col-md-12">
	                            		<table id="users" class="table table text-center">
						            		<thead>
						            			<tr>
						            				<th>ID</th>
						            				<th>Avatar</th>
						            				<th>Last Name</th>
						            				<th>First Name</th>
						            				<th>Email</th>
						            				<th>Actions</th>
						            			</tr>
						            		</thead>

						            		<tbody>
						            			@foreach($users as $user)
													<tr>
														<td>{{ $user->id }}</td>
														<td><img src="{{ asset($user->renderProfilePicture()) }}" alt="" height="100px" width="100px"></td>
														<td>{{ $user->last_name }}</td>
														<td>{{ $user->first_name }}</td>
														<td>{{ $user->email }}</td>
														<td>
															<a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary"><i class="far fa-eye"></i></a>
														</td>
													</tr>
						            			@endforeach
						            		</tbody>
						            	</table>
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
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#users').dataTable();
		});
	</script>
@endsection