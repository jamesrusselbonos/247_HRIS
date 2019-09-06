@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="admin_index" style="height: 100vh; overflow-y: auto; padding-bottom: 30px;">
			<div class="">
				<div>
					<div class="row">
						<div class="col-md-4 col-xl-4">
				            <div class="card bg-c-blue order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Employees</h6>
				                    <h4 class="text-right"><i style="font-size: 40px;" class="fa fa-users f-left"></i><span>{{ $emp_count->count() }}</span></h4>
				                    <a href="/add_employee" style="color: #fff;"><p><span class="f-left"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Employee</span></p></a>
				                </div>
				            </div>
				        </div>
				        
				        <div class="col-md-4 col-xl-4">
				            <div class="card bg-c-green order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Departments</h6>
				                    <h4 class="text-right"><i style="font-size: 40px;" class="fa fa-folder-open f-left"></i><span>{{ $dept_count->count() }}</span></h4>
				                    <a href="/department" style="color: #fff;"><p class="m-b-0"><span class="f-left"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Department</span></p></a>
				                </div>
				            </div>
				        </div>
				        
				        <div class="col-md-4 col-xl-4">
				            <div class="card bg-c-yellow order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Overall Attendance</h6>
				                    <h4 class="text-right"><i style="font-size: 40px;" class="fa fa-clock-o f-left"></i><span>486 Hours</span></h4>
				                    <a href="/timesheet" style="color: #fff;"><p class="m-b-0"><span class="f-left"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View TimeSheet</span></p></a>
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
					                   				<p>{{$time_report->name}}</p>
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

				                    <i class="fa fa-cogs" aria-hidden="true">&nbsp; Manage Timesheets</i>
				                </div>
				            </div>
				        </div>
						<div class="col-md-4 col-xl-4">
				            <div class="card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Quick Access</h6>

			                    	<div class="row quick_wrapper">
			                    		<i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Employee</i>
			                    	</div>
			                    	<div class="row quick_wrapper">
			                    		<i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Schedule</i>
			                    	</div>
			                    	<div class="row quick_wrapper">
			                    		<i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Memo</i>
			                    	</div>
			                    	<div class="row quick_wrapper">
			                    		<i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Job</i>
			                    	</div>
			                    	<div class="row quick_wrapper">
			                    		<i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Status</i>
			                    	</div>
			                    	<div class="row quick_wrapper">
			                    		<i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Department</i>
			                    	</div>
			                    	<div class="row quick_wrapper">
			                    		<i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Level</i>
			                    	</div>
			                    	<div class="row quick_wrapper">
			                    		<i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Position</i>
			                    	</div>
				                </div>
				            </div>
				        </div>
					</div>
					<div class="row">
						<div class="col-md-5 col-xl-5">
				            <div class="card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Employees</h6>

			                    	<div style="padding-bottom: 30px; min-height: 665px; padding-top: 25px;">
			                    		@foreach($emp_count as $emp_list)
			                    			<div class="row row_animation">
			                    				<div class="col-md-3">
			                    					<img class="profile_thumb" src="{{ $emp_list->employee_img }}">
			                    				</div>
			                    				<div class="col-md-9" style="margin-top: -5px;">
			                    					<h6>{{ $emp_list->lastname }}, {{ $emp_list->firstname }} {{ $emp_list->middle_name }}</h6>
			                    					<p style="margin-top: -15px;">{{$emp_list->employee_id}}</p>
			                    				</div>
			                    			</div>
			                    		@endforeach
			                    	</div>
			                    	<i class="fa fa-cogs" aria-hidden="true">&nbsp; Manage Timesheets</i>
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
							                   	@endforeach
							                   </div>

						                    <i class="fa fa-cogs" aria-hidden="true">&nbsp; Manage Memos</i>
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
		            		                   		<div class="row row_animation" style="margin-bottom: 30px; margin-top: -30px;">
		            		                   			<div class="col-md-12">
		            		                   				<h6>{{ $sc_report->lastname }}, {{ $sc_report->firstname }} {{ $sc_report->middle_name }}</h6>
								                   			<p style="margin-top: -15px;">{{ $sc_report->employee_id }}</p>
								                   			<p style="margin-top: -15px;">From:&nbsp;{{ $sc_report->date_from }}&nbsp;To:&nbsp;{{ $sc_report->date_to }}&nbsp;Duration:&nbsp;{{ $sc_report->duration }}</p>
								                   			<p style="margin-top: -15px; text-overflow: ellipsis; max-width: 500px; min-height: 10px; white-space: nowrap; overflow: hidden;">{{ $sc_report->task }}</p>
		            		                   			</div>
		            		                   		</div>
		            		                   	@endforeach
		            		                   </div>

		            	                    <i class="fa fa-cogs" aria-hidden="true">&nbsp; Manage Schedules</i>
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

