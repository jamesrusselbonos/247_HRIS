@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="row">
			<div class="jumbotron2">
		  		<h1 style="margin-top: 130px;" class="display-4">Add Shift</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="manage_user">
			<div class="container"> 
				<div class="card">
				    <div class="card-header">
				    	<div class="row">
				    		<div class="col-lg-12">
				    			<span>
				    				<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add A Shift</button>
				    			</span>
				    		</div>
				    		
				    	</div>
				    </div>

				    <div class="card-body">
				   
				        <table class="table display nowrap" id="addDataTable">
				          <thead>
				            <tr>
				              <th scope="col">Shift Name</th>
				              <th scope="col">Shift Start</th>
				              <th scope="col">Shift End</th>				              
				              <th scope="col">Lunch/Rest Break Start</th>
				              <th scope="col">Lunch/Rest Break End</th>
				              <th scope="col">Manage</th>
				            </tr>
				          </thead>
				          <tbody>
				          	@foreach($shifts as $shift)
				      		<tr>
					              <td scope="row" style="min-width: 150px;">
									{{ $shift->name }}
					              </td>
					              
					              <td style="min-width: 150px;">
					              	{{ $shift->shift_start }}
					              </td>

					              <td style="min-width: 150px;">
					              	{{ $shift->shift_end }}
					              </td>					              

					              <td style="min-width: 200px;">
					              	{{ $shift->break_start }}
					              </td>

					              <td style="min-width: 200px;">
					              	{{ $shift->break_end }}
					              </td>
					             
					             <td style="min-width: 200px;">
					             	<div class="btn_desktop">
					             		<span style="float: right;">
		     								<button type="button" class="btn btn-primary edit-level" data-toggle="modal" data-target=".Edit_modal" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
		     								<a href="/level_delete/"><button type="button" class="btn btn-danger btn_delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button></a>
		     							</span>
					             	</div>
					             	<div class="btn_mobile">
					             		<span style="float: right;">
		     								<button type="button" class="btn btn-primary edit-level" data-toggle="modal" data-target=".Edit_modal" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
		     								<a href="/level_delete/"><button type="button" class="btn btn-danger btn_delete"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
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

	<div class="modal fade Edit_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel">Edit Job Level</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
	              <form method="POST" action="{{route('admin.job_level.edit')}}">
	              	{{ csrf_field() }}
	                <div class="form-row">
	                	<div class="form-group col-md-12">
	                	  <label>Job Level</label>
	                	   <input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Description</label>
	                	   <textarea class="form-control" rows="5" id="mlevel_desc" name="mlevel_desc"></textarea>
	                	</div>
	                	<div class="form-group col-md-12">
	                	 
	                	   <input type="hidden" class="form-control mlevel_id" rows="5" id="mlevel_id" name="mlevel_id"></input>
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
		               <button type="submit" class="btn btn-success btn_edit"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
		            </div>
	              </form>
	            </div>
	            
	          </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel">Add Shift</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
	              <form method="POST" action="{{route('admin.shift.create')}}">
	              	{{ csrf_field() }}
	                <div class="form-row">
	                	<div class="form-group col-md-12">
	                	  <label>Shift Name</label>
	                	   <input type="text" name="shift_name" class="form-control" >
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <div><h6>Shift</h6></div>
	                	  <label>Start</label>
	                	  <input type="time" name="shift_start" class="form-control">
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>End</label>
	                	  <input type="time" name="shift_end" class="form-control">
	                	</div>	                	

	                	<div class="form-group col-md-12">
	                		<input type='hidden' value='0' name='night_diff'>
	                	  <input type="checkbox" name="night_diff" value="1"> Night Differential<br>
	                	</div>

	                	<div class="form-group col-md-12">
	                		<div><h6>Lunch/Rest Break</h6></div>
	                		<label>Start</label>
	                		<input type="time" name="lunch_rest_start" class="form-control">
	                	</div>	                	  	
	                	<div class="form-group col-md-12">
	                		<label>End</label>
	                		<input type="time" name="lunch_rest_end" class="form-control">
	                	</div>

	                </div>
	                <div class="modal-footer">
	              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
		               <button type="submit" class="btn btn-success btn_save_shift"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
		            </div>
	              </form>
	            </div>
	          </div>
	    </div>
	  </div>
	</div>

@endsection