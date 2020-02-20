@extends('admin.layouts.master')

@section('pageTitle', 'Roles')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Roles</h1>

	                    <a href="{{ route('admin.roles.create') }}" class="btn btn-primary mt-2"><i class="nav-icon fa fa-plus"></i> Add Role</a>
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="#">Roles</a></li>
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
	                                Roles
	                            </p>

	                            <div class="row">
	                            	<div class="col-md-12">
	                            		<table id="roles" class="table table text-center">
						            		<thead>
						            			<tr>
						            				<th>ID</th>
						            				<th>Name</th>
						            				<th>Date Created</th>
						            			</tr>
						            		</thead>

						            		<tbody>
						            			@foreach($roles as $role)
													<tr>
														<td>{{ $role->id }}</td>
														<td>{{ $role->name }}</td>
														<td>{{ $role->created_at }}</td>
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
			$('#roles').dataTable();
		});
	</script>
@endsection