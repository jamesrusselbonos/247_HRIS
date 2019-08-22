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
				<h6 style="padding-left: 20px; padding-right: 20px;">Navigation</h6>	
					<ul>
						<li>
							<div style="margin-top: 20px;" class="row nav_link active_nav">
								<div class="col-lg-2">
									<i style="color: #fff;" class="fa fa-inbox" aria-hidden="true"></i>
								</div>
								<div class="col-lg-10">
									<a style="font-size: 15px;" href="/admin">Dashboard</a>
									<!-- <ul class="collapse" id="employeeSubmenu">
										<li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/add_employee"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; Add Employee</a>
										</li>
										<li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/employee_list"><i class="fa fa-list-ul" aria-hidden="true"></i>&nbsp; Employee List</a>
										</li>
										<li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/manage_employee"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; Manage Employees</a>
										</li>
									</ul> -->
								</div>
							</div>
						</li>
						<li>
							<div class="row nav_link">
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
					<h6 style="padding-left: 20px; padding-right: 20px;">Configurations</h6>
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
							<h2><a href="/admin" style="color: #000;">ADMIN DASHBOARD</a></h2>
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

	      $('.view_emp').on('click',  function(event){
	      	var id = $(this).attr('p_id');
	      	var employee_id = $(this).attr('p_employeeid');
	      	var employee_gender = $(this).attr('p_gender');
	      	var employee_fname = $(this).attr('p_fname');
	      	var employee_mname = $(this).attr('p_mname');
	      	var employee_lname = $(this).attr('p_lname');
	      	var employee_department = $(this).attr('p_department');
	      	var employee_status = $(this).attr('p_status');
	      	var employee_picture = $(this).attr('p_picture');
	      	var employee_address = $(this).attr('p_address');
	      	var employee_city = $(this).attr('p_city');
	      	var employee_province = $(this).attr('p_province');
	      	var employee_country = $(this).attr('p_country');
	      	var employee_zip = $(this).attr('p_zip');
	      	var employee_hnumber = $(this).attr('p_hnumber');
	      	var employee_mnumber = $(this).attr('p_mnumber');
	      	var employee_wemail = $(this).attr('p_wemail');
	      	var employee_pemail = $(this).attr('p_pemail');
	      	var employee_bday = $(this).attr('p_bday');
	      	var employee_ssnsin = $(this).attr('p_ssnsin');
	      	var employee_ename = $(this).attr('p_ename');
	      	var employee_relationship = $(this).attr('p_relationship');
	      	var employee_eaddress = $(this).attr('p_eaddress');
	      	var employee_enumber = $(this).attr('p_enumber');
	      	var employee_jobtitle = $(this).attr('p_jobtitle');
	      	var employee_jobdesc = $(this).attr('p_jobdesc');
	      	var employee_joblevel = $(this).attr('p_joblevel');
	      	var employee_jobposition = $(this).attr('p_jobposition');
	      	var employee_datehired = $(this).attr('p_datehired');
	      	var employee_dateterminated = $(this).attr('p_dateterminated');
	      	var employee_sss = $(this).attr('p_sss');
	      	var employee_pagibig = $(this).attr('p_pagibig');
	      	var employee_philhealth = $(this).attr('p_philhealth');
	      	var employee_tin = $(this).attr('p_tin');
	      	var employee_nbinumber = $(this).attr('p_nbinumber');
	      	var employee_diploma = $(this).attr('p_diploma');
	      	var employee_medical = $(this).attr('p_medical');
	      	var employee_tor = $(this).attr('p_tor');
	      	var employee_birthcert = $(this).attr('p_birthcert');
	      	var employee_bclearance = $(this).attr('p_bclearance');
	      	var employee_cedula = $(this).attr('p_cedula');
	    	
	    	console.log(employee_gender);
	    	
	    	$('#e_id').html(id);
	    	$('#elist_id').html(employee_id);
	    	$('#elist_gender').html(employee_gender);
	    	$('#elist_fname').html(employee_fname);
	    	$('#elist_mname').html(employee_mname);
	    	$('#elist_lname').html(employee_lname);
	    	$('#elist_department').html(employee_department);
	    	$('#elist_status').html(employee_status);
	    	$('#e_pic').html(employee_picture);
	    	$('#elist_address').html(employee_address);
	    	$('#elist_city').html(employee_city);
	    	$('#elist_province').html(employee_province);
	    	$('#elist_country').html(employee_country);
	    	$('#elist_zip').html(employee_zip);
	    	$('#elist_hnumber').html(employee_hnumber);
	    	$('#elist_pnumber').html(employee_mnumber);
	    	$('#elist_wemail').html(employee_wemail);
	    	$('#elist_pemail').html(employee_pemail);
	    	$('#elist_bday').html(employee_bday);
	    	$('#elist_ssn_sin').html(employee_ssnsin);
	    	$('#elist_ename').html(employee_ename);
	    	$('#elist_relationship').html(employee_relationship);
	    	$('#elist_eaddress').html(employee_eaddress);
	    	$('#elist_enumber').html(employee_enumber);
	    	$('#elist_job').html(employee_jobtitle);
	    	$('#elist_jdesc').html(employee_jobdesc);
	    	$('#elist_staff').html(employee_joblevel);
	    	$('#elist_position').html(employee_jobposition);
	    	$('#elist_hired').html(employee_datehired);
	    	$('#elist_terminated').html(employee_dateterminated);
	    	$('#elist_sss').html(employee_sss);
	    	$('#elist_pagibig').html(employee_pagibig);
	    	$('#elist_philhealth').html(employee_tin);
	    	$('#elist_NBI').html(employee_nbinumber);
	    	$('#elist_TIN').html(employee_tin);
	    	$('#elist_diploma').html(employee_diploma);
	    	$('#elist_medical').html(employee_medical);
	    	$('#elist_TOR').html(employee_tor);
	    	$('#elist_bcert').html(employee_birthcert);
	    	$('#elist_bclearance').val(employee_bclearance);
	    	$('#elist_cedula').html(employee_cedula);
	    	
	      });

		  $('.edit_emp').on('click',  function(event){
	      	var edit_id = $(this).attr('ep_id');
	      	var edit_employee_id = $(this).attr('ep_employeeid');
	      	var edit_employee_gender = $(this).attr('ep_gender');
	      	var edit_employee_fname = $(this).attr('ep_fname');
	      	var edit_employee_mname = $(this).attr('ep_mname');
	      	var edit_employee_lname = $(this).attr('ep_lname');
	      	var edit_employee_department = $(this).attr('ep_department');
	      	var edit_employee_status = $(this).attr('ep_status');
	      	var edit_employee_picture = $(this).attr('ep_picture');
	      	var edit_employee_address = $(this).attr('ep_address');
	      	var edit_employee_city = $(this).attr('ep_city');
	      	var edit_employee_province = $(this).attr('ep_province');
	      	var edit_employee_country = $(this).attr('ep_country');
	      	var edit_employee_zip = $(this).attr('ep_zip');
	      	var edit_employee_hnumber = $(this).attr('ep_hnumber');
	      	var edit_employee_mnumber = $(this).attr('ep_mnumber');
	      	var edit_employee_wemail = $(this).attr('ep_wemail');
	      	var edit_employee_pemail = $(this).attr('ep_pemail');
	      	var edit_employee_bday = $(this).attr('ep_bday');
	      	var edit_employee_ssnsin = $(this).attr('ep_ssnsin');
	      	var edit_employee_ename = $(this).attr('ep_ename');
	      	var edit_employee_relationship = $(this).attr('ep_relationship');
	      	var edit_employee_eaddress = $(this).attr('ep_eaddress');
	      	var edit_employee_enumber = $(this).attr('ep_enumber');
	      	var edit_employee_jobtitle = $(this).attr('ep_jobtitle');
	      	var edit_employee_jobdesc = $(this).attr('ep_jobdesc');
	      	var edit_employee_joblevel = $(this).attr('ep_joblevel');
	      	var edit_employee_jobposition = $(this).attr('ep_jobposition');
	      	var edit_employee_datehired = $(this).attr('ep_datehired');
	      	var edit_employee_dateterminated = $(this).attr('ep_dateterminated');
	      	var edit_employee_sss = $(this).attr('ep_sss');
	      	var edit_employee_pagibig = $(this).attr('ep_pagibig');
	      	var edit_employee_philhealth = $(this).attr('ep_philhealth');
	      	var edit_employee_tin = $(this).attr('ep_tin');
	      	var edit_employee_nbinumber = $(this).attr('ep_nbinumber');
	      	var edit_employee_diploma = $(this).attr('ep_diploma');
	      	var edit_employee_medical = $(this).attr('ep_medical');
	      	var edit_employee_tor = $(this).attr('ep_tor');
	      	var edit_employee_birthcert = $(this).attr('ep_birthcert');
	      	var edit_employee_bclearance = $(this).attr('ep_bclearance');
	      	var edit_employee_cedula = $(this).attr('ep_cedula');
	    	
	    	console.log(edit_employee_gender);
	    	
	    	$('#e_id').html(edit_id);
	    	$('#elist_id').html(edit_employee_id);
	    	$('#elist_gender').html(edit_employee_gender);
	    	$('#elist_fname').html(edit_employee_fname);
	    	$('#elist_mname').html(edit_employee_mname);
	    	$('#elist_lname').html(edit_employee_lname);
	    	$('#elist_department').html(edit_employee_department);
	    	$('#elist_status').html(edit_employee_status);
	    	$('#e_pic').html(edit_employee_picture);
	    	$('#elist_address').html(edit_employee_address);
	    	$('#elist_city').html(edit_employee_city);
	    	$('#elist_province').html(edit_employee_province);
	    	$('#elist_country').html(edit_employee_country);
	    	$('#elist_zip').html(edit_employee_zip);
	    	$('#elist_hnumber').html(edit_employee_hnumber);
	    	$('#elist_pnumber').html(edit_employee_mnumber);
	    	$('#elist_wemail').html(edit_employee_wemail);
	    	$('#elist_pemail').html(edit_employee_pemail);
	    	$('#elist_bday').html(edit_employee_bday);
	    	$('#elist_ssn_sin').html(edit_employee_ssnsin);
	    	$('#elist_ename').html(edit_employee_ename);
	    	$('#elist_relationship').html(edit_employee_relationship);
	    	$('#elist_eaddress').html(edit_employee_eaddress);
	    	$('#elist_enumber').html(edit_employee_enumber);
	    	$('#elist_job').html(edit_employee_jobtitle);
	    	$('#elist_jdesc').html(edit_employee_jobdesc);
	    	$('#elist_staff').html(edit_employee_joblevel);
	    	$('#elist_position').html(edit_employee_jobposition);
	    	$('#elist_hired').html(employee_datehired);
	    	$('#elist_terminated').html(edit_employee_dateterminated);
	    	$('#elist_sss').html(edit_employee_sss);
	    	$('#elist_pagibig').html(edit_employee_pagibig);
	    	$('#elist_philhealth').html(edit_employee_tin);
	    	$('#elist_NBI').html(edit_employee_nbinumber);
	    	$('#elist_TIN').html(edit_employee_tin);
	    	$('#elist_diploma').html(edit_employee_diploma);
	    	$('#elist_medical').html(edit_employee_medical);
	    	$('#elist_TOR').html(edit_employee_tor);
	    	$('#elist_bcert').html(edit_employee_birthcert);
	    	$('#elist_bclearance').val(edit_employee_bclearance);
	    	$('#elist_cedula').html(edit_employee_cedula);
	    	
	      });
	});
</script>
</html>