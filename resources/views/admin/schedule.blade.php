@extends('admin.admin')

@section('content')

<div class="col-lg-12">
	<div class="row">
		<div class="jumbotron2">
		  		<h1 style="margin-top: 130px;" class="display-4">Employee Schedules</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-12">
			<div class="sched_page" data-simplebar>
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<div class="row">
									<div class="col-lg-12">
				    					<span>
				    						<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Schedule</button>
				    					</span>
				    				</div>
								</div>
							</div>
					 		<div class="card-body" style="padding-left: 45px;">
								<table class="ui celled table" id="addDataTable">
									<thead>
										<tr>
											<th>Employee</th>
											<th>Day From</th>
											<th>Day To</th>
											<th>Shift</th>
											<th>Restday</th>
											<th>Task</th>
											<th>Comment</th>
											<th>Other</th>
											<th>Manage</th>
										</tr>
									</thead>
									<tbody>
										@foreach($sched_list as $sch_list)
											<tr>
												<td style="min-width: 250px;">
													{{$sch_list->lastname}}, {{$sch_list->firstname}} {{$sch_list->middle_name}}</br>
													{{$sch_list->employee_id}}
												</td>
												<td style="min-width: 150px;">{{$sch_list->day_from}}</td>
												<td style="min-width: 150px;">{{$sch_list->day_to}}</td>
												<td style="min-width: 150px;">{{$sch_list->name}}</td>
												<td style="min-width: 150px;">{{$sch_list->restday}}</td>
												<td style="text-overflow: ellipsis; max-width: 200px; min-height: 100px; white-space: nowrap; overflow: hidden;">{{$sch_list->task}}</td>
												<td style="text-overflow: ellipsis; max-width: 200px; min-height: 100px; white-space: nowrap; overflow: hidden;">{{$sch_list->comment}}</td>
												<td style="text-overflow: ellipsis; max-width: 200px; min-height: 100px; white-space: nowrap; overflow: hidden;">{{$sch_list->other}}</td>
												<td style="min-width: 250px;">
													<div class="btn_desktop">
														<span class="sched_btn">
										             		<button id="{{ $sch_list->id }}" type="button" class="btn btn-success sched_view_button" data-toggle="modal" data-target="#sched_view"

										             		v_schedid="{{ $sch_list->id }}"
										             		v_sched_empid="{{ $sch_list->employee_id }}"
										             		v_sched_fname="{{ $sch_list->firstname }}"
										             		v_sched_lname="{{ $sch_list->lastname }}"
										             		v_sched_mname="{{ $sch_list->middle_name }}"
										             		v_sched_dayfrom="{{ $sch_list->day_from }}"
										             		v_sched_dayto="{{ $sch_list->day_to }}"
										             		v_sched_restday="{{ $sch_list->restday }}"
										             		v_sched_task="{{ $sch_list->task }}"
										             		v_sched_comment="{{ $sch_list->comment }}"
										             		v_sched_other="{{ $sch_list->other }}"

										             		><i class="fa fa-eye" aria-hidden="true"></i> View</button>
							 								<button id="{{ $sch_list->id }}" type="button" class="btn btn-primary edit-sched" data-toggle="modal" data-target="#edit_sched_modal" 

							 									e_schedid="{{ $sch_list->id }}"
							 									e_sched_empid="{{ $sch_list->employee_id }}"
							 									e_sched_fname="{{ $sch_list->firstname }}"
							 									e_sched_lname="{{ $sch_list->lastname }}"
							 									e_sched_mname="{{ $sch_list->middle_name }}"
							 									e_sched_dayfrom="{{ $sch_list->day_from }}"
							 									e_sched_dayto="{{ $sch_list->day_to }}"
							 									e_sched_restday="{{ $sch_list->restday }}"
							 									e_sched_task="{{ $sch_list->task }}"
							 									e_sched_comment="{{ $sch_list->comment }}"
							 									e_sched_other="{{ $sch_list->other }}"
							 									e_sched_shift_name="{{ $sch_list->shift_id }}"

							 									><i class="fa fa-pencil-square-o" aria-hidden="true"
							 									></i> Edit</button>
							 								<a href="/schedule/{{ $sch_list->id }}"><button id="" type="button" class="btn btn-danger btn_delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></a>
							 							</span>
													</div>
													<div class="btn_mobile">
														<span class="sched_btn">
										             		<button id="{{ $sch_list->id }}" type="button" class="btn btn-success sched_view_button" data-toggle="modal" data-target="#sched_view"

										             		v_schedid="{{ $sch_list->id }}"
										             		v_sched_empid="{{ $sch_list->employee_id }}"
										             		v_sched_fname="{{ $sch_list->firstname }}"
										             		v_sched_lname="{{ $sch_list->lastname }}"
										             		v_sched_mname="{{ $sch_list->middle_name }}"
										             		v_sched_dayfrom="{{ $sch_list->day_from }}"
										             		v_sched_dayto="{{ $sch_list->day_to }}"
										             		v_sched_restday="{{ $sch_list->restday }}"
										             		v_sched_task="{{ $sch_list->task }}"
										             		v_sched_comment="{{ $sch_list->comment }}"
										             		v_sched_other="{{ $sch_list->other }}"

										             		><i class="fa fa-eye" aria-hidden="true"></i></button>
							 								<button id="{{ $sch_list->id }}" type="button" class="btn btn-primary edit-sched" data-toggle="modal" data-target="#edit_sched_modal"  

							 									e_schedid="{{ $sch_list->id }}"
							 									e_sched_empid="{{ $sch_list->employee_id }}"
							 									e_sched_fname="{{ $sch_list->firstname }}"
							 									e_sched_lname="{{ $sch_list->lastname }}"
							 									e_sched_mname="{{ $sch_list->middle_name }}"
							 									e_sched_dayfrom="{{ $sch_list->day_from }}"
							 									e_sched_dayto="{{ $sch_list->day_to }}"
							 									e_sched_restday="{{ $sch_list->restday }}"
							 									e_sched_task="{{ $sch_list->task }}"
							 									e_sched_comment="{{ $sch_list->comment }}"
							 									e_sched_other="{{ $sch_list->other }}"
							 									e_sched_shift_name="{{ $sch_list->shift_id }}"

							 									><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

							 								<a href="/schedule/{{ $sch_list->id }}"><button id="" type="button" class="btn btn-danger btn_delete"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
							 							</span>
													</div>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
				    		</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade sched_view" id="sched_view" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
      	  <span aria-hidden="true">&times;</span>
      	</button>
      </div>
      <div class="modal-body" style="padding-left: 50px; padding-right: 50px; padding-bottom: 50px;">
      	<div class="row">

      		<h4 id="v_sched_lname">,&nbsp;</h4>&nbsp;<h4 id="v_sched_fname"></h4>&nbsp;<h4 id="v_sched_mname"></h4>
      		<input type="hidden" name="v_schedid" id="v_schedid">
      	</div>
      	<div class="row">
      		<h6 id="v_sched_empid" style="margin-top: -10px;"></h6>
      	</div>
      	<div class="row">
      		<p><strong>From: &nbsp;</strong></p><p id="v_sched_dayfrom"></p><p><strong> &nbsp;To: &nbsp;</strong></p><p id="v_sched_dayto"></p>
      	</div>
      	<div class="row">
      		<p><strong>Restday: &nbsp;</strong></p><p id="v_sched_restday"></p>
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

