@extends('admin.layouts.app')

@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Blank page
			<small>it all starts here</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Examples</a></li>
			<li class="active">Blank page</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Title</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
					title="Collapse">
					<i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Tags</h3>
							<a class="col-lg-offset-5 btn btn-success" href="{{ route('tag.create') }}">Add New</a>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>Tag Name</th>
										<th>Tag Slug</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								@foreach ($tags as $tag)
								<tr>
									<td>{{ $loop->index + 1 }}</td>
									<td>{{ $tag->name }}</td>
									<td>{{ $tag->slug }}</td>
									<td>Edit</td>
									<td>Delete</td>
								</tr>
								@endforeach
								<tfoot>
									<tr>
										<th>No.</th>
										<th>Tag Name</th>
										<th>Tag Slug</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.box-body -->
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->

		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	@endsection