@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="employee_list">
			<div class="row">
				<div class="col-lg-4">
					<div class="emp_list">
						<div class="row emp_list">
							<input type="text" name="search_emp" class="form-control search_emp" placeholder="Search Employee" >
						</div>
						<div class="list">
							<div style="margin-top: 20px;">
								<div class="row">
									@foreach($list as $lt)
										<div class="col-lg-3">
											<img class="profile_thumb" src="/img/profile.png">
										</div>
										<div class="col-lg-9 profile_list">
											<h5>{{$lt->lastname}}, {{$lt->firstname}} {{$lt->middle_name}}</h3>
											<p>{{$lt->job_title}}, {{$lt->employee_id}}</p>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 employee_list_display">
					<div class="row">
						<div class="col-lg-4">
							<img class="profile_photo" src="/img/profile.png">
						</div>
						<div style="padding-top: 50px;" class="col-lg-8 profile_list">
							<h1>Adrian Bas Benitez</h1>
							<h3>Web Developer</h3>
							<h6>247-OPM-0001</h6>
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
											<h6>0000 Sample St. Brgy</h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>City:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>Legazpi City</h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>Province:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>Albay</h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>Gender:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>Male</h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>Gender:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>Undifined</h6>	
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="row">
										<div class="col-lg-4">
											<h6>Company:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>24/7 Virtual Agent Philippines Inc. </h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>Department:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>Web Development </h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>Status:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>Regular </h6>	
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
											<h6>0000</h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>Home Number:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>09000000000</h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>Phone Number:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>09099999999</h6>	
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="row">
										<div class="col-lg-4">
											<h6>Business Email:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>b.example@247virtualagent.com </h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>Personal Email:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>b.example@gmail.com </h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>SIN / SSN:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>0000 </h6>	
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
											<h6>Juan Dela Cruz</h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>Address:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>Legazpi City</h6>	
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="row">
										<div class="col-lg-4">
											<h6>Relationship:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>Father </h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>Phone Number:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>09090909090 </h6>	
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
											<h6>Web Development</h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>Job Level:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>Staff</h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>Date Hired:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>January 1, 2019</h6>	
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="row">
										<div class="col-lg-4">
											<h6>Job Description:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>Position:</h6>	
										</div>
										<div class="col-lg-8">
											<h6>Web Developer </h6>	
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<h6>Date Terminated:</h6>	
										</div>
										<div class="col-lg-8">
											<h6> </h6>	
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