<div class="modal fade bd-example-modal-lg" id="mod_sched" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel">Add A Schedule</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
	              <form enctype="multipart/form-data">
	              	{{ csrf_field() }}
	                <div class="form-row">
	                	<input id="hdn-token" class="hdn-token" type="hidden" name="_token" value="{{csrf_token()}}">
	                	<input id="hdn-name" class="hdn-name" type="hidden" name="name" value="{{auth()->user()->name}}">

	                	<div class="form-group col-lg-12 col-md-12 col-sm-12">
	                	  	<label>Select an Employee</label>
        	         		<div class="row" style="padding-bottom: 30px; padding-left: 20px; padding-right: 20px;">
        	         			
        	         			<select class="memoemp_search form-control" data-placeholder="Select Recipient" data-allow-clear="true" style="width: 100%;" name="memoemp_search1" name="memos[]" multiple="multiple" >
        	         				<option></option>  
        	         				<option value = "0001">All</option>  
        	         				@foreach($sched_employee as $sched_emp)
        	         					<option value="{{ $sched_emp->employee_id }}">{{ $sched_emp->lastname }}, {{ $sched_emp->firstname }} {{ $sched_emp->middle_name }}</option>
        	         				@endforeach
        	         			</select>
        	         			
        	         		</div>
	                	</div>
