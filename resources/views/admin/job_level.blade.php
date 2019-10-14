@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="row">
			<div class="jumbotron2">
		  		<h1 style="margin-top: 130px;" class="display-4">Add Job Level</h1>
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
				    				<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Job Level</button>
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
				   
				        <table class="table table-bordered" id="DataTable">
				          <thead>
				            <tr>
				              <th scope="col">Job Level</th>
				              <th scope="col">Description</th>
				              
				              <th scope="col">Manage</th>
				            </tr>
				          </thead>
				          <tbody>
				      		@foreach ($level as $lv)  

				            <tr>

				              <th scope="row">
				              	{{$lv->job_level}}
				              </th>
				              
				              <td style="max-width: 400px;">
				              	{{$lv->description}}
				              </td>
				             
				             <td>
				             	<div class="btn_desktop">
				             		<span style="float: right;">
	     								<button type="button" class="btn btn-primary edit-level" data-toggle="modal" data-target=".Edit_modal" level_id="{{$lv->id}}" level_name="{{$lv->job_level}}" level_desc="{{$lv->description}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
	     								<a href="/level_delete/{{ $lv->id }}"><button type="button" class="btn btn-danger btn_delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button></a>
	     							</span>
				             	</div>
				             	<div class="btn_mobile">
				             		<span style="float: right;">
	     								<button type="button" class="btn btn-primary edit-level" data-toggle="modal" data-target=".Edit_modal" level_id="{{$lv->id}}" level_name="{{$lv->job_level}}" level_desc="{{$lv->description}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
	     								<a href="/level_delete/{{ $lv->id }}"><button type="button" class="btn btn-danger btn_delete"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
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
	                	   <input type="text" name="level_title" class="form-control"required >
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Description</label>
	                	   <textarea class="form-control" rows="5" id="level_desc" name="level_desc"required></textarea>
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