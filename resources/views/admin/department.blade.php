@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="row">
			<div class="jumbotron2">
		  		<h1 style="margin-top: 130px;" class="display-4">Add Department</h1>
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
				    				<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Department</button>
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
				   
				        <table class="mdl-data-table" id="addDataTable">
				          <thead>
				            <tr>
				              <th scope="col">Department</th>
				              <th scope="col">Description</th>
				              
				              <th scope="col">Manage</th>
				            </tr>
				          </thead>
				          <tbody>
				      		@foreach ($departments as $depart)

				            <tr>

				              <td scope="row">
				              	{{$depart->department_name}}
				              </td>
				              
				              <td style="max-width: 400px;">
				              	{{$depart->description}} 
				              </td>
				             
				             <td>
				             	<div class="btn_desktop">
				             		<span style="float: right;">
	     								<button type="button" class="btn btn-primary edit-dept" data-toggle="modal" data-target=".Edit_modal" id="{{$depart->id}}" dep_name="{{$depart->department_name}}" dep_desc="{{$depart->description}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
	     								<a href="/delete/{{ $depart->id }}"><button id="{{$depart->id}}" type="button" class="btn btn-danger btn_delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button></a>
	     							</span>
				             	</div>
				             	<div class="btn_mobile">
				             		<span style="float: right;">
	     								<button type="button" class="btn btn-primary edit-dept" data-toggle="modal" data-target=".Edit_modal" id="{{$depart->id}}" dep_name="{{$depart->department_name}}" dep_desc="{{$depart->description}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
	     								<a href="/delete/{{ $depart->id }}"><button id="{{$depart->id}}" type="button" class="btn btn-danger btn_delete"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
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
	          <h5 class="modal-title" id="exampleModalLabel">Edit Department</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
	              <form method="POST" action="{{route('admin.department.edit')}}">
	              	{{ csrf_field() }}
	              	
	                <div class="form-row">
	                	<div class="form-group col-md-12">
	                	  <label>Department</label>
	                	   <input type="text" name="mj_title" class="form-control mj_title"required >
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Description</label>
	                	   <textarea class="form-control mj_desc" rows="5" id="mj_desc" name="mj_desc"required></textarea>
	                	</div>
	                	<div class="form-group col-md-12">
	                	 
	                	   <input type="hidden" class="form-control mj_id" rows="5" id="mj_id" name="mj_id"></input>
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
	                	   <input type="text" name="j_title" class="form-control"required >
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Description</label>
	                	   <textarea class="form-control" rows="5" id="j_desc" name="j_desc"required></textarea>
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