<!-- 
	                	<div class="form-group col-lg-12 col-md-12 col-sm-12">
	                	  	<div class="row">
	                	  		<div class="form-group col-lg-6 col-md-6 col-sm-12">
	                	  			<label>Date From</label>
	                	   			<input type="date" name="sched_date_from" id="sched_date_from" max="3000-12-31" 
								          min="1000-01-01" class="form-control">
	                	  		</div>
	                	  		<div class="form-group col-lg-6 col-md-6 col-sm-12">
	                	  			<label>Date To</label>
	                	    		<input type="date" name="sched_date_to" id="sched_date_to" max="3000-12-31" 
								          min="1000-01-01" class="form-control">
	                	  		</div>
	                	  	</div>
	                	</div> -->

	                	<div class="form-group col-lg-12 col-md-12 col-sm-12">
	                	  	<div class="row">
		                	  	<div class="form-group col-lg-6 col-md-12 col-sm-12">
		                	  		<label>From</label>
		                	   		<select name="sched_day_from" id="sched_day_from" class="form-control">
		                	   			<option value="Sunday">Sunday</option>
		                	   			<option value="Monday">Monday</option>
		                	   			<option value="Tuesday">Tuesday</option>
		                	   			<option value="Wednesday">Wednesday</option>
		                	   			<option value="Thursday">Thursday</option>
		                	   			<option value="Friday">Friday</option>
		                	   			<option value="Saturday">Saturday</option>
		                	   		</select>
		                	  	</div>
			                	<div class="form-group col-lg-6 col-md-12 col-sm-12">
		                	  		<label>To</label>
		                	  		<select name="sched_day_to" id="sched_day_to" class="form-control">
		                	  			<option value="Sunday">Sunday</option>
		                	   			<option value="Monday">Monday</option>
		                	   			<option value="Tuesday">Tuesday</option>
		                	   			<option value="Wednesday">Wednesday</option>
		                	   			<option value="Thursday">Thursday</option>
		                	   			<option value="Friday">Friday</option>
		                	   			<option value="Saturday">Saturday</option>
		                	  		</select>
		                	  	</div>
		                	</div>
		                </div>	
		                	
		                
		                <div class="form-group col-lg-12 col-md-12 col-sm-12">
		                	<div class="row">
	                	  		<div class="form-group col-lg-6 col-md-12 col-sm-12">
	                	  			<label>Shift</label>
	                	  			<select class="shift_sel form-control" id="shift_sel" data-placeholder="Select Recipient"style="width: 100%;" name="shift_sel"  >
	                	  				<option selected disabled>Select Shift</option>  
	                	  				@foreach($shifts as $shift)
	                	  					<option value="{{ $shift->id }}" s_data_tfrom="{{ $shift->shift_start }}" s_data_tto="{{ $shift->shift_end }}">{{ $shift->name }}</option>
	                	  				@endforeach
	                	  			</select>
	                	  		</div>
	                	  		<div class="form-group col-lg-6 col-md-12 col-sm-12">
		                	  		<label>Restday</label>
		                	  		<select name="sched_rest_day" id="sched_rest_day" class="form-control">
		                	  			<option value="Sunday">Sunday</option>
		                	   			<option value="Monday">Monday</option>
		                	   			<option value="Tuesday">Tuesday</option>
		                	   			<option value="Wednesday">Wednesday</option>
		                	   			<option value="Thursday">Thursday</option>
		                	   			<option value="Friday">Friday</option>
		                	   			<option value="Saturday">Saturday</option>
		                	  		</select>
	                	  		</div>	
	                	  	</div>
	                	</div>

                	  	<div class="form-group col-lg-6 col-md-12 col-sm-12">
                	  		<div class="row">
                	  			<div class="col-md-6" style="margin-top: -28px;">
                	  				<h6 class="">Start of shift&nbsp;</h6><h6 style="margin-top: -20px;" class="" id="txt_sstart"></h6>
                	  			</div>
                	  			<div class="col-md-6" style="margin-top: -28px;">
                	  				<h6 class="">End of shift&nbsp;</h6><h6 style="margin-top: -20px;" class="" id="txt_send"></h6>
                	  			</div>
                	  		</div>
                	 	</div>

	                	
                		<div class="form-group col-md-12">
                		  	<div class="row">
                		  		<div class="col-md-12">
                		  			<label>Task</label>
                		   			<textarea class="form-control" rows="5" id="sched_task" name="sched_task"></textarea>
                		  		</div>
                		  	</div>
                		</div>
	                	
	                	
                		<div class="form-group col-md-12">
                		  	<div class="row">
                		  		<div class="col-md-12">
                		  			<label>Comment</label>
                		  			<textarea class="form-control" rows="5" id="sched_comment" name="sched_comment"></textarea>
                		  		</div>
                		  	</div>
                		</div>
	                	

	                	
                		<div class="form-group col-md-12">
                		  	<div class="row">
                		  		<div class="col-md-12">
            		  				<label>Other Task</label>
            		  			 	<textarea class="form-control" rows="5" id="sched_other" name="sched_other"></textarea>
                		  		</div>
                		  	</div>
                		</div>
	                	
	                	<!-- <div class="form-group col-md-4">
	                	  <label>Role</label>
	                	   <select>
	                	  	<option value="2">Employee</option>
	                	    <option value="1">Admin</option>
	                	  </select>
	                	</div> -->
	                </div>
	                <div class="modal-footer" style="text-align: right;">
	              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
	               		<button type="button" class="btn btn-success btn_add_sched btn_save"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
	            	</div>
	              </form>
	            </div>
	            
	          </div>
	    </div>
	  </div>


	  <div class="modal fade bd-example-modal-lg" id="edit_sched_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  	  <div class="modal-dialog modal-lg">
	  	    <div class="modal-content">
	  	      <div class="modal-header">
	  	          <h5 class="modal-title" id="exampleModalLabel">Edit A Schedule</h5>
	  	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	  	            <span aria-hidden="true">&times;</span>
	  	          </button>
	  	       </div>
	  	       <div class="modal-body">
	  	              <form enctype="multipart/form-data">
	  	              	{{ csrf_field() }}
	  	                <div class="form-row">
	  	                	<input id="hdn-token" class="hdn-token" type="hidden" name="_token" value="{{csrf_token()}}">
	  	                	<input id="hdn-name" class="hdn-name" type="hidden" name="name" value="{{auth()->user()->name}}">

	  	                	<div class="form-group col-lg-12 col-md-12 col-sm-12">
	  	            <!--     	  	<label>Select an Employee</label> -->
	          	         		<div class="row" style="padding-bottom: 30px; padding-left: 20px; padding-right: 20px;">
	          	         			<h4 id="e_sched_lname"></h4><h4>,</h4>&nbsp;<h4 id="e_sched_fname"></h4>&nbsp;<h4 id="e_sched_mname"></h4>
	          	         			
	          	         		</div>
	  	                	</div>
	  <!-- 
	  	                	<div class="form-group col-lg-12 col-md-12 col-sm-12">
	  	                	  	<div class="row">
	  	                	  		<div class="form-group col-lg-6 col-md-6 col-sm-12">
	  	                	  			<label>Date From</label>
	  	                	   			<input type="date" name="sched_date_from" id="sched_date_from" max="3000-12-31" 
	  								          min="1000-01-01" class="form-control">
	  	                	  		</div>
	  	                	  		<div class="form-group col-lg-6 col-md-6 col-sm-12">
	  	                	  			<label>Date To</label>
	  	                	    		<input type="date" name="sched_date_to" id="sched_date_to" max="3000-12-31" 
	  								          min="1000-01-01" class="form-control">
	  	                	  		</div>
	  	                	  	</div>
	  	                	</div> -->

	  	                	<div class="form-group col-lg-12 col-md-12 col-sm-12">
	  	                	  	<div class="row">
	  		                	  	<div class="form-group col-lg-6 col-md-12 col-sm-12">
	  		                	  		<label>From</label>
	  		                	   		<select name="edit_sched_day_from" id="e_sched_dayfrom" class="form-control">
	  		                	   			<option value="Sunday">Sunday</option>
	  		                	   			<option value="Monday">Monday</option>
	  		                	   			<option value="Tuesday">Tuesday</option>
	  		                	   			<option value="Wednesday">Wednesday</option>
	  		                	   			<option value="Thursday">Thursday</option>
	  		                	   			<option value="Friday">Friday</option>
	  		                	   			<option value="Saturday">Saturday</option>
	  		                	   		</select>
	  		                	  	</div>
	  			                	<div class="form-group col-lg-6 col-md-12 col-sm-12">
	  		                	  		<label>To</label>
	  		                	  		<select name="e_sched_dayto" id="e_sched_dayto" class="form-control">
	  		                	  			<option value="Sunday">Sunday</option>
	  		                	   			<option value="Monday">Monday</option>
	  		                	   			<option value="Tuesday">Tuesday</option>
	  		                	   			<option value="Wednesday">Wednesday</option>
	  		                	   			<option value="Thursday">Thursday</option>
	  		                	   			<option value="Friday">Friday</option>
	  		                	   			<option value="Saturday">Saturday</option>
	  		                	  		</select>
	  		                	  	</div>
	  		                	</div>
	  		                </div>	
	  		                	
	  		                
	  		                <div class="form-group col-lg-12 col-md-12 col-sm-12">
	  		                	<div class="row">
	  	                	  		<div class="form-group col-lg-6 col-md-12 col-sm-12">
	  	                	  			<label>Shift</label>
	  	                	  			<select class="shift_sel form-control" id="e_shift_sel" data-placeholder="Select Recipient"style="width: 100%;" name="shift_sel"  >
	  	                	  				<option selected disabled>Select Shift</option>  
	  	                	  				@foreach($shifts as $shift)
	  	                	  					<option value="{{ $shift->id }}" s_data_tfrom="{{ $shift->shift_start }}" s_data_tto="{{ $shift->shift_end }}">{{ $shift->name }}</option>
	  	                	  				@endforeach
	  	                	  			</select>
	  	                	  		</div>
	  	                	  		<div class="form-group col-lg-6 col-md-12 col-sm-12">
	  		                	  		<label>Restday</label>
	  		                	  		<select name="e_sched_restday" id="e_sched_restday" class="form-control">
	  		                	  			<option value="Sunday">Sunday</option>
	  		                	   			<option value="Monday">Monday</option>
	  		                	   			<option value="Tuesday">Tuesday</option>
	  		                	   			<option value="Wednesday">Wednesday</option>
	  		                	   			<option value="Thursday">Thursday</option>
	  		                	   			<option value="Friday">Friday</option>
	  		                	   			<option value="Saturday">Saturday</option>
	  		                	  		</select>
	  	                	  		</div>	
	  	                	  	</div>
	  	                	</div>

	                  	  	<div class="form-group col-lg-6 col-md-12 col-sm-12">
	                  	  		<div class="row">
	                  	  			<div class="col-md-6" style="margin-top: -28px;">
	                  	  				<h6 class="">Start of shift&nbsp;</h6><h6 style="margin-top: -20px;" class="" id="e_txt_sstart"></h6>
	                  	  			</div>
	                  	  			<div class="col-md-6" style="margin-top: -28px;">
	                  	  				<h6 class="">End of shift&nbsp;</h6><h6 style="margin-top: -20px;" class="" id="e_txt_send"></h6>
	                  	  			</div>
	                  	  		</div>
	                  	 	</div>

	  	                	
	                  		<div class="form-group col-md-12">
	                  		  	<div class="row">
	                  		  		<div class="col-md-12">
	                  		  			<label>Task</label>
	                  		   			<textarea class="form-control" rows="5" id="e_sched_task" name="e_sched_task"></textarea>
	                  		  		</div>
	                  		  	</div>
	                  		</div>
	  	                	
	  	                	
	                  		<div class="form-group col-md-12">
	                  		  	<div class="row">
	                  		  		<div class="col-md-12">
	                  		  			<label>Comment</label>
	                  		  			<textarea class="form-control" rows="5" id="e_sched_comment" name="e_sched_comment"></textarea>
	                  		  		</div>
	                  		  	</div>
	                  		</div>
	  	                	

	  	                	
	                  		<div class="form-group col-md-12">
	                  		  	<div class="row">
	                  		  		<div class="col-md-12">
	              		  				<label>Other Task</label>
	              		  			 	<textarea class="form-control" rows="5" id="e_sched_other" name="e_sched_other"></textarea>
	                  		  		</div>
	                  		  	</div>
	                  		</div>
	  	                	
	  	                	<!-- <div class="form-group col-md-4">
	  	                	  <label>Role</label>
	  	                	   <select>
	  	                	  	<option value="2">Employee</option>
	  	                	    <option value="1">Admin</option>
	  	                	  </select>
	  	                	</div> -->
	  	                </div>
	  	                <div class="modal-footer" style="text-align: right;">
	  	              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
	  	               		<button type="button" class="btn btn-success btn_sched_update btn_save" id=""><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
	  	            	</div>
	  	              </form>
	  	            </div>
	  	            
	  	          </div>
	  	    </div>
	  	  </div>


	<script>
    $(document).ready(function() {

    	$('.edit-sched').on('click',  function(event){

    	    var edit_schedid = $(this).attr('v_schedid'); 
    	  
    	    var edit_sched_empid = $(this).attr('v_sched_empid'); 
    	    var edit_sched_fname = $(this).attr('v_sched_fname'); 
    	    var edit_sched_lname = $(this).attr('v_sched_lname'); 
    	    var edit_sched_mname = $(this).attr('v_sched_mname'); 
    	    var edit_sched_dayfrom = $(this).attr('v_sched_dayfrom'); 
    	    var edit_sched_dayto = $(this).attr('v_sched_dayto'); 
    	    var edit_sched_restday = $(this).attr('v_sched_restday'); 
    	    var edit_sched_task = $(this).attr('v_sched_task'); 
    	    var edit_sched_comment = $(this).attr('v_sched_comment'); 
    	    var edit_sched_other = $(this).attr('v_sched_other'); 

    	

    	    $('#v_schedid').val(edit_schedid);
    	    $('#edit_lname').html(edit_sched_lname);
    	    $('#edit_fname').html(edit_sched_fname);
    	    $('#edit_mname').html(edit_sched_lname);
    	    $('#v_sched_empid').html(edit_sched_empid);
    	    $('#edit_sched_dayto').val(edit_sched_dayfrom);
    	    $('#edit_sched_dayto').val(edit_sched_dayto);
    	    $('#v_sched_restday').html(edit_sched_restday);
    	    $('#v_sched_task').html(edit_sched_task);
    	    $('#v_sched_comment').html(edit_sched_comment);
    	    $('#v_sched_other').html(edit_sched_other);
    	    // $('#v_sched_duration').html(view_sched_duration);
    	    

    	  });
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events : [
                @foreach($sched_list as $sch_list)
                {
                    title : '{{ $sch_list->firstname . ' ' . $sch_list->lastname . ', ' . $sch_list->employee_id }}',
                    start : '{{ $sch_list->day_from }}T00:00:00',
                    @if ($sch_list->day_to)
                            end: '{{ $sch_list->day_to }}T24:00:00',
                    @endif
                },
                @endforeach
            ],
            hiddenDays: [7,7],
        });

        $('#shift_sel').on('change', function() {

			var data = $('#shift_sel option:selected').attr('s_data_tfrom');
			var data2 = $('#shift_sel option:selected').attr('s_data_tto');
			
			$('#txt_sstart').html(data);
			$('#txt_send').html(data2);
		}); 

		$('#e_shift_sel').on('change', function() {

			var data = $('#e_shift_sel option:selected').attr('s_data_tfrom');
			var data2 = $('#e_shift_sel option:selected').attr('s_data_tto');
			
			$('#e_txt_sstart').html(data);
			$('#e_txt_send').html(data2);
		});
    });
</script>
@endsection