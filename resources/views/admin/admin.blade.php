<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin Dashboard | 247 HRIS</title>

	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/4c6c819f60.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <!-- Override CSS -->
    <link rel="stylesheet" type="text/css" href="/css/styles.css">

</head>
<body>

	<!-- Main -->
	<div class="row">
		<div class="col-lg-2 sidebar">
			<div class="row">
				<div style="text-align: center;" class="col-lg-12">
					<img class="company_logo" src="/img/icon.png">
					<h6 style="margin-top: 10px;">24/7 Virtual Agent Philippines Inc.</h6>
				</div>
			</div>

			<!-- Navigation-->
			<div class="row navigation">
				<div class="col-lg-12">
				<h6 style="color: #fff; padding-left: 20px; padding-right: 20px;">Navigation</h6>	
					<ul>
						<li>
							<div style="margin-top: 20px;" class="row nav_link active_nav">
								<div class="col-lg-2">
									<i style="color: #fff;" class="fa fa-user" aria-hidden="true"></i>
								</div>
								<div class="col-lg-10">
									<a style="font-size: 15px;" href="#employeeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Employee</a>
									<ul class="collapse" id="employeeSubmenu">
										<li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/add_employee"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; Add Employee</a>
										</li>
										<!-- <li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/employee_list"><i class="fa fa-list-ul" aria-hidden="true"></i>&nbsp; Employee List</a>
										</li> -->
										<li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/manage_employee"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; Manage Employees</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<div class="row nav_link">
								<div class="col-lg-2">
									<i style="color: #fff;" class="fa fa-calendar" aria-hidden="true"></i>
								</div>
								<div class="col-lg-10">
									<a style="font-size: 15px;" href="#attendanceSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Attendance</a>
									<ul class="collapse" id="attendanceSubmenu">
										<li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/timesheet"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; Timesheets</a>
										</li>
										<!-- <li style="padding-top: 10px;">
											<a style="font-size: 16px;" href="/employee_list"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; Manage Timesheets</a>
										</li> -->
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="row config">
				<div class="col-lg-12">
					<h6 style="color: #fff; padding-left: 20px; padding-right: 20px;">Configurations</h6>
					<ul>
						<li>
							<div class="row nav_link">
								<div class="col-lg-2">
									<i style="color: #fff;" class="fa fa-users" aria-hidden="true"></i>
								</div>
								<div class="col-lg-10">
									<a style="font-size: 15px;" href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">User Accounts</a>
									<ul class="collapse" id="userSubmenu">
										<!-- <li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/add_user"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; Add User</a>
										</li> -->
										<li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/manage_user"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; Manage Users</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<div class="row nav_link">
								<div class="col-lg-2">
									<i style="color: #fff;" class="fa fa-plus" aria-hidden="true"></i>
								</div>
								<div class="col-lg-10">
									<a style="font-size: 15px;" href="#addSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Add</a>
									<ul class="collapse" id="addSubmenu">
										<!-- <li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/add_user"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; Add User</a>
										</li> -->
										<li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/job_title"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Job</a>
										</li>
										<li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/department"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Department</a>
										</li>
										<li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/job_status"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Job Status</a>
										</li>
										<li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/job_level"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Job Level</a>
										</li>
										<li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/job_position"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Job Position</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-10 main">
			<!-- Pages -->
			
				<div class="dashboard_banner">
					<div class="row">
						<div class="col-lg-6">
							<h2>ADMIN DASHBOARD</h2>
						</div>
						<div class="col-lg-6">
							<ul style="list-style: none;">
								<li style="float: right;" class="nav-item dropdown">
	                                <a style="color: #000;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
	                                     <span>{{ Auth::user()->name }} <i class="fa fa-caret-down" aria-hidden="true"></i></span>
	                                </a>

	                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	                                    <a class="dropdown-item" href="{{ route('logout') }}"
	                                       onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
	                                        {{ __('Logout') }}
	                                    </a>

	                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                        @csrf
	                                    </form>
	                                </div>
                            	</li>
							</ul>
						</div>
					</div>
				</div>
				@yield('content')
			
		</div>
	</div>
</body>
<script type="text/javascript">
	$( document ).ready(function() {
	    $('.edit-dept').on('click', function(event){
	    	var dept_name = $(this).attr('dep_name');
	    	var dept_desc = $(this).attr('dep_desc')
	    	var id = $(this).attr('id');

	    	$('.mj_title').val(dept_name);
	    	$('.mj_desc').val(dept_desc);
	    	$('.mj_id').val(id);
	    });

	    $('.edit-job').on('click', function(event){
	    	var job_name = $(this).attr('job_name');
	    	var job_desc = $(this).attr('job_desc')
	    	var job_id = $(this).attr('job_id');

	    	console.log(job_name);
	    	$('#mjob_title').val(job_name);
	    	$('#mjob_desc').val(job_desc);
	    	$('.mjob_id').val(job_id);
	    });

	     $('.edit-status').on('click', function(event){
	    	var status_name = $(this).attr('status_name');
	    	var status_desc = $(this).attr('status_desc')
	    	var status_id = $(this).attr('status_id');
	    	console.log(status_name);

	    	$('#mstatus_title').val(status_name);
	    	$('#mstatus_desc').val(status_desc);
	    	$('.mstatus_id').val(status_id);
	    });

	     $('.edit-level').on('click', function(event){
	    	var level_name = $(this).attr('level_name');
	    	var level_desc = $(this).attr('level_desc')
	    	var level_id = $(this).attr('level_id');
	    	console.log(level_name);
	    	
	    	$('#mlevel_title').val(level_name);
	    	$('#mlevel_desc').val(level_desc);
	    	$('.mlevel_id').val(level_id);
	    });

	     $('.edit-position').on('click', function(event){
	    	var position_name = $(this).attr('position_name');
	    	var position_desc = $(this).attr('position_desc')
	    	var position_id = $(this).attr('position_id');
	    	console.log(position_name);
	    	
	    	$('#mp_title').val(position_name);
	    	$('#mp_desc').val(position_desc);
	    	$('.mp_id').val(position_id);
	    });

	      $('#DataTable').DataTable();
	      $('#addDataTable').DataTable();
	});
</script>
</html>