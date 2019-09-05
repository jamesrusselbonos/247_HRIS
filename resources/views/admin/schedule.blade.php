@extends('admin.admin')

@section('content')

<div class="col-lg-12">
	<div class="sched_page">
		<div class="">
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
				 <div class="card-body">
				   
			        <table class="table table-bordered" id="addDataTable">
			          <thead>
			            <tr>
			              
			              <th scope="col">Employee</th>
			              <th scope="col">Date</th>
			              <th scope="col">Task</th>
			              <th scope="col">Comment</th>
			              <th scope="col">Duration</th>
			              <th scope="col">Other Task</th>
			              <th scope="col">Manage</th>
			            </tr>
			          </thead>
			          <tbody>
			      
			      		
			          	@foreach($sched_list as $sch_list)

				            <tr>

				              <th style="max-width: 150px;">
				              	<p>{{ $sch_list->lastname }}, {{ $sch_list->firstname }} {{ $sch_list->middle_name }}</p>
				              	<p style="margin-top: -15px;">{{ $sch_list->employee_id }}</p>
				              </th>
				              <th style="text-overflow: ellipsis; max-width: 150px; min-height: 100px; white-space: nowrap; overflow: hidden;">
				              	<p>{{ $sch_list->date_from }} to {{ $sch_list->date_to }}</p>
				              </th>
				              <td style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
				              	{{ $sch_list->task }}
				              </td>
				               <td style="text-overflow: ellipsis; max-width: 50px; min-height: 100px; white-space: nowrap; overflow: hidden;">
				              	{{ $sch_list->comment }}
				              </td>
				               <td style="text-overflow: ellipsis; max-width: 50px; min-height: 100px; white-space: nowrap; overflow: hidden;">
				              	{{ $sch_list->duration }}
				              </td>
				               <td style="text-overflow: ellipsis; max-width: 50px; min-height: 100px; white-space: nowrap; overflow: hidden;">
				              	{{ $sch_list->other }}
				              </td>
				             
				             <td style="max-width: 200px;">
				             	<span style="float: right;">
				             		<button id="" type="button" class="btn btn-success memo_view" data-toggle="modal" data-target="#view_memo"><i class="fa fa-eye" aria-hidden="true"> View</i></button>
	 								<button id="" type="button" class="btn btn-primary edit_memo" data-toggle="modal" data-target="#edit_memo_modal"><i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i></button>
	 								<a href=""><button id="" type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"> Delete</i></button></a>
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
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
        	         				@foreach($sched_employee as $sched_emp)
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
@endsection