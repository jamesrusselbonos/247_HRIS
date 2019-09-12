@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="admin_index" style="height: 100vh; overflow-y: auto; padding-bottom: 30px;">
			<div class="">
				<div>
					<div class="row">
						<div class="col-md-3 col-xl-3">
				            <div class="card bg-c-blue order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Employees</h6>
				                    <h4 class="text-right"><i style="font-size: 40px;" class="fa fa-users f-left"></i><span>{{ $emp_count->count() }}</span></h4>
				                    <a href="/add_employee" style="color: #fff;"><p><span class="f-left"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Employee</span></p></a>
				                </div>
				            </div>
				        </div>
				        
				        <div class="col-md-3 col-xl-3">
				            <div class="card bg-c-green order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Departments</h6>
				                    <h4 class="text-right"><i style="font-size: 40px;" class="fa fa-folder-open f-left"></i><span>{{ $dept_count->count() }}</span></h4>
				                    <a href="/department" style="color: #fff;"><p class="m-b-0"><span class="f-left"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Department</span></p></a>
				                </div>
				            </div>
				        </div>
				        
				        <div class="col-md-3 col-xl-3">
				            <div class="card bg-c-yellow order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Overall Attendance</h6>
				                    <h4 class="text-right"><i style="font-size: 40px;" class="fa fa-clock-o f-left"></i><span>486 Hours</span></h4>
				                    <a href="/timesheet" style="color: #fff;"><p class="m-b-0"><span class="f-left"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View TimeSheet</span></p></a>
				                </div>
				            </div>
				        </div>

				        <div class="col-md-3 col-xl-3">
				            <div class="card bg-c-pink order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Pending Leaves</h6>
				                    <h4 class="text-right"><i style="font-size: 40px;" class="fa fa-outdent f-left"></i><span>{{ $leave_count->count() }}</span></h4>
				                    <a href="/leave" style="color: #fff;"><p class="m-b-0"><span class="f-left"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View Leaves</span></p></a>
				                </div>
				            </div>
				        </div>
				        
				        <!-- <div class="col-md-4 col-xl-3">
				            <div class="card bg-c-pink order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Orders Received</h6>
				                    <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>486</span></h2>
				                    <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
				                </div>
				            </div>
				        </div> -->
					</div>
					<div class="row">
						<div class="col-md-8 col-xl-8">
				            <div class="card">
				                <div class="card-block">
				                    <h6 class="m-b-20"><strong>Timesheet Report</strong></h6>
					                    <div class="row" style="margin-bottom: 30px;">
					                    	<div class="col-md-3">
					                    		<h6>Name</h6>
					                    	</div>
					                    	<div class="col-md-3">
					                    		<h6>Date</h6>
					                    	</div>
					                    	<div class="col-md-3">
					                    		<h6>Time In</h6>
					                    	</div>
					                    	<div class="col-md-3">
					                    		<h6>Time Out</h6>
					                    	</div>
					                    </div>

					                   <div style="min-height: 200px;">
					                   	@foreach($TimeSheet_report as $time_report)
					                   		<div class="row row_animation" style="margin-bottom: 30px; margin-top: -30px;">
					                   			<div class="col-md-3">
					                   				<p>{{ $time_report->firstname}} {{ $time_report->lastname}}</p>
					                   			</div>
					                   			<div class="col-md-3">
					                   				<p>{{$time_report->date}}</p>
					                   			</div>
					                   			<div class="col-md-3">
					                   				<p>{{$time_report->time_from}}</p>
					                   			</div>
					                   			<div class="col-md-3">
					                   				<p>{{$time_report->time_to}}</p>
					                   			</div>
					                   		</div>
					                   	@endforeach
					                   </div>

				                    <a href="/timesheet"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; Manage Timesheets</a>
				                </div>
				            </div>
				        </div>
						<div class="col-md-4 col-xl-4">
				            <div class="card">
				                <div class="card-block">
				                    <h6 class="m-b-20"><strong>Quick Access</strong></h6>

			                    	<a href="/add_employee" style="cursor: pointer; color: #000;">
			                    		<div class="row quick_wrapper">
			                    			<i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Employee
			                    		</div>
			                    	</a>
			                    	<a data-toggle="modal" data-target="#add_schedule" style="cursor: pointer;">
			                    		<div class="row quick_wrapper">
			                    			<i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Schedule
			                    		</div>
			                    	</a>
			                    	<a data-toggle="modal" data-target="#add_memo" style="cursor: pointer;">
			                    		<div class="row quick_wrapper">
			                    			<i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Memo
			                    		</div>
			                    	</a>
			                    	<a data-toggle="modal" data-target="#add_job" style="cursor: pointer;">
			                    		<div class="row quick_wrapper">
			                    			<i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Job
			                    		</div>
			                    	</a>
			                    	<a data-toggle="modal" data-target="#add_job_status" style="cursor: pointer;">
			                    		<div class="row quick_wrapper">
			                    			<i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Status
			                    		</div>
			                    	</a>
			                    	<a data-toggle="modal" data-target="#add_department" style="cursor: pointer;">
			                    		<div class="row quick_wrapper">
			                    			<i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Department
			                    		</div>
			                    	</a>
			                    	<a data-toggle="modal" data-target="#Add_Job_level" style="cursor: pointer;">
			                    		<div class="row quick_wrapper">
			                    			<i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Level
			                    		</div>
			                    	</a>
			                    	<a data-toggle="modal" data-target="#add_position" style="cursor: pointer;">
			                    		<div class="row quick_wrapper">
			                    			<i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Position
			                    		</div>
			                    	</a>
				                </div>
				            </div>
				        </div>
					</div>
					<div class="row">
						<div class="col-md-5 col-xl-5">
				            <div class="card">
				                <div class="card-block">
				                    <h6 class="m-b-20"><strong>Employee</strong></h6>

			                    	<div style="padding-bottom: 30px; padding-top: 25px;">
			                    		@foreach($list as $emp_list)
			                    			<a id="{{ $emp_list->id }}" class="view_emp" data-toggle="modal" data-target="#view_modal" 
			                    				p_id="{{ $emp_list->id }}"
								               	p_employeeid="{{ $emp_list->employee_id }}"
								               	p_gender="{{ $emp_list->gender }}"
								               	p_fname="{{ $emp_list->firstname }}"
								               	p_mname="{{ $emp_list->middle_name }}"
								               	p_lname="{{ $emp_list->lastname }}"
								               	p_department="{{ $emp_list->department_name }}"
								               	p_status="{{ $emp_list->job_status }}"
								               	p_picture="{{ $emp_list->employee_img }}"
								               	p_address="{{ $emp_list->address }}"
								               	p_city="{{ $emp_list->city }}"
								               	p_province="{{ $emp_list->province }}"
								               	p_country="{{ $emp_list->country }}"
								               	p_zip="{{ $emp_list->zip_code }}"
								               	p_hnumber="{{ $emp_list->home_number }}"
								               	p_mnumber="{{ $emp_list->mobile_number }}"
								               	p_wemail="{{ $emp_list->email }}"
								               	p_pemail="{{ $emp_list->personal_email }}"
								               	p_bday="{{ $emp_list->birthday }}"
								               	p_ssnsin="{{ $emp_list->SIN_SSN }}"
								               	p_ename="{{ $emp_list->emergency_name }}"
								               	p_relationship="{{ $emp_list->relationship }}"
								               	p_eaddress="{{ $emp_list->emergency_address }}"
								               	p_enumber="{{ $emp_list->emergency_number }}"
								               	p_jobtitle="{{ $emp_list->job_title }}"
								               	p_jobdesc="{{ $emp_list->job_description }}"
								               	p_joblevel="{{ $emp_list->job_level }}"
								               	p_jobposition="{{ $emp_list->job_position }}"
								               	p_datehired="{{ $emp_list->date_hired }}"
								               	p_dateterminated="{{ $emp_list->date_terminated }}"
								               	p_sss="{{ $emp_list->SSS_no }}"
								               	p_pagibig="{{ $emp_list->philhealth_no }}"
								               	p_philhealth="{{ $emp_list->pagibig_no }}"
								               	p_tin="{{ $emp_list->TIN_no }}"
								               	p_nbinumber="{{ $emp_list->NBI_no }}"
								               	p_diploma="{{ $emp_list->diploma }}"
								               	p_medical="{{ $emp_list->medical }}"
								               	p_tor="{{ $emp_list->TOR }}"
								               	p_birthcert="{{ $emp_list->birth_cert }}"
								               	p_bclearance="{{ $emp_list->brgy_clearance }}"
								              	p_cedula="{{ $emp_list->cedula }}"
			                    			>
			                    				<div class="row row_animation">
			                    					<div class="col-md-3">
			                    						<img class="profile_thumb" src="{{ $emp_list->employee_img }}">
			                    					</div>
			                    					<div class="col-md-9" style="margin-top: -5px;">
			                    						<h6>{{ $emp_list->lastname }}, {{ $emp_list->firstname }} {{ $emp_list->middle_name }}</h6>
			                    						<p style="margin-top: -15px;">{{$emp_list->employee_id}}</p>
			                    					</div>
			                    				</div>
			                    			</a>
			                    		@endforeach
			                    	</div>
			                    	<a href="/manage_employee"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; Manage Employees</a>
				                </div>
				            </div>
				        </div>
				        <div class="col-md-7 col-xl-7">
				            <div class="row">
				            	<div class="col-md-12">
				            		<div class="card">
						                <div class="card-block">
						                    <h6 class="m-b-20"><strong>Memo Report</strong></h6>
							                   <div style="min-height: 200px; padding-top: 30px;">
							                   	@foreach($memo_report as $mem_report)
							                   		<a id="{{ $mem_report->id }}" class="memo_view" data-toggle="modal" data-target="#view_memo" 
							                   			v_memoid="{{$mem_report->id}}"
							                   			v_memo="{{ $mem_report->memo }}" 
							                   			v_subject="{{ $mem_report->subject }}" 
							                   			v_attachment="{{ $mem_report->attachment }}" 
							                   			v_memodate="{{ $mem_report->memo_date }}"
							                   		>
	                   			                   		<div class="row row_animation" style="margin-bottom: 30px; margin-top: -30px;">
	                   			                   			<div class="col-md-9">
	                   			                   				<h6>{{ $mem_report->memo }}</h6>
	                   				                   			<p style="margin-top: -15px;">{{ $mem_report->memo_date }}</p>
	                   				                   			<p style="margin-top: -15px; text-overflow: ellipsis; max-width: 500px; min-height: 10px; white-space: nowrap; overflow: hidden;">{{ $mem_report->subject }}</p>
	                   			                   			</div>
	                   			                   			<div class="col-md-3">
	                   			                   				<button style="margin-top: 30px; float: right;" id="" type="button" class="btn btn-info send_memo" data-toggle="modal" data-target="#send_memo"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
	                   			                   			</div>
	                   			                   		</div>
							                   		</a>
							                   	@endforeach
							                   </div>

						                    <a href="/memo"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; Manage Memos</a>
						                </div>
						            </div>
				            	</div>
				            </div>
				            <div class="row">
	            	            <div class="col-md-12">
	            	            	<div class="card">
		            	                <div class="card-block">
		            	                    <h6 class="m-b-20"><strong>Schedules Report</strong></h6>
		            		                   <div style="min-height: 200px; padding-top: 30px;">
		            		                   	@foreach($sched_report as $sc_report)
		            		                   		<a id="{{ $sc_report->id }}" class="sched_view_button" data-toggle="modal" data-target="#sched_view_modal"
		            		                   			v_schedid="{{ $sc_report->id }}"
									             		v_sched_empid="{{ $sc_report->employee_id }}"
									             		v_sched_fname="{{ $sc_report->firstname }}"
									             		v_sched_lname="{{ $sc_report->lastname }}"
									             		v_sched_mname="{{ $sc_report->middle_name }}"
									             		v_sched_datefrom="{{ $sc_report->date_from }}"
									             		v_sched_dateto="{{ $sc_report->date_to }}"
									             		v_sched_task="{{ $sc_report->task }}"
									             		v_sched_comment="{{ $sc_report->comment }}"
									             		v_Sched_duration="{{ $sc_report->duration }}"
									             		v_sched_other="{{ $sc_report->other }}"
									             	>
			            		                   		<div class="row row_animation" style="margin-bottom: 30px; margin-top: -30px;">
			            		                   			<div class="col-md-12">
			            		                   				<h6>{{ $sc_report->lastname }}, {{ $sc_report->firstname }} {{ $sc_report->middle_name }}</h6>
									                   			<p style="margin-top: -15px;">{{ $sc_report->employee_id }}</p>
									                   			<p style="margin-top: -15px;">From:&nbsp;{{ $sc_report->date_from }}&nbsp;To:&nbsp;{{ $sc_report->date_to }}&nbsp;Duration:&nbsp;{{ $sc_report->duration }}</p>
									                   			<p style="margin-top: -15px; text-overflow: ellipsis; max-width: 500px; min-height: 10px; white-space: nowrap; overflow: hidden;">{{ $sc_report->task }}</p>
			            		                   			</div>
			            		                   		</div>
		            		                   		</a>
		            		                   	@endforeach
		            		                   </div>

		            	                    <a href="/schedule"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; Manage Schedules</a>
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

	<div class="modal fade view_memo" id="view_memo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
	    	<div class="modal-content">
	      		<div class="modal-header">
	          		<!-- <h5 class="modal-title" id="exampleModalLabel">Add A Memo</h5> -->
	          		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	           	 		<span aria-hidden="true">&times;</span>
	          		</button>
	       		</div>
	       		<div class="modal-body" style="padding: 30px 30px 30px 30px;">
	       			<div class="row">
	       				<div class="col-lg-12">
	       					<input type="hidden" name="vmodal_memoid" id="vmodal_memoid">
	       					<h3 style="margin: 0; margin-bottom: 30px;" id="vmodal_memo"></h3>
	       					<h6 style="margin: 0; margin-bottom: 10px;" id="vmodal_subject"></h6>
	       					<p id="vmodal_memodate"></p>
	       				</div>
	       			</div>
	       			<div class="row">
	       				<div class="col-lg-12">
	       					<div class="attach">
	       						<div class="row">
	       							<div class="col-lg-1" style="text-align: center;">
	       								<i class="fa fa-file-text-o" aria-hidden="true" style="font-size: 50px; color: #282828;"></i>
	       							</div>
	       							<div class="col-lg-11">
	       								<h6 id="vmodal_filename" style="margin: 0; margin-bottom: 10px; font-weight: bold;"></h6>
	       								<a class="memo_download" href="" download=""><i class="fa fa-download" aria-hidden="true"></i>&nbsp; Download</a>
	       							</div>
	       						</div>
	       					</div>
	       				</div>
	       			</div>	
	       		</div>
	    	</div>
	  	</div>
	</div>

	<div class="modal fade sched_view_modal" id="sched_view_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
	    	<div class="modal-content">
	      		<div class="modal-header">
	      			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	      	 		 <span aria-hidden="true">&times;</span>
	      			</button>
	      		</div>
	      		<div class="modal-body" style="padding-left: 50px; padding-right: 50px; padding-bottom: 50px;">
	      			<div class="row">
	      				<h4 id="v_sched_lname"></h4>,&nbsp;<h4 id="v_sched_fname"></h4>&nbsp;<h4 id="v_sched_mname"></h4>
	      				<input type="hidden" name="v_schedid" id="v_schedid">
	      			</div>
			      	<div class="row">
			      		<h6 id="v_sched_empid" style="margin-top: -10px;"></h6>
			      	</div>
			      	<div class="row">
			      		<p><strong>From: &nbsp;</strong></p><p id="v_sched_datefrom"></p><p><strong> &nbsp;To: &nbsp;</strong></p><p id="v_sched_dateto"></p><p><strong>&nbsp; Duration: &nbsp;</strong></p><p id="v_sched_duration"></p>
			      	</div>
			      	<div class="row" style="padding-top: 30px;">
			  			<p><strong>Task: &nbsp;</strong></p>
			      	</div>
			      	<div class="row">
			      		<p style="margin-top: -10px;" id="v_sched_task"></p>
			      	</div>
			      	<div class="row" style="margin-top: 20px;">
			  			<p><strong>Comment: &nbsp;</strong></p>
			      	</div>
			      	<div class="row">
			      		<p style="margin-top: -10px;" id="v_sched_comment"></p>
			      	</div>
			      	<div class="row" style="margin-top: 20px;">
			  			<p><strong>Other task: &nbsp;</strong></p>
			      	</div>
			      	<div class="row">
			      		<p style="margin-top: -10px;" id="v_sched_other"></p>
			      	</div>
	      		</div>
	    	</div>
	  	</div>
	</div>

	<div class="modal fade add_schedule" id="add_schedule" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
		          <h5 class="modal-title" id="exampleModalLabel">Add A Schedule</h5>
		          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		          </button>
		       </div>
		       <div class="modal-body">
		              <form method="POST" action="{{ route('admin.sched.create') }}" enctype="multipart/form-data">
		              	{{ csrf_field() }}
		                <div class="form-row">

		                	<div class="form-group col-md-12">
		                	  <label>Select an Employee</label>
	        	         		<div class="row" style="padding-bottom: 30px; padding-left: 20px; padding-right: 20px;">
	        	         			
	        	         			<select class="memoemp_search form-control" data-placeholder="Select Recipient" data-allow-clear="true" style="width: 100%;" name="memoemp_search1" name="memos[]" multiple="multiple" >
	        	         				<option></option>  
	        	         				<option>All</option>  
	        	         				@foreach($emp_count as $sched_emp)
	        	         					<option value="{{ $sched_emp->id }}">{{ $sched_emp->lastname }}, {{ $sched_emp->firstname }} {{ $sched_emp->middle_name }}</option>
	        	         				@endforeach
	        	         			</select>
	        	         			
	        	         		</div>
		                	</div>

		                	<div class="form-group col-md-12">
		                	  <div class="row">
		                	  	<div class="form-group col-md-6">
		                	  		<label>Date From</label>
		                	   		<input type="date" name="sched_date_from" id="sched_date_from" max="3000-12-31" 
									          min="1000-01-01" class="form-control">
		                	  	</div>
		                	  	<div class="form-group col-md-6">
		                	  		<label>Date To</label>
		                	    	<input type="date" name="sched_date_to" id="sched_date_to" max="3000-12-31" 
									          min="1000-01-01" class="form-control">
		                	  	</div>
		                	  </div>
		                	</div>	

		                	<div class="form-group col-md-12">
		                	  <label>Task</label>
		                	   <textarea class="form-control" rows="5" id="sched_task" name="sched_task"></textarea>
		                	</div>

		                	<div class="form-group col-md-12">
		                	  <label>Comment</label>
		                	   <textarea class="form-control" rows="5" id="sched_comment" name="sched_comment"></textarea>
		                	</div>

		                	<div class="form-group col-md-12">
		                	  <label>Duration</label>
		                	   <input class="form-control" rows="5" id="sched_duration" name="sched_duration">
		                	</div>

		                	<div class="form-group col-md-12">
		                	  <label>Other Task</label>
		                	   <textarea class="form-control" rows="5" id="sched_other" name="sched_other"></textarea>
		                	</div>
		                	<!-- <div class="form-group col-md-4">
		                	  <label>Role</label>
		                	   <select>
		                	  	<option value="2">Employee</option>
		                	    <option value="1">Admin</option>
		                	  </select>
		                	</div> -->
		                </div>
		                <div class="modal-footer">
		              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
		               <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
		            	</div>
		              </form>
		            </div>
		            
		          </div>
		    </div>
		  </div>
		</div>

	<div class="modal fade add_memo" id="add_memo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel">Add A Memo</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
	              <form method="POST" action="{{ route('admin.memo.create') }}" enctype="multipart/form-data">
	              	{{ csrf_field() }}
	                <div class="form-row">

	                	<div class="form-group col-md-12">
	                	  <label>Memo</label>
	                	   <input class="form-control" rows="5" id="memo" name="memo">
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Subject</label>
	                	   <textarea class="form-control" rows="5" id="subject" name="subject"></textarea>
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Attachment</label></br>
	                	  <input type="file" name="file" id="file" />
	                	</div>	

	                	<div class="form-group col-md-12">
	                	  <label>Date</label>
	                	    <input type="date" name="memo_date" id="memo_date" max="3000-12-31" 
								          min="1000-01-01" class="form-control">
	                	</div>
	                	<!-- <div class="form-group col-md-4">
	                	  <label>Role</label>
	                	   <select>
	                	  	<option value="2">Employee</option>
	                	    <option value="1">Admin</option>
	                	  </select>
	                	</div> -->
	                </div>
	                <div class="modal-footer">
	              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
	               <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
	            	</div>
	              </form>
	            </div>
	            
	          </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade add_job" id="add_job" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel">Add Job</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
	              <form method="POST" action="{{route('admin.job_title')}}">
	              	{{ csrf_field() }}
	                <div class="form-row">
	                	<div class="form-group col-md-12">
	                	  <label>Job Title</label>
	                	   <input type="text" name="job_title" class="form-control" >
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Description</label>
	                	   <textarea class="form-control" rows="5" id="job_desc" name="job_desc"></textarea>
	                	</div>
	                	<!-- <div class="form-group col-md-4">
	                	  <label>Role</label>
	                	   <select>
	                	  	<option value="2">Employee</option>
	                	    <option value="1">Admin</option>
	                	  </select>
	                	</div> -->
	                </div>
	                <div class="modal-footer">
	              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
	               <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
	            </div>
	              </form>
	            </div>
	            
	          </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade Add_Job_level" id="Add_Job_level" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel">Add Job Level</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
	              <form method="POST" action="{{route('admin.job_level')}}">
	              	{{ csrf_field() }}
	                <div class="form-row">
	                	<div class="form-group col-md-12">
	                	  <label>Job Level</label>
	                	   <input type="text" name="level_title" class="form-control" >
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Description</label>
	                	   <textarea class="form-control" rows="5" id="level_desc" name="level_desc"></textarea>
	                	</div>
	                	<!-- <div class="form-group col-md-4">
	                	  <label>Role</label>
	                	   <select>
	                	  	<option value="2">Employee</option>
	                	    <option value="1">Admin</option>
	                	  </select>
	                	</div> -->
	                </div>
	                <div class="modal-footer">
	              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
		               <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
		            </div>
	              </form>
	            </div>
	          </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade add_position" id="add_position" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel">Add Job Position</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
	              <form method="POST" action="{{route('admin.job_position')}}">
	              	{{ csrf_field() }}
	                <div class="form-row">
	                	<div class="form-group col-md-12">
	                	  <label>Job Position</label>
	                	   <input type="text" name="p_title" class="form-control" >
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Description</label>
	                	   <textarea class="form-control" rows="5" id="p_desc" name="p_desc"></textarea>
	                	</div>
	                	<!-- <div class="form-group col-md-4">
	                	  <label>Role</label>
	                	   <select>
	                	  	<option value="2">Employee</option>
	                	    <option value="1">Admin</option>
	                	  </select>
	                	</div> -->
	                </div>
	                <div class="modal-footer">
	                  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
	                   <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
	                </div>
	              </form>
	            </div>
	          </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade add_job_status" id="add_job_status" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel">Add Job Status</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
	              <form method="POST" action="{{route('admin.job_status')}}">
	              	{{ csrf_field() }}
	                <div class="form-row">
	                	<div class="form-group col-md-12">
	                	  <label>Job Status</label>
	                	   <input type="text" name="status_title" class="form-control" >
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Description</label>
	                	   <textarea class="form-control" rows="5" id="status_desc" name="status_desc"></textarea>
	                	</div>
	                	<!-- <div class="form-group col-md-4">
	                	  <label>Role</label>
	                	   <select>
	                	  	<option value="2">Employee</option>
	                	    <option value="1">Admin</option>
	                	  </select>
	                	</div> -->
	                </div>
	                <div class="modal-footer">
		              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
		               <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
		            </div>
	              </form>
	            </div>
	            
	          </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade add_department" id="add_department" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
              <form method="POST" action="{{ route('admin.department') }}">
              	{{ csrf_field() }}
                <div class="form-row">
                	<div class="form-group col-md-12">
                	  <label>Department</label>
                	   <input type="text" name="j_title" class="form-control" >
                	</div>

                	<div class="form-group col-md-12">
                	  <label>Description</label>
                	   <textarea class="form-control" rows="5" id="j_desc" name="j_desc"></textarea>
                	</div>
                	<!-- <div class="form-group col-md-4">
                	  <label>Role</label>
                	   <select>
                	  	<option value="2">Employee</option>
                	    <option value="1">Admin</option>
                	  </select>
                	</div> -->
                </div>
                <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                   <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
                </div>
              </form>
	         </div>
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
					<div style="text-align: center; padding-top: 30px;" class="col-lg-4">
						<img class="profile_photo" src="/img/profile.png">
						<input type="hidden" class="form-control e_pic" rows="5" id="e_pic" name="e_pic"></input>
					</div>
					<div  class="col-lg-8 profile_list">
						<h3 id="elist_lname"></h3>, &nbsp;<h3 id="elist_fname"></h3> <h3 id="elist_mname"></h3>
						<h5 style="margin-top: -18px; font-size: 25px;" id="elist_position"></h5>
						<h6 style="margin-top: -5px;" id="elist_id"></h6>
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

