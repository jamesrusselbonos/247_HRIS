@extends('admin.admin')

@section('content')

<div class="col-lg-12">
	<div class="row">
		<div class="jumbotron2">
	  		<h1 style="margin-top: 130px;" class="display-4">Employee Leaves</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-12">
			<div class="memo_page" data-simplebar>
				<div class="row">
					<div class="col-lg-8">
						<div class="card">
							<!-- <div class="card-header">
								<div class="row">
									<div class="col-lg-12">
						    			<span>
						    				
						    			</span>
						    		</div>
								</div>
							</div> -->
							 <div class="card-body">

							 	<div id='calendar'></div>
							   
						        <!-- <table class="table table-bordered" id="addDataTable">
						          <thead>
						            <tr>
						              
						              <th scope="col">Name</th>
						              <th scope="col">Date</th>
						              <th scope="col">Leave Type</th>
						              <th scope="col">Date From</th>
						              <th scope="col">Date To</th>
						              <th scope="col">Reason</th>
						              <th scope="col">Status</th>
						              <th scope="col">Manage</th>
						            </tr>
						          </thead>
						          <tbody>
						      
						      		@foreach($leave as $l)

							            <tr>

							              <th style="max-width: 200px;">
							              	<p>{{ $l->lastname }}, {{ $l->firstname }} {{ $l->middle_name }}</p>
							              	<p style="margin-top: -15px;">{{ $l->emp_id }}</p>
							              </th>
							              <th style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
							              	{{ $l->date }}
							              </th>
							              <td style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
							              	{{ $l->leave_type }}
							              </td>
							               <td style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
							              	{{ $l->date_from }}
							              </td>
							              <td style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
							              	{{ $l->date_to }}
							              </td>
							              <td style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
							              	{{ $l->reason }}
							              </td>
							              <td style="text-overflow: ellipsis; max-width: 50px; min-height: 100px; white-space: nowrap; overflow: hidden;">
							              	{{ $l->leave_status }} 
							              </td>
							             <td style="max-width: 200px;">
							             	<span style="float: right;">
							             		<button id="{{ $l->id }}" type="button" class="btn btn-primary btn_view_leave" data-toggle="modal" data-target="#view_leave" v_leave_id="{{ $l->id }}" v_leave_lname="{{ $l->lastname }}" v_leave_fname="{{ $l->firstname }}" v_leave_mname="{{ $l->middle_name }}" v_leave_empid="{{ $l->emp_id }}" v_leave_date="{{ $l->date }}" v_leave_leave_type="{{ $l->leave_type }}" v_leave_datefrom="{{ $l->date_from }}" v_leave_dateto="{{ $l->date_to }}" v_leave_reason="{{ $l->reason }}" v_leave_status="{{ $l->leave_status }}" v_leave_leave_type_id="{{ $l->leave_id }}"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Action</button>
							             		<a href="/delete_leave/{{ $l->id }}"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button></a>
				 							</span>
							             </td>
							            </tr>
						      				       
						      		@endforeach
						           
						          </tbody>
						        </table> -->
						       
						    </div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card">
							<div class="card-header">
								<div class="row">
									<div class="col-lg-12">
						    			<span>
						    				<h5>Manage Leaves</h5>
						    			</span>
						    		</div>
								</div>
							</div>
							 <div class="card-body">

							 	<div class="row">
									@foreach($leave as $l)
										<div class="col-lg-7 col-md-7 col-sm-7">
											<p>{{ $l->lastname }}, {{ $l->firstname }} {{ $l->middle_name }}</p>
										    <p style="margin-top: -15px;">{{ $l->emp_id }}</p>
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5">
											<span style="float: right;">
						             		<button id="{{ $l->id }}" type="button" class="btn btn-primary btn_view_leave" data-toggle="modal" data-target="#view_leave" v_leave_id="{{ $l->id }}" v_leave_lname="{{ $l->lastname }}" v_leave_fname="{{ $l->firstname }}" v_leave_mname="{{ $l->middle_name }}" v_leave_empid="{{ $l->emp_id }}" v_leave_date="{{ $l->date }}" v_leave_leave_type="{{ $l->leave_type }}" v_leave_datefrom="{{ $l->date_from }}" v_leave_dateto="{{ $l->date_to }}" v_leave_reason="{{ $l->reason }}" v_leave_status="{{ $l->leave_status }}" v_leave_leave_type_id="{{ $l->leave_id }}"><i class="fa fa-check" aria-hidden="true"></i></button>
						             		<a href="/delete_leave/{{ $l->id }}"><button type="button" class="btn btn-danger btn_delete"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
											</span>
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

