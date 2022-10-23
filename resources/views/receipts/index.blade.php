@extends('layouts.default')

@section('title', 'Receipts')

@section('content')

<section class="content-header">
	<div class="container-fluid">
		<div>
			<h1>Receipts</h1>
		</div>
	</div>
</section>

<section class="content">

	<!-- Add Button -->
	<div class="mb-2">
		<a href="receipts-create" class="btn btn-primary">
			Add data
		</a>
	</div>

	<!-- Default box -->
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Receipts</h3>
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
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Receipt Number</th>
						<th>Store</th>
						<th>Total</th>
						<th>Created At</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>012345</td>
						<td>Indomart</td>
						<td>Rp. {{ number_format(50000) }}</td>
						<td>31-12-2022</td>
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
						<td>110020</td>
						<td>PT. Jaya Motor (Bengkel Motor)</td>
						<td>Rp. {{ number_format(150000) }}</td>
						<td>31-12-2022</td>
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
						<td>010101</td>
						<td>Solaria</td>
						<td>Rp. {{ number_format(1000000) }}</td>
						<td>31-12-2022</td>
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
