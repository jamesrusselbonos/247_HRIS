<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin Dashboard | 247 HRIS</title>

	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/4c6c819f60.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css">
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
				<h6 style="padding-left: 20px;">Navigation</h6>	
					<ul>
						<li>
							<div style="margin-top: 20px;" class="row nav_link active_nav">
								<div class="col-lg-2">
									<i class="fa fa-inbox" aria-hidden="true"></i>
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
										<li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/schedule"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; Schedule</a>
										</li>
										<!-- <li style="padding-top: 10px;">
											<a style="font-size: 16px;" href="/employee_list"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; Manage Timesheets</a>
										</li> -->
									</ul>
								</div>
							</div>
						</li>
						<li>
							<div class="row nav_link">
								<div class="col-lg-2">
									<i style="color: #fff;" class="fa fa-file-text-o" aria-hidden="true"></i>
								</div>
								<div class="col-lg-10">
									<a style="font-size: 15px;" href="/memo">Memo</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="row config">
				<div class="col-lg-12">
					<h6 style="padding-left: 20px;">Configurations</h6>
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
							<h6><a href="/admin" style="color: #000;">ADMIN DASHBOARD</a></h6>
						</div>
						<div class="col-lg-6">
							<ul style="list-style: none; padding-top: 20px; font-size: 14px;">
								<li style="float: right;" class="nav-item dropdown">
	                                <a style="color: #000;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
	                                     <span><i class="fa fa-user-circle" aria-hidden="true"></i> &nbsp;{{ Auth::user()->name }} <i class="fa fa-caret-down" aria-hidden="true"></i></span>
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

	      $('#DataTable').DataTable({
	      	columnDefs: [
	      	           {
	      	               targets: [ 0, 1, 2 ],
	      	               className: 'mdl-data-table__cell--non-numeric'
	      	           }
	      	       ]
	      });
	      $('#addDataTable').DataTable({
	      	columnDefs: [
	      	           {
	      	               targets: [ 0, 1, 2 ],
	      	               className: 'mdl-data-table__cell--non-numeric'
	      	           }
	      	       ]
	      });

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
	    	$('.profile_photo').attr('src',employee_picture);
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
	    	$('#elist_bclearance').html(employee_bclearance);
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
	    	
	    	$('#edit_id').val(edit_id);
	    	$('#edit_employee_id').val(edit_employee_id);
	    	$('#edit_egender').val(edit_employee_gender);
	    	$('#edit_fname').val(edit_employee_fname);
	    	$('#edit_emname').val(edit_employee_mname);
	    	$('#edit_elname').val(edit_employee_lname);
	    	$('#edit_edepartmant').val(edit_employee_department);
	    	$('#edit_estatus').val(edit_employee_status);
	    	$('.profile_photo').attr('src',edit_employee_picture);
	    	$('#display_img_modal').val(edit_employee_picture);
	    	$('#edit_eaddress').val(edit_employee_address);
	    	$('#edit_ecity').val(edit_employee_city);
	    	$('#edit_eprovince').val(edit_employee_province);
	    	$('#edit_ecountry').val(edit_employee_country);
	    	$('#edit_ezip').val(edit_employee_zip);
	    	$('#edit_ehnumber').val(edit_employee_hnumber);
	    	$('#edit_emnumber').val(edit_employee_mnumber);
	    	$('#edit_ewemail').val(edit_employee_wemail);
	    	$('#edit_epemail').val(edit_employee_pemail);
	    	$('#edit_ebday').val(edit_employee_bday);
	    	$('#edit_essnsin').val(edit_employee_ssnsin);
	    	$('#edit_emgname').val(edit_employee_ename);
	    	$('#edit_emgrelationship').val(edit_employee_relationship);
	    	$('#edit_emgaddress').val(edit_employee_eaddress);
	    	$('#edit_emgnumber').val(edit_employee_enumber);
	    	$('#edit_ejobtitle').val(edit_employee_jobtitle);
	    	$('#edit_ejobdesc').val(edit_employee_jobdesc);
	    	$('#edit_ejoblevel').val(edit_employee_joblevel);
	    	$('#edit_ejobposition').val(edit_employee_jobposition);
	    	$('#edit_edatehired').val(edit_employee_datehired);
	    	$('#edit_edateterminated').val(edit_employee_dateterminated);
	    	$('#edit_esss').val(edit_employee_sss);
	    	$('#edit_ephilhealth').val(edit_employee_philhealth);
	    	$('#edit_epagibig').val(edit_employee_pagibig);
	    	$('#edit_etin').val(edit_employee_tin);
	    	$('#edit_enbi').val(edit_employee_nbinumber);
	    	$('#elist_TIN').val(edit_employee_tin);
	    	if(edit_employee_diploma == "Passed"){
	    		$( "#diploma_passed" ).prop( "checked", true );
	    	}
	    	else{
	    		$( "#diploma_none" ).prop( "checked", true );
	    	}
	    	
	    	// $('#edit_ediploma').prop('checked' , true);
	    	// $('#edit_emedical').val(edit_employee_medical);
	    	if(edit_employee_medical == "Passed"){
	    		$( "#medical_passed" ).prop( "checked", true );
	    	}
	    	else{
	    		$( "#medical_none" ).prop( "checked", true );
	    	}
	    	// $('#edit_etor').val(edit_employee_tor);
	    	if(edit_employee_tor == "Passed"){
	    		$( "#tor_passed" ).prop( "checked", true );
	    	}
	    	else{
	    		$( "#tor_none" ).prop( "checked", true );
	    	}
	    	// $('#edit_ebirth').val(edit_employee_birthcert);
	    	if(edit_employee_birthcert == "Passed"){
	    		$( "#birth_cert_passed" ).prop( "checked", true );
	    	}
	    	else{
	    		$( "#birth_cert_none" ).prop( "checked", true );
	    	}
	    	// $('#edit_eclearance').val(edit_employee_bclearance);
	    	if(edit_employee_bclearance == "Passed"){
	    		$( "#clearance_passed" ).prop( "checked", true );
	    	}
	    	else{
	    		$( "#clearance_none" ).prop( "checked", true );
	    	}
	    	// $('#edit_ecedula').val(edit_employee_cedula);
	    	if(edit_employee_cedula == "Passed"){
	    		$( "#cedula_passed" ).prop( "checked", true );
	    	}
	    	else{
	    		$( "#cedula_none" ).prop( "checked", true );
	    	}
	    	
	      });

		 $('.editemp_btn').on('click', function(){
		 	$('#editemp_img').css("display", "block");
		 	$('.display_img').css("display", "none");
		 });
			
		  $('.memo_view').on('click',  function(event){
		  	var view_vm_id = $(this).attr('v_memoid'); 
		  	var view_vm_title = $(this).attr('v_memo'); 
		  	var view_vm_subject = $(this).attr('v_subject'); 
		  	var view_vm_attachment = $(this).attr('v_attachment'); 
		  	var view_vm_date = $(this).attr('v_memodate'); 

		  	console.log(view_vm_attachment);

		  	$('#vmodal_memoid').val(view_vm_id);
		  	$('#vmodal_memo').html(view_vm_title);
		  	$('#vmodal_subject').html(view_vm_subject);
		  	$('#vmodal_filename').html(view_vm_attachment);
		  	$('#vmodal_memodate').html(view_vm_date);
		  	$('.memo_download').attr('href', 'documents/' + view_vm_attachment);
		  	$('.memo_download').attr('download', view_vm_attachment);

		  });
		  
		   $('.send_memo').on('click',  function(event){
		  	var send_m_id = $(this).attr('s_memoid'); 
		  	var send_m_title = $(this).attr('s_memo'); 
		  	var send_m_subject = $(this).attr('s_subject'); 
		  	var send_m_attachment = $(this).attr('s_attachment'); 
		  	var send_m_date = $(this).attr('s_memodate'); 

		  	console.log(send_m_attachment);

		  	$('#smodal_memoid').val(send_m_id);
		  	$('#smodal_memo').html(send_m_title);
		  	$('#smodal_subject').html(send_m_subject);
		  	$('#smodal_filename').html(send_m_attachment);
		  	$('#smodal_memodate').html(send_m_date);
		  	// $('.memo_download').attr('href', 'documents/' + view_vm_attachment);
		  	// $('.memo_download').attr('download', view_vm_attachment);

		  });

		   $('.edit_memo').on('click',  function(event){
		  	var edit_m_id = $(this).attr('e_memoid'); 
		  	var edit_m_title = $(this).attr('e_memo'); 
		  	var edit_m_subject = $(this).attr('e_subject'); 
		  	var edit_m_attachment = $(this).attr('e_attachment'); 
		  	var edit_m_date = $(this).attr('e_memodate'); 

		  	console.log(edit_m_attachment);

		  	$('#edit_memo_id').val(edit_m_id);
		  	$('#edit_memo_title').val(edit_m_title);
		  	$('#edit_memo_subject').val(edit_m_subject);
		  	$('#edit_memo_file').val(edit_m_attachment);
		  	$('#edit_memo_date').val(edit_m_date);
		  	// $('.memo_download').attr('href', 'documents/' + view_vm_attachment);
		  	// $('.memo_download').attr('download', view_vm_attachment);

		  });

		   $('.sched_view').on('click',  function(event){
		  	var view_schedid = $(this).attr('v_schedid'); 
		  	var view_sched_empid = $(this).attr('v_sched_empid'); 
		  	var view_sched_fname = $(this).attr('v_sched_fname'); 
		  	var view_sched_lname = $(this).attr('v_sched_lname'); 
		  	var view_sched_mname = $(this).attr('v_sched_mname'); 
		  	var view_sched_datefrom = $(this).attr('v_sched_datefrom'); 
		  	var view_sched_dateto = $(this).attr('v_sched_dateto'); 
		  	var view_sched_task = $(this).attr('v_sched_task'); 
		  	var view_sched_comment = $(this).attr('v_sched_comment'); 
		  	var view_sched_duration = $(this).attr('v_Sched_duration'); 
		  	var view_sched_other = $(this).attr('v_sched_other'); 

		  	console.log(view_sched_empid);

		  	$('#v_schedid').val(view_schedid);
		  	$('#v_sched_lname').html(view_sched_lname);
		  	$('#v_sched_fname').html(view_sched_fname);
		  	$('#v_sched_mname').html(view_sched_mname);
		  	$('#v_sched_empid').html(view_sched_empid);
		  	$('#v_sched_datefrom').html(view_sched_datefrom);
		  	$('#v_sched_dateto').html(view_sched_dateto);
		  	$('#v_sched_task').html(view_sched_task);
		  	$('#v_sched_comment').html(view_sched_comment);
		  	$('#v_sched_other').html(view_sched_other);
		  	$('#v_sched_duration').html(view_sched_duration);
		  	

		  });

		  $('#btn_send').on('click', function(event){
		  	var mem_id = $('#smodal_memoid').val();
		  	var from = $('#hdn-name').val();
		  	var filename = document.getElementById("smodal_filename").innerHTML;
		  	var mem_tit = document.getElementById("smodal_memo").innerHTML;
		  	var mem_sub = document.getElementById("smodal_subject").innerHTML;
		  	var memoemp_search = $('.memoemp_search').val();
		  	var memo_date = document.getElementById("smodal_memodate").innerHTML;
		  	var token = $("#send_memo .hdn-token").val();
		  	console.log(memoemp_search);

		  		$.post('memo_send',
		  		{'mem_id':mem_id, 'from':from,'filename':filename, 'mem_tit':mem_tit, 'memo_date':memo_date, 
		  		'mem_sub':mem_sub, 'memoemp_search':memoemp_search, '_token':token}, 
		  		function(data){

		  		location.reload();

		  		 }); 
		  });

		$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
		    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		       
		    }

		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('.profile_photo').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#edi_imgInp").change(function(){
		    readURL(this);
		}); 

		$('.memoemp_search').select2({

		});
	});
</script>
</html>