@extends('admin.layouts.master')

@section('pageTitle', 'Sample')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Edit Role</h1>
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="#">Roles</a></li>
	                        <li class="breadcrumb-item active"><a href="#">Edit</a></li>
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
	                                Role
	                            </p>

	                            <div class="row">
	                            	<div class="col-md-12">
	                            		<table id="role_users" class="table table">
	                            			<thead>
	                            				<tr>
	                            					<th>ID</th>
	                            					<th>Name</th>
	                            					<th>Email</th>
	                            					<th>Actions</th>
	                            				</tr>
	                            			</thead>

	                            			<tbody>
	                            				<tr>
	                            					<td></td>
	                            					<td></td>
	                            					<td></td>
	                            					<td></td>
	                            				</tr>
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
			$('#role_users').dataTable();
		});
	</script>
@endsection