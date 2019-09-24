@extends('employee.employee')

@section('employee_content')

<div class="col-lg-12">
	<div class="row">
        <div class="jumbotron2">
          <h1 style="margin-top: 130px;" class="display-4">Leave Requests</h1>
        </div>
      </div>
	<div class="row">
		<div class="col-xl-12">
			<div class="memo_page" data-simplebar>
		<div class="">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-lg-12">
			    			<span>
			    				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#request_leave"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Request Leave</button>
			    			</span>
			    		</div>
					</div>
				</div>
				 <div class="card-body">
				   
			        <table class="table display nowrap" id="DataTable">
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
				             		<button id="" type="button" class="btn btn-success" data-toggle="modal" data-target="#view_memo"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View</button>
				             		@if($l->leave_status =="Pending")
				             		<button id="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#view_memo"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Edit</button>
	 								@endif
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
		</div>
	</div>
</div>

<div class="modal fade request_leave" id="request_leave" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          <h5>Leave Request</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
       </div>
       <div class="modal-body" style="padding-left: 30px; padding-right: 30px;">
 			<form method="POST" action="{{ route('employee.request_leave') }}">
 				{{ csrf_field() }}
	 			<div class="form-row">
					<div class="form-group col-md-12">
					  <h4>{{ Auth::user()->employee()->first()->lastname }}, {{ Auth::user()->employee()->first()->firstname }} {{ Auth::user()->employee()->first()->middle_name }}</h4>
					  <h6 style="margin-top: -10px;">{{ Auth::user()->employee()->first()->employee_id }}</h6>
					  <input type="hidden" name="leave_lname" value="{{ Auth::user()->employee()->first()->lastname }}">
					  <input type="hidden" name="leave_fname" value="{{ Auth::user()->employee()->first()->firstname }}">
					  <input type="hidden" name="leave_mname" value="{{ Auth::user()->employee()->first()->middle_name }}">
					  <input type="hidden" name="leave_empid" value="{{ Auth::user()->employee()->first()->employee_id }}	">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
					  <label>Date</label>
					  <input type="date" name="leave_date" id="leave_date" max="3000-12-31" 
									          min="1000-01-01" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
					  <label>Leave Type</label>
					  <select id="leave_type" name="leave_type">
					  	@foreach($leave_type as $dlist)
					  		<option value="{{$dlist->id}}">{{$dlist->leave_type}}</option>
					  	@endforeach
					  </select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
					  <label>Date From</label>
					  <input type="date" name="leave_datefrom" id="leave_datefrom" max="3000-12-31" 
									          min="1000-01-01" class="form-control">
					</div>
					<div class="form-group col-md-6">
					  <label>Date To</label>
					 <input type="date" name="leave_dateto" id="leave_dateto" max="3000-12-31" 
									          min="1000-01-01" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
	            	  <label>Reason</label>
	            	  <textarea class="form-control" rows="5" id="leave_reason" name="leave_reason"></textarea>
	            	</div>
				</div>
				  <div class="modal-footer">
				<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
				 <button type="submit" class="btn btn-success btn_leave"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
 			</form>	
       </div>
    </div>
  </div>
</div>
@endsection