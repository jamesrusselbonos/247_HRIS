@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="container">
			<div class="employee_list">
			<div class="row">
				<div class="col-lg-12">
					<div class="emp_list">
						<div class="row emp_list">
							<input type="text" name="search_emp" class="form-control search_emp" placeholder="Search Employee" >
						</div>
						<div class="list">
							<div style="margin-top: 20px;">
								<div class="row">
									@foreach($list as $lt)
										<div class="col-lg-2">
											<img class="profile_thumb" src="/img/profile.png">
										</div>
										<div style="padding-top: 10px;" class="col-lg-7 profile_list">
											<h5>{{$lt->lastname}}, {{$lt->firstname}} {{$lt->middle_name}}</h3>
											<p>{{$lt->job_title}}, {{$lt->employee_id}}</p>
											<p style="margin-top: -15px;">{{$lt->job_level}}, {{$lt->job_status}}</p>
										</div>
										<div style="padding-top: 20px;" class="col-lg-3">
											<button style="float: right;" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; View</button>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- Large modal -->
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <!-- <h5 class="modal-title" id="exampleModalLongTitle">View Employee</h5> -->
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>	
	      <div class="modal-body">
	      	<div class="col-lg-12 employee_list_display">
				<div class="row">
					<div class="col-lg-4">
						<img class="profile_photo" src="/img/profile.png">
					</div>
					<div style="padding-top: 50px;" class="col-lg-8 profile_list">
						<h1 id="elist_name">Adrian Bas Benitez</h1>
						<h3 id="elist_position">Web Developer</h3>
						<h6 id="elist_id">247-OPM-0001</h6>
					</div>
				</div>
				<div style="margin-top: 50px;" class="row employee_list_display_row">
					<h3 style="color: #9e9e9e;">Information</h3>
					
					<div style="padding-top: 20px;" class="col-lg-12">
						<div class="row">
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6>Address:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_address">0000 Sample St. Brgy</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>City:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_city">Legazpi City</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Province:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_province">Albay</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Gender:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_gender">Male</h6>	
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6>Department:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_department">Web Development </h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Status:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_status">Regular </h6>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="padding-top: 20px;"  class="col-lg-12">
						<h3 style="color: #9e9e9e;">Contact Info</h3>

						<div style="padding-top: 20px;" class="row">
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6>Postal / ZIP Code:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_zip">0000</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Home Number:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_hnumber">09000000000</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Phone Number:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_pnumber">09099999999</h6>	
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6>Work Email:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_wemail">b.example@247virtualagent.com </h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Personal Email:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_pemail">b.example@gmail.com </h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>SIN / SSN:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_ssn_sin">0000 </h6>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="padding-top: 20px;"  class="col-lg-12">
						<h3 style="color: #9e9e9e;">Emergency Contact Info</h3>

						<div style="padding-top: 20px;" class="row ">
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6>Name:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_ename">Juan Dela Cruz</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Address:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_eaddress">Legazpi City</h6>	
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6>Relationship:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_relationship">Father </h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Phone Number:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_enumber">09090909090 </h6>	
									</div>
								</div>
							</div>
						</div>
						<div style="padding-top: 20px;"  class="col-lg-12">
						<h3 style="color: #9e9e9e;">Job</h3>

						<div style="padding-top: 20px;" class="row ">
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6>Job Title:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_job">Web Development</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Job Level:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_staff">Staff</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Job Description:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_jdesc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h6>	
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6>Date Hired:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_hired">January 1, 2019</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Date Terminated:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_terminated"> </h6>	
									</div>
								</div>
							</div>
						</div>
						<div style="padding-top: 20px;" class="row ">
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6>SSS Number:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_sss">00000000000</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Pagibig Number:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_pagibig">00000000000</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>PhilHealth Number:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_philhealth">00000000000</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>TIN Number:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_TIN">00000000000</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>NBI Number:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_NBI">00000000000</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Diploma:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_diploma">Passed</h6>	
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6>Medical Certificate:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_medical">Passed</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>TOR:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_TOR">Passed</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Birth Certificate:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_bcert">Passed</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Brgy. Clearance:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_bclearance">Passed</h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6 id="elist_cedula">Cedula:</h6>	
									</div>
									<div class="col-lg-8">
										<h6>Passed</h6>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	      </div>
	    </div>
	  </div>
	</div>
@endsection