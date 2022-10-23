@extends('layouts.default')

@section('title', 'Add Receipt')

@section('content')

<section class="content-header">
	<div class="container-fluid">
		<div>
			<h1>Add Receipt</h1>
		</div>
	</div>
</section>

<section class="content">
	<!-- Add Button -->
	<div class="mb-2">
		<a href="" class="btn btn-secondary">
			Back
		</a>
	</div>

	<!-- Default box -->
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Add Receipt</h3>
			<!-- Card Tools -->
			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
					<i class="fas fa-minus"></i>
				</button>
				<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
					<i class="fas fa-times"></i>
				</button>
			</div>
		</div>

		<div class="card-body">
			<form action="">
				@csrf
				<!-- Receipt Number -->
				<div class="form-group">
					<label for="">Receipt Number</label>
					<input type="text" name="" id="" class="form-control">
				</div>

				<!-- store -->
				<div class="form-group">
					<label for="">Store Name</label>
					<input type="text" name="" id="" class="form-control">
				</div>

				<!-- date -->
				<div class="form-group">
					<label>Date:</label>
					<div class="input-group date" id="reservationdate" data-target-input="nearest">
						<div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
							<div class="input-group-text"><i class="fa fa-calendar"></i></div>
						</div>
						<input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
					</div>
				</div>

				<!-- item -->
				<div class="form-group">
					<label for="">Item</label>
					<div class="row mb-2">
						<div class="col-md-5">
							<input type="text" name="" id="" placeholder="item" class="form-control">
						</div>
						<div class="col-md-5">
							<input type="text" name="" id="" placeholder="price" class="form-control">
						</div>
						<div class="col-md">
							<button class="btn btn-primary">
								<i class="fas fa-plus"></i>
							</button>
							<button class="btn btn-primary">
								<i class="fas fa-minus"></i>
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

@endsection
