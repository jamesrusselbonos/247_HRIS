@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="row">
			<div class="jumbotron2">
		  		<h1 style="margin-top: 155px;" class="display-6">Add an Employee</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="add_employee_tab" data-simplebar>
					<div class="row employee_forms">
						<form method="POST" action="{{route('admin.add_employee.create')}}" enctype="multipart/form-data">
							<div class="row">
								<div class="col-lg-3 profile_field" style="margin-bottom: 50px;">
									<img class="profile_photo" src="/img/profile.png">
									<div class="input_photo">
										<h6>Upload a photo</h6>
										<div class="input-group">
										    <span class="input-group-btn">
										        <span class="btn btn-default btn-file">
										          <!--  <button class="btn btn-outline-secondary"  type="button"> Browse… </button> -->
										        </span>
										        <input type="file"  name="product_image" id="edi_imgInp">	
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
											<a class="nav-item nav-link" id="nav-attachment-tab" data-toggle="tab" href="#nav-attachment" role="tab" aria-controls="nav-about" aria-selected="false">Attachments</a>
											<a class="nav-item nav-link" id="nav-record-tab" data-toggle="tab" href="#nav-record" role="tab" aria-controls="nav-record" aria-selected="false">Records</a>
										</div>
									</nav>
									<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
										<div class="tab-pane fade show active" id="nav-employee" role="tabpanel" aria-labelledby="nav-home-tab">
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>Employee ID</label>
												  <input type="text" name="employee_id" class="form-control" required >
												</div>

												<div class="form-group col-md-4">
												   <label for="email" class="">{{ __('E-Mail Address') }}</label>

						                            <div class="">
						                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

						                                @error('email')
						                                    <span class="invalid-feedback" role="alert">
						                                        <strong>{{ $message }}</strong>
						                                    </span>
						                                @enderror
						                            </div>
												</div>
												
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
												   <label for="password" class="">{{ __('Password') }}</label>

						                            <div class="">
						                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

						                                @error('password')
						                                    <span class="invalid-feedback" role="alert">
						                                        <strong>{{ $message }}</strong>
						                                    </span>
						                                @enderror
						                            </div>
												</div>

												<div class="form-group col-md-4">
												  <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

						                            <div class="">
						                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
						                            </div>
												</div>
												
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>First Name</label>
												  <input type="text" name="fname" class="form-control"required >
												</div>

												<div class="form-group col-md-4">
												  <label>Middle Name</label>
												  <input type="text" name="m_name" class="form-control" required >
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>Last Name</label>
												  <input type="text" name="lname" class="form-control" required >
												</div>
												<div class="form-group col-md-4">
												  <label>Gender</label>
												  <select name="gender">
												    <option value="Male">Male</option>
												    <option value="Female">Female</option>
												  </select>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>Department</label>
												  <select name="department">
													  	@foreach($departments as $department)
													  	<option value="{{$department->id}}">{{$department->department_name}}</option>
													  	 @endforeach
												  </select>
												</div>

												<div class="form-group col-md-4">
												  <label>Status</label>
													<select name="status">
														 @foreach($statuses as $status)
												    	 <option value="{{$status->id}}">{{$status->job_status}}</option>
												    	  @endforeach
												    </select>
												</div>
											</div>
											<!-- <div class="form-row">
												<div class="form-group col-md-4">
												  <label>Role</label>
												   <select>
												  	<option value="2">Employee</option>
												    <option value="1">Admin</option>
												  </select>
												</div>
												<div class="form-group col-md-4">
												  <label>Username</label>
												   <input type="text" name="uname" class="form-control" >
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>Password</label>
												  <input type="text" name="pword" class="form-control" >
												</div>
												<div class="form-group col-md-4">
												  <label>Confirm password</label>
												   <input type="text" name="cpword" class="form-control" >
												</div>
											</div> -->
										</div>
										<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
											<div style="margin-top: 30px;" class="form-row">
												<div class="form-group col-md-4">
												  <label>Address</label>
												  <input type="text" name="address" class="form-control"  required>
												</div>

												<div class="form-group col-md-4">
												  <label>City</label>
												  <input type="text" name="city" class="form-control" required >
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>Province</label>
												  <input type="text" name="province" class="form-control" required >
												</div>

												<div class="form-group col-md-4">
												  <label>Country</label>
												  <input type="text" name="country" class="form-control" required >
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>Postal / ZIP Code</label>
												  <input type="text" name="zip_code" class="form-control" required>
												</div>

												<div class="form-group col-md-4">
												  <label>Home Phone Number</label>
												  <input type="text" name="h_number" class="form-control" required>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>Mobile Phone Number</label>
												  <input type="text" name="m_number" class="form-control" required >
												</div>
												<div class="form-group col-md-4">
												  <label>Personal Email Address</label>
												  <input type="text" name="p_email" class="form-control" required >
												</div>
											</div>
											<div class="form-row">
												
												<div class="form-group col-md-4">
												  <label>SIN / SSN</label>
												  <input type="text" name="ssn_sin" class="form-control" required >
												</div>
												<div class="form-group col-md-4">
												  <label>Birthday</label>
												  <input type="date" name="bday" max="3000-12-31" 
												          min="1000-01-01" class="form-control">
												</div>
											</div>
											
										</div>
										<div class="tab-pane fade" id="nav-emergency" role="tabpanel" aria-labelledby="nav-emergency-tab">
											<div style="margin-top: 30px;" class="form-row">
												<div class="form-group col-md-4">
												  <label>Name</label>
												  <input type="text" name="e_name" class="form-control" required>
												</div>

												<div class="form-group col-md-4">
												  <label>Relationship</label>
												  <input type="text" name="relationship" class="form-control"required >
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>Address</label>
												  <input type="text" name="e_address" class="form-control" required>
												</div>

												<div class="form-group col-md-4">
												  <label>Phone Number</label>
												  <input type="text" name="e_number" class="form-control"required >
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="nav-job" role="tabpanel" aria-labelledby="nav-job-tab">
											
											<div style="margin-top: 30px;" class="form-row">
												<div class="form-group col-md-4">
												  <label>Job Title</label></br>
												 
												  	<select name="jjob_title" id="jjob_title" class="form-control dynamic" data-dependent="jjob_desc">
												  		 @foreach($jobs as $job)
												    	<option value="{{$job->id}}">{{$job->job_title}}</option>
												    	 @endforeach
												  </select>
												 
												</div>

											</div>
											<div class="form-row">
												<div class="form-group col-md-8">
												  <label>Job Description</label>
												  <textarea name="info_area" id="info_area" cols="60" rows="5"required></textarea>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>Job Level</label>
												 
												 	<select name="job_level">
												 		@foreach($levels as $level)
												    	<option value="{{$level->id}}">{{$level->job_level}}</option>
												    	 @endforeach
												  </select>
												
												</div>

												<div class="form-group col-md-4">
												  <label>Position</label>
												  
												  	<select name="job_position">
												  		@foreach($positions as $position)
												    	<option value="{{$position->id}}">{{$position->job_position}}</option>
												    	@endforeach
												  </select>
												  
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>Date Hired</label>
												  <input type="date" name="d_hired" max="3000-12-31" 
												          min="1000-01-01" class="form-control">
												</div>

												<div class="form-group col-md-4">
												  <label>Date Terminated</label>
												  <input type="date" name="d_terminated" max="3000-12-31" 
												          min="1000-01-01" class="form-control">
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>Salary</label>
												  <input type="text" name="salary" class="form-control" required >
												</div>
												<div class="form-group col-md-4">
												  <label>Allowance</label>
												  <input type="text" name="allowance" class="form-control" required >
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
												  	<label>Leave credits</label>
												  	<input type="text" name="leave_credit" class="form-control" required >
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="nav-attachment" role="tabpanel" aria-labelledby="nav-attachment-tab">
											
											<div style="margin-top: 30px;" class="form-row">
												<div class="form-group col-md-4">
													<label>Diploma</label></br>
	                	  							<input type="file" name="file_diploma" id="file_diploma" />
												</div>
												<div class="form-group col-md-4">
													<label>TOR</label></br>
	                	  							<input type="file" name="file_tor" id="file_tor" />
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
													<label>Brgy. Clearance</label></br>
	                	  							<input type="file" name="file_bclearance" id="file_bclearance" />
												</div>
												<div class="form-group col-md-4">
													<label>Medical Certificate</label></br>
	                	  							<input type="file" name="file_mcert" id="file_mcert" />
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
													<label>Birth Certificate</label></br>
	                	  							<input type="file" name="file_bcert" id="file_bcert" />
												</div>
												<div class="form-group col-md-4">
													<label>Cedula</label></br>
	                	  							<input type="file" name="file_cedula" id="file_cedula" />
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="nav-record" role="tabpanel" aria-labelledby="nav-record-tab">

											<div style="margin-top: 30px;" class="form-row">
												<div class="form-group col-md-4">
												  <label>SSS</label>
												  <input type="text" name="sss_n" class="form-control" required >
												</div>

												<div class="form-group col-md-4">
												  <label>PhilHealth</label>
												  <input type="text" name="philhealth_n" class="form-control" required >
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>Pagibig</label>
												  <input type="text" name="pagibig_n" class="form-control" required >
												</div>

												<div class="form-group col-md-4">
												  <label>TIN</label>
												  <input type="text" name="tin_n" class="form-control" required >
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>NBI Number</label>
												  <input type="text" name="nbi_n" class="form-control" required >
												</div>
											</div>
											<!-- <div class="form-row">
												<div class="form-group col-md-4">
												  <label>Diploma</label></br>
												  <label for="diploma_yes">Yes</label>
										          <input type="radio" name="diploma" id="diploma_yes" value="Passed" checked>
										          <label for="diploma_yes">No</label>
										          <input type="radio" name="diploma" id="diploma_no" value="None">
												</div>
												<div class="form-group col-md-4">
												  <label>Medical Certificate</label></br>
												  <label for="medical_yes">Yes</label>
										          <input type="radio" name="medical" id="medical_yes" value="Passed" checked>
										          <label for="medical_no">No</label>
										          <input type="radio" name="medical" id="medical_no" value="None">
												</div>
											</div>
											
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>TOR</label></br>
												  <label for="TOR_yes">Yes</label>
										          <input type="radio" name="TOR" id="TOR_yes" value="Passed" checked>
										          <label for="TOR_no">No</label>
										          <input type="radio" name="TOR" id="TOR_no" value="None">
												</div>
												<div class="form-group col-md-4">
												  <label>Birth Certificate</label></br>
												  <label for="birth_yes">Yes</label>
										          <input type="radio" name="birth_cert" id="birth_yes" value="Passed" checked>
										          <label for="birth_no">No</label>
										          <input type="radio" name="birth_cert" id="birth_no" value="None">
												</div>
											</div>
											
											<div class="form-row">
												<div class="form-group col-md-4">
												  <label>Brgy. Clearance</label></br>
												  <label for="brgy_yes">Yes</label>
										          <input type="radio" name="brgy" id="brgy_yes" value="Passed" checked>
										          <label for="brgy_no">No</label>
										          <input type="radio" name="brgy" id="brgy_no" value="None">
												</div>
												<div class="form-group col-md-4">
												  <label>Cedula</label></br>
												  <label for="cedula_yes">Yes</label>
										          <input type="radio" name="cedula" id="cedula_yes" value="Passed" checked>
										          <label for="cedula_no">No</label>
										          <input type="radio" name="cedula" id="cedula_no" value="None">
												</div>
											</div> -->
											{{ csrf_field() }}
										</div>
									</div>
									<button style="bottom: 50px; right: 50px; position:absolute;" type="submit" class="btn btn-success btn_create"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
								</div>	
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection