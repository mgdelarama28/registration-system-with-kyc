@extends('admin.layouts.master')

@section('pageTitle', 'Sample')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Show Sample</h1>

	                    <a href="{{ route('admin.samples.edit', $sample->id) }}" class="btn btn-primary mt-2">Edit Sample</a>
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="#">Samples</a></li>
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
	                                {{-- Sample --}}
	                            </p>

	                            <div class="row">
	                            	<div class="col-md-12">
	                            		<form action="{{ route('admin.samples.update', $sample->id) }}" method="POST" enctype="multipart/form-data">
	                            			@csrf

	                            			<div class="row">
	                            				<div class="col-md-6">
				                                    <p><strong>Name</strong></p>
				                                    <p>{{ $sample->renderName() }}</p>
	                            				</div>
	                            			</div>

	                            			<div class="row">
	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                       <p><strong>Description</strong></p>
				                                    <p>{{ $sample->renderDescription() }}</p>
				                                    </div>
	                            				</div>
	                            			</div>

	                            			<div class="row">
	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                    	<p><strong>Image</strong></p>
				                                        <img src="{{ $sample->renderImage() }}" alt="" width="100px" height="100px">
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