@extends('admin')

@section('content')
	<div class="col-lg-12">
		<div class="manage_user">
			<div class="container">
				<div class="card">
				    <div class="card-header">
				    	<div class="row">
				    		<div class="col-lg-4">
				    			<input type="text" name="search_time" class="form-control search_time" placeholder="Search Employee" >
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
				   
				        <table class="table table-bordered">
				          <thead>
				            <tr>
				              <th scope="col">Name</th>
				              <th scope="col">Username</th>
				              <th scope="col">Password</th>
				              <th scope="col">Manage</th>
				            </tr>
				          </thead>
				          <tbody>
				      
				            <tr>

				              <th scope="row">
				              	Adrian Benitez </br>
				              	Web Developer, 247-OPM-0001
				              </th>
				              <td>
				              	adrian@247
				              </td>
				              <td>
				              	password
				              </td>
				             
				             <td>
				             	<span style="float: right;">
     								<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
     								<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button>
     							</span>
				             </td>
				            </tr>
				                  
				           
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
	          <h5 class="modal-title" id="exampleModalLabel">Edit Username</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
	              <form>
	                <div class="form-row">
	                	<div class="form-group col-md-4">
	                	  <label>Username</label>
	                	   <input type="text" name="uname" class="form-control" >
	                	</div>

	                	<div class="form-group col-md-4">
	                	  <label>Password</label>
	                	  <input type="text" name="pword" class="form-control" >
	                	</div>
	                	<div class="form-group col-md-4">
	                	  <label>Role</label>
	                	   <select>
	                	  	<option value="2">Employee</option>
	                	    <option value="1">Admin</option>
	                	  </select>
	                	</div>
	                </div>
	              </form>
	            </div>
	            <div class="modal-footer">
	              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
	               <button type="button" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
	            </div>
	          </div>
	    </div>
	  </div>
	</div>

@endsection