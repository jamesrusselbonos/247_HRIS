@extends('admin')

@section('content')
	<div class="col-lg-12">
		<div class="manage_employee">
			<div class="container">
				<div style="margin-top: 20px; margin-bottom: 20px;" class="row">
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-3">
								<div class="col-lg-4"><img class="profile_thumb" src="/img/profile.png"></div>
							</div>
							<div class="col-lg-9">
								<div class="row">
									<div class="col-lg-12">
										<div class="row"><h2>Adrian Benitez</h2></div>
										<div class="row"><p>Web Developer, 247-OPM-0001</p></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="padding-top: 20px;" class="col-lg-4">
						<span>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
							<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button>
						</span>
					</div>
				</div>
				<div style="margin-top: 20px; margin-bottom: 20px;" class="row">
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-3">
								<div class="col-lg-4"><img class="profile_thumb" src="/img/profile.png"></div>
							</div>
							<div class="col-lg-9">
								<div class="row">
									<div class="col-lg-12">
										<div class="row"><h2>Keno Buiza</h2></div>
										<div class="row"><p>Web Developer, 247-OPM-0001</p></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="padding-top: 20px;" class="col-lg-4">
						<span>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
							<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button>
						</span>
					</div>
				</div>
				<div style="margin-top: 20px; margin-bottom: 20px;" class="row">
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-3">
								<div class="col-lg-4"><img class="profile_thumb" src="/img/profile.png"></div>
							</div>
							<div class="col-lg-9">
								<div class="row">
									<div class="col-lg-12">
										<div class="row"><h2>Adrian Benitez</h2></div>
										<div class="row"><p>Web Developer, 247-OPM-0001</p></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="padding-top: 20px;" class="col-lg-4">
						<span>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
							<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button>
						</span>
					</div>
				</div>
				<div style="margin-top: 20px; margin-bottom: 20px;" class="row">
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-3">
								<div class="col-lg-4"><img class="profile_thumb" src="/img/profile.png"></div>
							</div>
							<div class="col-lg-9">
								<div class="row">
									<div class="col-lg-12">
										<div class="row"><h2>Keno Buiza</h2></div>
										<div class="row"><p>Web Developer, 247-OPM-0001</p></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="padding-top: 20px;" class="col-lg-4">
						<span>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
							<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

@endsection