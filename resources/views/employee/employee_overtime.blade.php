@extends('employee.employee')

@section('employee_content')

<div class="col-lg-12">
	<div class="memo_page" data-simplebar>
		<div class="">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-lg-12">
			    			<span>
			    				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#request_overtime"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Request Overtime</button>
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
			              <th scope="col">Time From</th>
			              <th scope="col">Time To</th>
			              <th scope="col">Duration</th>
			              <th scope="col">Reason</th>
			              <th scope="col">Status</th>
			              <th scope="col">Manage</th>
			            </tr>
			          </thead>
			          <tbody>
			      
			      		@foreach($overtime as $ot)

				            <tr>

				              <th style="max-width: 200px;">
				              	<p></p>
				              	<p style="margin-top: -15px;">{{ Auth::user()->employee()->first()->lastname }}, {{ Auth::user()->employee()->first()->firstname }} {{ Auth::user()->employee()->first()->middle_name }}</p>
				              </th>
				              <th style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
				              	{{ $ot->date }}
				              </th>				              
				              <th style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
				              	{{ $ot->time_from }}
				              </th>				              
				              <th style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
				              	{{ $ot->time_to }}
				              </th>
				              <td style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
				              	{{ $ot->duration }}
				              </td>
				               <td style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
				              	{{ $ot->reason }}
				              </td>
				              <td style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
				              	{{ $ot->status }}
				              </td>
				              <td style="max-width: 200px;">
				             	<span style="float: right;">
				             		<button id="" type="button" class="btn btn-success" data-toggle="modal" data-target="#view_memo"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View</button>
				             		
				             		<button id="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#view_memo"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Edit</button>
	 								
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

<div class="modal fade request_overtime" id="request_overtime" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          <h5>Overtime Request</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
       </div>
       <div class="modal-body" style="padding-left: 30px; padding-right: 30px;">
 			<form method="POST" action="{{ route('employee.request_overtime') }}">
 				{{ csrf_field() }}
	 			<div class="form-row">
					<div class="form-group col-md-12">
					  <h4>{{ Auth::user()->employee()->first()->lastname }}, {{ Auth::user()->employee()->first()->firstname }} {{ Auth::user()->employee()->first()->middle_name }}</h4>
					  <h6 style="margin-top: -10px;">{{ Auth::user()->employee()->first()->employee_id }}</h6>
					  <input type="hidden" name="overtime_lname" value="{{ Auth::user()->employee()->first()->lastname }}">
					  <input type="hidden" name="overtime_fname" value="{{ Auth::user()->employee()->first()->firstname }}">
					  <input type="hidden" name="overtime_mname" value="{{ Auth::user()->employee()->first()->middle_name }}">
					  <input type="hidden" name="overtime_empid" value="{{ Auth::user()->employee()->first()->employee_id }}	">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
					  <label>Date</label>
					  <input type="date" name="overtime_date" id="overtime_date" max="3000-12-31" 
									          min="1000-01-01" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
					  <label>Time From</label>
					  <input type="time" name="time_from" class="form-control">
					</div>
					<div class="form-group col-md-6">
					  <label>Time To</label>
					 <input type="time" name="time_to" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
					  <label>Duration</label>
					  <input type="text" name="duration" id="duration" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
	            	  <label>Reason</label>
	            	  <textarea class="form-control" rows="5" id="overtime_reason" name="overtime_reason"></textarea>
	            	</div>
				</div>
				  <div class="modal-footer">
				<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
				 <button type="submit" class="btn btn-success btn_overtime"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
 			</form>	
       </div>
    </div>
  </div>
</div>
@endsection