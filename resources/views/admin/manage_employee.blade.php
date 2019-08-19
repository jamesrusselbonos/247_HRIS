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
				              <th scope="col">Manage</th>
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
				               
				             <td>
				             	<span style="float: right;">
				             		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#view_modal"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; View</button>

     								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>

     								<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button>
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
	  	<div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
		         <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
		         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		           <span aria-hidden="true">&times;</span>
		         </button>
		       </div>
		       <div class="modal-body">
		           <form>
		             <div class="row">
		             	<div class="col-lg-4">
		             		<img class="profile_photo" src="/img/profile.png">
		             		<div class="input_photo">
		             			<h6>Upload a photo</h6>
		             			<div class="input-group">
		             			    <span class="input-group-btn" style="margin-right:70px;">
		             			        <span class="btn btn-default btn-file">
		             			           <!-- <button class="btn btn-outline-secondary"  type="button"> Browse… </button> --> <input type="file"  name="product_image" id="imgInp">
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
								  <input type="text" name="employee_id" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Gender</label>
								  <select>
								    <option value="male">Male</option>
								    <option value="female">Female</option>
								  </select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>First Name</label>
								  <input type="text" name="employee_id" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Middle Name</label>
								  <input type="text" name="gender" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Last Name</label>
								  <input type="text" name="employee_id" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Company</label>
								  <input type="text" name="gender" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Department</label>
								  <select>
								  	<option value="d_web">Web Development</option>
								    <option value="d_FBA">FBA</option>
								  </select>
								</div>
								<div class="form-group col-md-4">
								  <label>Status</label>
								  <input type="text" name="gender" class="form-control" >
								</div>
							</div>
							<h3 style="color: #9e9e9e;">Contact Info</h3>
							<div style="margin-top: 30px;" class="form-row">
								<div class="form-group col-md-4">
								  <label>Address</label>
								  <input type="text" name="employee_id" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>City</label>
								  <input type="text" name="gender" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Province</label>
								  <input type="text" name="employee_id" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Country</label>
								  <input type="text" name="gender" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Postal / ZIP Code</label>
								  <input type="text" name="employee_id" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Home Phone Number</label>
								  <input type="text" name="gender" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Mobile Phone Number</label>
								  <input type="text" name="employee_id" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Work Email Address</label>
								  <input type="text" name="gender" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Personal Email Address</label>
								  <input type="text" name="employee_id" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Birthday</label>
								  <input type="date" name="bday" max="3000-12-31" 
								          min="1000-01-01" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>SIN / SSN</label>
								  <input type="text" name="employee_id" class="form-control" >
								</div>
							</div>
							<h3 style="color: #9e9e9e;">Emergency Contact Info</h3>
							<div style="margin-top: 30px;" class="form-row">
								<div class="form-group col-md-4">
								  <label>Name</label>
								  <input type="text" name="employee_id" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Relationship</label>
								  <input type="text" name="gender" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Address</label>
								  <input type="text" name="employee_id" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Phone Number</label>
								  <input type="text" name="gender" class="form-control" >
								</div>
							</div>
							<h3 style="color: #9e9e9e;">Job</h3>
							<div style="margin-top: 30px;" class="form-row">
								<div class="form-group col-md-4">
								  <label>Job Title</label></br>
								  <select>
								    <option value="ecommerce">E-Commerce Support Specialist</option>
								    <option value="web_dev">Web Developer</option>
								    <option value="graphics_artist">Graphic Artist</option>
								    <option value="social_media_assistant">Social Media Assistant</option>
								  </select>
								</div>

								<div class="form-group col-md-4">
								  <label>Job Description</label>
								  <input type="text" name="gender" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Job Level</label>
								  <input type="text" name="employee_id" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Position</label>
								  <input type="text" name="gender" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Date Hired</label>
								  <input type="date" name="bday" max="3000-12-31" 
								          min="1000-01-01" class="form-control">
								</div>

								<div class="form-group col-md-4">
								  <label>Date Terminated</label>
								  <input type="date" name="bday" max="3000-12-31" 
								          min="1000-01-01" class="form-control">
								</div>
							</div>
							<h3 style="color: #9e9e9e;">Record</h3>
								<div style="margin-top: 30px;" class="form-row">
									<div class="form-group col-md-4">
									  <label>SSS</label>
									  <input type="text" name="employee_id" class="form-control" >
									</div>

									<div class="form-group col-md-4">
									  <label>PhilHealth</label>
									  <input type="text" name="gender" class="form-control" >
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
									  <label>Pagibig</label>
									  <input type="text" name="employee_id" class="form-control" >
									</div>

									<div class="form-group col-md-4">
									  <label>TIN</label>
									  <input type="text" name="gender" class="form-control" >
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
									  <label>NBI Number</label>
									  <input type="text" name="employee_id" class="form-control" >
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
									  <label>Diploma</label></br>
									  <label for="male">Yes</label>
							          <input type="radio" name="gender" id="male" value="male" checked>
							          <label for="female">No</label>
							          <input type="radio" name="gender" id="female" value="female">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
									  <label>Medical Certificate</label></br>
									  <label for="male">Yes</label>
							          <input type="radio" name="gender" id="male" value="male" checked>
							          <label for="female">No</label>
							          <input type="radio" name="gender" id="female" value="female">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
									  <label>TOR</label></br>
									  <label for="male">Yes</label>
							          <input type="radio" name="gender" id="male" value="male" checked>
							          <label for="female">No</label>
							          <input type="radio" name="gender" id="female" value="female">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
									  <label>Birth Certificate</label></br>
									  <label for="male">Yes</label>
							          <input type="radio" name="gender" id="male" value="male" checked>
							          <label for="female">No</label>
							          <input type="radio" name="gender" id="female" value="female">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
									  <label>Brgy. Clearance</label></br>
									  <label for="male">Yes</label>
							          <input type="radio" name="gender" id="male" value="male" checked>
							          <label for="female">No</label>
							          <input type="radio" name="gender" id="female" value="female">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
									  <label>Cedula</label></br>
									  <label for="male">Yes</label>
							          <input type="radio" name="gender" id="male" value="male" checked>
							          <label for="female">No</label>
							          <input type="radio" name="gender" id="female" value="female">
									</div>
								</div>
			             	</div>
		             	</div>
		           </form>
		         </div>
		         <div class="modal-footer">
		          <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
		           <button type="button" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
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
					</div>
					<div style="padding-top: 50px;" class="col-lg-12 profile_list">
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