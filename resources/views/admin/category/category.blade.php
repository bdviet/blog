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
						<h3 class="box-title">Titles</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					@include('included.error')
					<form role="form" action="{{ route('category.store') }}" method="post">
						{{ csrf_field() }}
						<div class="box-body">
							<div class="col-lg-offset-2 col-lg-6">
								<div class="form-group">
									<label for="name">Category title</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Category Title">
								</div> 

								<div class="form-group">
									<label for="slug">Category slug</label>
									<input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
								</div>

								<div class="form-group text-center">
									<button type="submit" class="btn btn-primary">Submit</button>
									<a type="button" href="{{ route('category.index') }}" class="btn btn-danger">Back</a>
								</div>
							</div>
						</div>
					</form>
				</div>				
			</div>
		</div>
		<!-- ./row -->
	</section>
	<!-- /.content -->
</div>

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="../../bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
@endsection