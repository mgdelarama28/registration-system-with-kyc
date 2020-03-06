@extends('admin.layouts.master')

@section('pageTitle', 'Admins')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Admins</h1>
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="#">Admins</a></li>
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
	                                Admins
	                            </p>

	                            <div class="row">
	                            	<div class="col-md-12">
	                            		<table id="admins" class="table table text-center">
						            		<thead>
						            			<tr>
						            				<th>ID</th>
						            				<th>Profile Picture</th>
						            				<th>Name</th>
						            				<th>Email</th>
						            				<th>Role</th>
						            				<th>Actions</th>
						            			</tr>
						            		</thead>

						            		<tbody>
						            			@foreach($admins as $admin)
													<tr>
														<td>{{ $admin->id }}</td>
														<td>
															<img src="{{ $admin->renderProfilePicture() }}" alt="Admin Avatar" height="100px" width="100px">
															{{-- {{ $admin->renderProfilePicture() }} --}}
														</td>
														<td>{{ $admin->renderFullName() }}</td>
														<td>{{ $admin->renderEmail() }}</td>
														<td>Super Admin</td>
														<td>
															<a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
															<button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
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
			$('#admins').dataTable();
		});
	</script>
@endsection