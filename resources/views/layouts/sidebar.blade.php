<div class="sidebar">
	<!-- Sidebar user (optional) -->
	<div class="user-panel mt-3 pb-3 mb-3 d-flex">
		<div class="image">
			<img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
		</div>
		<div class="info">
			<a href="#" class="d-block">Alexander Pierce</a>
		</div>
	</div>

	<!-- SidebarSearch Form -->
	<div class="form-inline">
		<div class="input-group" data-widget="sidebar-search">
			<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
			<div class="input-group-append">
				<button class="btn btn-sidebar">
					<i class="fas fa-search fa-fw"></i>
				</button>
			</div>
		</div>
	</div>

	<!-- Sidebar Menu -->
	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<li class="nav-header">SETTING</li>
			<li class="nav-item">
				<a href="{{ route('users.index') }}"
					class="nav-link {{ request()->routeIs('users.index') ? ' active' : '' }}">
					<i class="nav-icon far fa-user"></i>
					<p>
						Users
					</p>
				</a>
			</li>
			<li class="nav-header">APPS</li>
			<li class="nav-item">
				<a href="{{ route('receipts.index') }}"
					class="nav-link {{ request()->routeIs('receipts.index') ? ' active' : '' }}">
					<i class="nav-icon fas fa-receipt"></i>
					<p>
						Receipts
					</p>
				</a>
			</li>
		</ul>
	</nav>
	<!-- /.sidebar-menu -->
</div>
