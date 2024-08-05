@extends('admin.layouts.app')

@section('title', 'Add Category')

@section('contents')

<div class="content-wrapper">
    <section class="content-header">
      	<div class="container-fluid">
        	<div class="row mb-2">
          		<div class="col-sm-6">
            		<h1>Add New Category</h1>
          		</div>
          		<div class="col-sm-6">
            		<ol class="breadcrumb float-sm-right">
              			<li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
              			<li class="breadcrumb-item"><a href="{{url('admin/category')}}">Categories</a></li>
              			<li class="breadcrumb-item active">Add Category</li>
            		</ol>
          		</div>
        	</div>
      	</div>
    </section>

    <section class="content">
      	<div class="container-fluid">
        	<div class="row">
          		<div class="col-md-12">
		            <div class="card card-primary">
		              	<div class="card-header">
		                	<h3 class="card-title"></h3>
		              	</div>
              			<form action="{{url('admin/category')}}" method="post">
              				@csrf
	                		<div class="card-body">
	                  			<div class="form-group">
	                    			<label for="name">Name</label>
	                    			<input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{old('name')}}" required="">
	                    			@if($errors->has('name'))
								      	<div class="alert alert-danger" role="alert">
								      		<strong>{{ $errors->first('name') }}</strong>
								      	</div>
								  	@endif
	                  			</div>
	                		</div>
			                <div class="card-footer">
			                  	<button type="submit" class="btn btn-primary">Submit</button>
			                  	<a href="{{url('admin/category')}}" class="btn btn-danger">Cancel</a>
			                </div>
              			</form>
            		</div>
          		</div>
        	</div>
    </section>
</div>

@endsection
