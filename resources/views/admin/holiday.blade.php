@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="row">
			<div class="jumbotron2">
		  		<h1 style="margin-top: 130px;" class="display-4">Add Holiday</h1>
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
				    				<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add A Holiday</button>
				    			</span>
				    		</div>
				    		<!-- <div class="col-lg-4">
				    			<div style="float: right;" class="dropdown">
				    			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    			    Export
				    			  </button>
				    			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    			    <a class="dropdown-item" href="#">Copy</a>
				    			    <a class="dropdown-item" href="#">Excel</a>
				    			    <a class="dropdown-item" href="#">CSV</a>
				    			    <a class="dropdown-item" href="#">Print</a>
				    			  </div>
				    			</div>
				    		</div>
				    		<div class="col-lg-4">
				    			<input type="date" name="bday" max="3000-12-31" 
				    			        min="1000-01-01" class="form-control">
				    		</div> -->
				    	</div>
				    </div>

				    <div class="card-body">
				   
				        <table class="table display nowrap" id="DataTable">
				          <thead>
				            <tr>
				              <th scope="col">Holiday</th>
				              <th scope="col">Date</th>
				              <th scope="col">Holiday Type</th>
				              <th scope="col">Manage</th>
				            </tr>
				          </thead>
				          <tbody>
				      		@foreach($holidays as $holi)
				      		<tr>
					              <td scope="row"  style="min-width: 200px;">
					              	{{$holi->holiday_name}}
					              </td>
					              
					              <td style="min-width: 200px;">
					              	{{$holi->date}}
					              </td>
					              <td style="min-width: 200px;">
					              	{{$holi->holiday_type}}
					              </td>
					             
					             <td>
					             	<span style="float: right;">
	     								<button type="button" class="btn btn-primary edit-level" data-toggle="modal" data-target=".Edit_modal" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
	     								<a href="/level_delete/"><button type="button" class="btn btn-danger btn_delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button></a>
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
	          <h5 class="modal-title" id="exampleModalLabel">Add Job Level</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
	              <form method="POST" action="{{route('holidays.create')}}">
	              	{{ csrf_field() }}
	                <div class="form-row">
	                	<div class="form-group col-md-12">
	                	  <label>Holiday</label>
	                	   <input type="text" name="holiday" class="form-control" >
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Date</label>
	                	   <input type="date" name="holiday_date" max="3000-12-31" 
										          min="1000-01-01" class="form-control">
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Holiday Type</label>
	                	   <select name="holiday_type">
							  	@foreach($holiday_type as $type)
							  	<option value="{{$type->id}}">{{$type->holiday_type}}</option>
							  	 @endforeach
						  </select>
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
		               <button type="submit" class="btn btn-success btn_save"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
		            </div>
	              </form>
	            </div>
	          </div>
	    </div>
	  </div>
	</div>

@endsection