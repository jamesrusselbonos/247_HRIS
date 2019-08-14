@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="add_employee_tab">
			<div class="row">
				<div class="col-lg-3">
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
				<div class="col-lg-9">
					<nav>
						<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-employee-tab" data-toggle="tab" href="#nav-employee" role="tab" aria-controls="nav-employee" aria-selected="true">Employee Info</a>
							<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact Info</a>
							<a class="nav-item nav-link" id="nav-emergency-tab" data-toggle="tab" href="#nav-emergency" role="tab" aria-controls="nav-emergency" aria-selected="false">Emergency Info</a>
							<a class="nav-item nav-link" id="nav-job-tab" data-toggle="tab" href="#nav-job" role="tab" aria-controls="nav-job" aria-selected="false">Job</a>
							<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Background</a>
							<a class="nav-item nav-link" id="nav-record-tab" data-toggle="tab" href="#nav-record" role="tab" aria-controls="nav-record" aria-selected="false">Records</a>
						</div>
					</nav>
					<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-employee" role="tabpanel" aria-labelledby="nav-home-tab">
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
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Username</label>
								   <input type="text" name="uname" class="form-control" >
								</div>

								<div class="form-group col-md-4">
								  <label>Password</label>
								  <input type="text" name="pword" class="form-control" >
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
								  <label>Role</label>
								   <select>
								  	<option value="2">Employee</option>
								    <option value="1">Admin</option>
								  </select>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
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
						</div>
						<div class="tab-pane fade" id="nav-emergency" role="tabpanel" aria-labelledby="nav-emergency-tab">
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
						</div>
						<div class="tab-pane fade" id="nav-job" role="tabpanel" aria-labelledby="nav-job-tab">
							
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
						</div>
						<div class="tab-pane fade" id="nav-record" role="tabpanel" aria-labelledby="nav-record-tab">

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
					<button style="bottom: 50px; right: 50px; position: fixed;" type="button" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
				</div>
			</div>
		</div>
	</div>
@endsection