<div class="modal fade view_leave" id="view_leave" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
  			<div class="modal-header">
    			<h5 class="modal-title" id="exampleModalLabel"></h5>
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
      				<span aria-hidden="true">&times;</span>
    			</button>
  			</div>
  			<form method="POST" action="{{route('admin.leave.edit')}}">
      			<div class="modal-body" style="padding-right: 50px; padding-left: 50px;">
  				
  					{{ csrf_field() }}
		      		<div class="row">
		      			<h4 id="vl_lname"></h4>, <h4 id="vl_fname"></h4>&nbsp;<h4 id="vl_mname"></h4>
		      		</div>
		      		<div class="row">
		      			<h6 style="margin-top: -15px;" id="vl_empid"></h6>
		      			<input type="hidden" name="txt_vl_empid" id="txt_vl_empid">
		      			<input type="hidden" name="hdn_from" id="hdn_from" value="{{Auth::user()->name}}">
		      			<input type="hidden" name="hdn_leave_type" id="hdn_leave_type">
		      		</div>
		      		<div class="row">
		      			<h6>Date: &nbsp;</h6><h6 id="vl_date"></h6>
		      		</div>
		      		<div class="row">
		      			<h6>Leave Type: &nbsp;</h6><h6 id="vl_leave_type"></h6>
		      		</div>
		      		<div class="row">
		      			<h6>From: &nbsp;</h6><h6 id="vl_datefrom"></h6><h6>&nbsp; To: &nbsp;</h6><h6 id="vl_dateto"></h6>
		      		</div>
		      		<div class="row">
		      			<h6>Reason: &nbsp;</h6><h6 id="vl_reason"></h6>
		      		</div>
		      		<div class="form-row">
		      			<div class="form-group col-md-12">
		      				<input type="hidden" name="txt_vl_reason" id="txt_vl_reason">
		      				<input type="hidden" name="txt_vl_datefrom" id="txt_vl_datefrom">
		      				<input type="hidden" name="txt_vl_dateto" id="txt_vl_dateto">
		      				<input type="hidden" name="txt_vl_leave_type" id="txt_vl_leave_type">
		      				<input type="hidden" name="txt_vl_date" id="txt_vl_date">
		      				<input type="hidden" name="txt_vl_lname" id="txt_vl_lname">
		      				<input type="hidden" name="txt_vl_fname" id="txt_vl_fname">
		      				<input type="hidden" name="txt_vl_mname" id="txt_vl_mname">
		      				<input type="hidden" name="vl_id" id="vl_id">
		      			</div>
		      		</div>
		      		<div class="row">
		      			<label>Status</label>
					  	<select name="vl_status" id="vl_status">
					    	<option value="Pending">Pending</option>
					    	<option value="Approved">Approved</option>
					    	<option value="Declined">Declined</option>
					  	</select>
		      		</div>
    			</div>
    			<div class="modal-footer" style="margin-top: 20px;">
              	   	<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
	               	<button type="submit" class="btn btn-success btn_save"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
	            </div>
    		</form>
  		</div>
  	</div>
</div>

<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events : [
                @foreach($leave as $leaves)
                {
                    title : '{{ $leaves->firstname . ' ' . $leaves->lastname . ', ' . $leaves->leave_type . ', ' . $leaves->leave_status }}',
                    start : '{{ $leaves->date_from }}T00:00:00',
                    textColor: 'white',
                    @if ($leaves->date_to)
                            end: '{{ $leaves->date_to }}T24:00:00',
                    @endif
                },
                @endforeach
            ],
        });
    });
</script>

@endsection