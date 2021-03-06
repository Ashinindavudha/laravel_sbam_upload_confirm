@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Text Editors
			<small>Advanced form element</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">Editors</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">


				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Title</h3>
					</div>
					@include('admin.layouts.errors')
					<!-- form start -->
					<form action="{{route('category.store')}}" method="POST">
						@csrf
				
						<div class="box-body">
							<div class="col-lg-offset-3 col-lg-6">
								<div class="form-group">
									<label for="name">Category Title</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Category Title">
								</div>


								<div class="form-group">
									<label for="slug">Category Slug</label>
									<input type="text" class="form-control" id="slug" name="slug" placeholder="Category Slug">
								</div>
								<div class="form-group">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="{{route('category.index')}}" class="btn btn-warning">Back</a>
						</div>
							</div>

																
							</div>
						</div>
						<!-- /.box-body -->
						
					</form>
				</div>
			</div><!-- /.col-->
		</div><!-- ./row -->
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->

@endsection