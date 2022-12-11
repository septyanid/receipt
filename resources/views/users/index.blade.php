@extends('layouts.default')

@section('title', 'Users')

@section('content')

<section class="content-header">
	<div class="container-fluid">
		<div>
			<h1>Users</h1>
		</div>
	</div>
</section>

<section class="content">
	<div class="card card-primary card-outline">
		<div class="card-header">
			<!-- Add Button -->
			<a href="#" class="btn btn-primary">
				Add data
			</a>
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
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Username</th>
						<th>Email</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Kevin Septyan</td>
						<td>kevin</td>
						<td>kevin@gmail.com</td>
						<td><span class="badge badge-success">Active</span></td>
						<td>
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<i class="fas fa-cogs"></i>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Detail</a>
								<a class="dropdown-item" href="#">Edit</a>
								<a class="dropdown-item" href="#">Delete</a>
							</div>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Budi Budi</td>
						<td>budi</td>
						<td>budi@gmail.com</td>
						<td><span class="badge badge-success">Active</span></td>
						<td>
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<i class="fas fa-cogs"></i>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Detail</a>
								<a class="dropdown-item" href="#">Edit</a>
								<a class="dropdown-item" href="#">Delete</a>
							</div>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Ani Ani</td>
						<td>ani</td>
						<td>ani@gmail.com</td>
						<td><span class="badge badge-danger">Unactive</span></td>
						<td>
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<i class="fas fa-cogs"></i>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Detail</a>
								<a class="dropdown-item" href="#">Edit</a>
								<a class="dropdown-item" href="#">Delete</a>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

@endsection
