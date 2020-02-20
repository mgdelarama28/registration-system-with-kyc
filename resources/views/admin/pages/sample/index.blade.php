@extends('admin.layouts.master')

@section('pageTitle', 'Sample')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Samples</h1>

	                    <a href="{{ route('admin.samples.create') }}" class="btn btn-primary mt-2"><i class="nav-icon fa fa-plus"></i> Add Sample</a>
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="#">Samples</a></li>
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
	                                Samples
	                            </p>

	                            <div class="row">
	                            	<div class="col-md-12">
	                            		<table id="samples" class="table table text-center">
						            		<thead>
						            			<tr>
						            				<th>ID</th>
						            				<th>Image</th>
						            				<th>Name</th>
						            				<th>Description</th>
						            				<th>Actions</th>
						            			</tr>
						            		</thead>

						            		<tbody>
						            			@foreach($samples as $sample)
													<tr>
														<td>{{ $sample->id }}</td>
														<td><img src="{{ asset($sample->renderImage()) }}" alt="" height="100px" width="100px"></td>
														<td>{{ $sample->name }}</td>
														<td>{{ $sample->description }}</td>
														<td>
															<a href="{{ route('admin.samples.show', $sample->id) }}" class="btn btn-primary"><i class="far fa-eye"></i></a>
															<a href="{{ route('admin.samples.edit', $sample->id) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
															{{-- <a href="javascript:void(0)" data-action="{{ route('admin.samples.destroy', $sample->id) }}" data-message="Are you sure you want to delete this sample?" class="btn__delete btn btn-danger deleteBtn">
																<i class="far fa-trash-alt"></i> --}}
															<a href="{{ route('admin.samples.destroy', $sample->id) }}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
															</a>															
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
			$('#samples').dataTable();
		});
	</script>
@endsection