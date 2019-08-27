@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="manage_employee">
			<div class="container">
				<div class="card">
				    

				    <div class="card-body">
				   
				        <table class="table table-bordered" id="DataTable">
				          <thead>
				            <tr>
				              <th scope="col">Name</th>
				              <th scope="col">Position</th>
				              <th scope="col">Employee ID</th>
				              <th scope="col" style="width: 300px;">Manage</th>
				            </tr>
				          </thead>
				          <tbody>
				      
				           @foreach($list as $lt)
				               <tr>
				              <th scope="row">
				              	{{$lt->lastname}}, {{$lt->firstname}} {{$lt->middle_name}}
				              </th>
				              <td>
				              	{{$lt->job_title}}
				              </td>
				              <td>
				              	{{$lt->employee_id}}
				              </td>
				               
				             <td style="width: 300px;">
				             	<span style="float: right;">
				             		<button type="button" id="{{ $lt->id }}" class="btn btn-success view_emp" data-toggle="modal" data-target="#view_modal"
				             			p_id="{{ $lt->id }}"
						               	p_employeeid="{{ $lt->employee_id }}"
						               	p_gender="{{ $lt->gender }}"
						               	p_fname="{{ $lt->firstname }}"
						               	p_mname="{{ $lt->middle_name }}"
						               	p_lname="{{ $lt->lastname }}"
						               	p_department="{{ $lt->department_name }}"
						               	p_status="{{ $lt->job_status }}"
						               	p_picture="{{ $lt->employee_img }}"
						               	p_address="{{ $lt->address }}"
						               	p_city="{{ $lt->city }}"
						               	p_province="{{ $lt->province }}"
						               	p_country="{{ $lt->country }}"
						               	p_zip="{{ $lt->zip_code }}"
						               	p_hnumber="{{ $lt->home_number }}"
						               	p_mnumber="{{ $lt->mobile_number }}"
						               	p_wemail="{{ $lt->work_email }}"
						               	p_pemail="{{ $lt->personal_email }}"
						               	p_bday="{{ $lt->birthday }}"
						               	p_ssnsin="{{ $lt->SIN_SSN }}"
						               	p_ename="{{ $lt->emergency_name }}"
						               	p_relationship="{{ $lt->relationship }}"
						               	p_eaddress="{{ $lt->emergency_address }}"
						               	p_enumber="{{ $lt->emergency_number }}"
						               	p_jobtitle="{{ $lt->job_title }}"
						               	p_jobdesc="{{ $lt->job_description }}"
						               	p_joblevel="{{ $lt->job_level }}"
						               	p_jobposition="{{ $lt->job_position }}"
						               	p_datehired="{{ $lt->date_hired }}"
						               	p_dateterminated="{{ $lt->date_terminated }}"
						               	p_sss="{{ $lt->SSS_no }}"
						               	p_pagibig="{{ $lt->philhealth_no }}"
						               	p_philhealth="{{ $lt->pagibig_no }}"
						               	p_tin="{{ $lt->TIN_no }}"
						               	p_nbinumber="{{ $lt->NBI_no }}"
						               	p_diploma="{{ $lt->diploma }}"
						               	p_medical="{{ $lt->medical }}"
						               	p_tor="{{ $lt->TOR }}"
						               	p_birthcert="{{ $lt->birth_cert }}"
						               	p_bclearance="{{ $lt->brgy_clearance }}"
						              	p_cedula="{{ $lt->cedula }}"
				             		><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; View</button>

     								<button type="button" id="{{ $lt->id }}" class="btn btn-primary edit_emp" data-toggle="modal" data-target="#edit_modal"
     									ep_id="{{ $lt->id }}"
						               	ep_employeeid="{{ $lt->employee_id }}"
						               	ep_gender="{{ $lt->gender }}"
						               	ep_fname="{{ $lt->firstname }}"
						               	ep_mname="{{ $lt->middle_name }}"
						               	ep_lname="{{ $lt->lastname }}"
						               	ep_department="{{ $lt->department_id }}"
						               	ep_status="{{ $lt->status_id }}"
						               	ep_picture="{{ $lt->employee_img }}"
						               	ep_address="{{ $lt->address }}"
						               	ep_city="{{ $lt->city }}"
						               	ep_province="{{ $lt->province }}"
						               	ep_country="{{ $lt->country }}"
						               	ep_zip="{{ $lt->zip_code }}"
						               	ep_hnumber="{{ $lt->home_number }}"
						               	ep_mnumber="{{ $lt->mobile_number }}"
						               	ep_wemail="{{ $lt->work_email }}"
						               	ep_pemail="{{ $lt->personal_email }}"
						               	ep_bday="{{ $lt->birthday }}"
						               	ep_ssnsin="{{ $lt->SIN_SSN }}"
						               	ep_ename="{{ $lt->emergency_name }}"
						               	ep_relationship="{{ $lt->relationship }}"
						               	ep_eaddress="{{ $lt->emergency_address }}"
						               	ep_enumber="{{ $lt->emergency_number }}"
						               	ep_jobtitle="{{ $lt->job_id }}"
						               	ep_jobdesc="{{ $lt->job_description }}"
						               	ep_joblevel="{{ $lt->job_level_id }}"
						               	ep_jobposition="{{ $lt->job_position_id }}"
						               	ep_datehired="{{ $lt->date_hired }}"
						               	ep_dateterminated="{{ $lt->date_terminated }}"
						               	ep_sss="{{ $lt->SSS_no }}"
						               	ep_pagibig="{{ $lt->philhealth_no }}"
						               	ep_philhealth="{{ $lt->pagibig_no }}"
						               	ep_tin="{{ $lt->TIN_no }}"
						               	ep_nbinumber="{{ $lt->NBI_no }}"
						               	ep_diploma="{{ $lt->diploma }}"
						               	ep_medical="{{ $lt->medical }}"
						               	ep_tor="{{ $lt->TOR }}"
						               	ep_birthcert="{{ $lt->birth_cert }}"
						               	ep_bclearance="{{ $lt->brgy_clearance }}"
						              	ep_cedula="{{ $lt->cedula }}"
     								><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>

     								<a href="/manage_employee/{{ $lt->id }}""><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button></a>
     							</span>
				             </td>
				            </tr>
				           @endforeach

				          </tbody>
				        </table>
				       
				    </div>
				</div>
		</div>
	</div>

	<div class="modal fade edit_modal" id="edit_modal" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-xl">
		    <div class="modal-content">
		      <div class="modal-header">
		         <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
		         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		           <span aria-hidden="true">&times;</span>
		         </button>
		       </div>
		       <div class="modal-body">
		           <form method="POST" action="{{route('admin.employee_list.edit')}}">
		           	{{ csrf_field() }}
		             <div style="padding-left: 50px; padding-right: 50px;" class="row">
		             	<div class="col-lg-4">
		             		<img class="profile_photo" src="/img/profile.png">
		             		<div class="input_photo">
		             			<h6>Upload a photo</h6>
		             			<div class="input-group">
		             			    <span class="input-group-btn" style="margin-right:70px;">
		             			        <span class="btn btn-default btn-file">
		             			           <!-- <button class="btn btn-outline-secondary"  type="button"> Browse… </button> --> <input type="file"  name="edit_product_image" id="edi_imgInp">
		             			        </span>
		             			    </span>
		             			   <!--  <input type="text" style="cursor:not-allowed;"  class="form-control" readonly> -->
		             			</div>
		             		</div>
		             	</div>
		             	<div class="col-lg-8">
		             		<h3 style="color: #9e9e9e;"><I></I>Information</h3>
	             			<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Employee ID</label>
								  <input type="text" name="edit_employee_id" id="edit_employee_id" class="form-control" >
								  <input type="hidden" name="edit_id" id="edit_id" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Gender</label>
								  <select id="edit_egender" name="edit_egender">
								    <option value="Male">Male</option>
								    <option value="Female">Female</option>
								  </select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>First Name</label>
								  <input type="text" name="edit_efname" id="edit_fname" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Middle Name</label>
								  <input type="text" name="edit_emname" id="edit_emname" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Last Name</label>
								  <input type="text" name="edit_elname" id="edit_elname" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Department</label>
								  <select id="edit_edepartmant" name="edit_edepartmant">
								  	@foreach($e_depart as $dlist)
								  		<option value="{{$dlist->id}}">{{$dlist->department_name}}</option>
								  	@endforeach
								  </select>
								</div>
								<div class="form-group col-md-4">
								  <label>Status</label>
								  <select id="edit_estatus" name="edit_estatus">
								  	@foreach($e_status as $slist)
								  		<option value="{{$slist->id}}">{{$slist->job_status}}</option> 
								  	@endforeach
								  </select>
								  <!-- <input type="text" name="edit_estatus" id="edit_estatus" class="form-control" > -->
								</div>
							</div>
							<h3 style="color: #9e9e9e;">Contact Info</h3>
							<div style="margin-top: 30px;" class="form-row">
								<div class="form-group col-md-4">
								  <label>Address</label>
								  <input type="text" name="edit_eaddress" id="edit_eaddress" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>City</label>
								  <input type="text" name="edit_ecity" id="edit_ecity" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Province</label>
								  <input type="text" name="edit_eprovince" id="edit_eprovince" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Country</label>
								  <input type="text" name="edit_ecountry" id="edit_ecountry" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Postal / ZIP Code</label>
								  <input type="text" name="edit_ezip" id="edit_ezip" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Home Phone Number</label>
								  <input type="text" name="edit_ehnumber" id="edit_ehnumber" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Mobile Phone Number</label>
								  <input type="text" name="edit_emnumber" id="edit_emnumber" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Work Email Address</label>
								  <input type="text" name="edit_ewemail" id="edit_ewemail" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Personal Email Address</label>
								  <input type="text" name="edit_epemail" id="edit_epemail" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Birthday</label>
								  <input type="date" name="edit_ebday" id="edit_ebday" max="3000-12-31" 
								          min="1000-01-01" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>SIN / SSN</label>
								  <input type="text" name="edit_essnsin" id="edit_essnsin" class="form-control" >
								</div>
							</div>
							<h3 style="color: #9e9e9e;">Emergency Contact Info</h3>
							<div style="margin-top: 30px;" class="form-row">
								<div class="form-group col-md-4">
								  <label>Name</label>
								  <input type="text" name="edit_emgname" id="edit_emgname" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Relationship</label>
								  <input type="text" name="edit_emgrelationship" id="edit_emgrelationship" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Address</label>
								  <input type="text" name="edit_emgaddress" id="edit_emgaddress" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Phone Number</label>
								  <input type="text" name="edit_emgnumber" id="edit_emgnumber" class="form-control" >
								</div>
							</div>
							<h3 style="color: #9e9e9e;">Job</h3>
							<div style="margin-top: 30px;" class="form-row">
								<div class="form-group col-md-4">
								  <label>Job Title</label></br>
								  <select id="edit_ejobtitle" name="edit_ejobtitle">
								  	@foreach($e_jobs as $jlist)
								  		<option value="{{$jlist->id}}">{{$jlist->job_title}}</option> 
								  	@endforeach
								  </select>
								  <!-- <select id="edit_ejobtitle">
								    <option value="ecommerce">E-Commerce Support Specialist</option>
								    <option value="web_dev">Web Developer</option>
								    <option value="graphics_artist">Graphic Artist</option>
								    <option value="social_media_assistant">Social Media Assistant</option>
								  </select> -->
								</div>

								<div class="form-group col-md-4">
								  <label>Job Description</label>
								  <input type="text" name="edit_ejobdesc" id="edit_ejobdesc" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Job Level</label>
								  <select id="edit_ejoblevel" name="edit_ejoblevel">
								  	@foreach($e_level as $llist)
								  		<option value="{{$llist->id}}">{{$llist->job_level}}</option> 
								  	@endforeach
								  </select>
								 <!--  <input type="text" name="edit_ejoblevel" id="edit_ejoblevel" class="form-control" > -->
								</div>

								<div class="form-group col-md-4">
								  <label>Position</label>
								   <select id="edit_ejobposition" name="edit_ejobposition">
								  	@foreach($e_position as $plist)
								  		<option value="{{$plist->id}}">{{$plist->job_position}}</option> 
								  	@endforeach
								  </select>
								 <!--  <input type="text" name="edit_ejobposition" id="edit_ejobposition" class="form-control" > -->
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Date Hired</label>
								  <input type="date" name="edit_edatehired" id="edit_edatehired" max="3000-12-31" 
								          min="1000-01-01" class="form-control">
								</div>

								<div class="form-group col-md-4">
								  <label>Date Terminated</label>
								  <input type="date" name="edit_edateterminated" id="edit_edateterminated" max="3000-12-31" 
								          min="1000-01-01" class="form-control">
								</div>
							</div>
							<h3 style="color: #9e9e9e;">Record</h3>
								<div style="margin-top: 30px;" class="form-row">
									<div class="form-group col-md-4">
									  <label>SSS</label>
									  <input type="text" name="edit_esss" id="edit_esss" class="form-control" >
									</div>

									<div class="form-group col-md-4">
									  <label>PhilHealth</label>
									  <input type="text" name="edit_ephilhealth" id="edit_ephilhealth" class="form-control" >
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
									  <label>Pagibig</label>
									  <input type="text" name="edit_epagibig" id="edit_epagibig" class="form-control" >
									</div>

									<div class="form-group col-md-4">
									  <label>TIN</label>
									  <input type="text" name="edit_etin" id="edit_etin" class="form-control" >
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
									  <label>NBI Number</label>
									  <input type="text" name="edit_enbi" id="edit_enbi" class="form-control" >
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
									  <label>Diploma</label></br>
									  <label for="male">Yes</label>
							          <input type="radio" name="edit_ediploma" id="diploma_passed" value="Passed" >
							          <label for="female">No</label>
							          <input type="radio" name="edit_ediploma" id="diploma_none" value="None">
									</div>
									<div class="form-group col-md-4">
									  <label>Medical Certificate</label></br>
									  <label for="male">Yes</label>
							          <input type="radio" name="edit_emedical" id="medical_passed" value="Passed" checked>
							          <label for="female">No</label>
							          <input type="radio" name="edit_emedical" id="medical_none" value="None">
									</div>
								</div>
								
								<div class="form-row">
									<div class="form-group col-md-4">
									  <label>TOR</label></br>
									  <label for="male">Yes</label>
							          <input type="radio" name="edit_etor" id="tor_passed" value="Passed" checked>
							          <label for="female">No</label>
							          <input type="radio" name="edit_etor" id="tor_none" value="None">
									</div>
									<div class="form-group col-md-4">
									  <label>Birth Certificate</label></br>
									  <label for="male">Yes</label>
							          <input type="radio" name="edit_ebirth" id="birth_cert_passed" value="Passed" checked>
							          <label for="female">No</label>
							          <input type="radio" name="edit_ebirth" id="birth_cert_none" value="None">
									</div>
								</div>
								
								<div class="form-row">
									<div class="form-group col-md-4">
									  <label>Brgy. Clearance</label></br>
									  <label for="male">Yes</label>
							          <input type="radio" name="edit_eclearance" id="clearance_passed" value="Passed" checked>
							          <label for="female">No</label>
							          <input type="radio" name="edit_eclearance" id="clearance_none" value="None">
									</div>
									<div class="form-group col-md-4">
									  <label>Cedula</label></br>
									  <label for="male">Yes</label>
							          <input type="radio" name="edit_ecedula" id="cedula_passed" value="Passed" checked>
							          <label for="female">No</label>
							          <input type="radio" name="edit_ecedula" id="cedula_none" value="None">
									</div>
								</div>
								
			             	</div>
		             	</div>
		             	<div class="modal-footer">
				          <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
				           <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
				         </div>
		           </form>
		         </div>   
		    </div>
	    </div>
	</div>

	<!-- Large modal -->
	<div class="modal fade view_modal" id="view_modal" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-xl">
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
					<div style="text-align: center;" class="col-lg-12">
						<img class="profile_photo" src="/img/profile.png">
						<input type="hidden" class="form-control e_pic" rows="5" id="e_pic" name="e_pic"></input>
					</div>
					<div style="padding-top: 50px;" class="col-lg-12 profile_list">
						<h2 id="elist_lname"></h2>, <h2 id="elist_fname"></h2> <h2 id="elist_mname"></h2>
						<h5 id="elist_position"></h5>
						<h6 id="elist_id"></h6>
						<input type="hidden" class="form-control e_id" rows="5" id="e_id" name="e_id"></input>
					</div>
				</div>
				<div style="margin-top: 50px;" class="row employee_list_display_row">
					<h3 style="color: #9e9e9e;">Information</h3>
					
					<div style="padding-top: 20px;" class="col-lg-12">
						<div class="row">
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6 id="">Address:</h6>	
									</div>
									<div class="col-lg-8">
										<strong><h6 id="elist_address"></h6></strong>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>City:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_city"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Province:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_province"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Country:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_country"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Birthday:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_bday"></h6>	
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6>Department:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_department"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Status:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_status"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Gender:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_gender"></h6>	
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
										<h6 id="elist_zip"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Home Number:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_hnumber"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Phone Number:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_pnumber"></h6>	
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6>Work Email:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_wemail"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Personal Email:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_pemail"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>SIN / SSN:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_ssn_sin"></h6>	
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
										<h6 id="elist_ename"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Address:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_eaddress"></h6>	
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6>Relationship:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_relationship"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Phone Number:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_enumber"></h6>	
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
										<h6 id="elist_job"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Job Level:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_staff"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Job Description:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_jdesc"></h6>	
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6>Date Hired:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_hired"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Date Terminated:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_terminated"></h6>	
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
										<h6 id="elist_sss"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Pagibig Number:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_pagibig"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>PhilHealth Number:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_philhealth"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>TIN Number:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_TIN"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>NBI Number:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_NBI"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Diploma:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_diploma"></h6>	
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-4">
										<h6>Medical Certificate:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_medical"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>TOR:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_TOR"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Birth Certificate:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_bcert"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Brgy. Clearance:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_bclearance"></h6>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h6>Cedula:</h6>	
									</div>
									<div class="col-lg-8">
										<h6 id="elist_cedula"></h6>	
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