@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="job_pages">
			<div class="container"> 
				<div class="card">
				    <div class="card-header">
				    	<div class="row">
				    		<div class="col-lg-12">
				    			<span>
				    				<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Job</button>
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
				   
				        <table class="table table-bordered">
				          <thead>
				            <tr>
				              <th scope="col">Job Title</th>
				              <th scope="col">Description</th>
				              
				              <th scope="col">Manage</th>
				            </tr>
				          </thead>
				          <tbody>
				      
				            <tr>

				              <th scope="row">
				              	Web Developement
				              </th>
				              
				              <td style="max-width: 400px;">
				              	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
				              </td>
				             
				             <td>
				             	<span style="float: right;">
     								<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".Edit_modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
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

	<div class="modal fade Edit_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel">Edit Job</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
	              <form>
	                <div class="form-row">
	                	<div class="form-group col-md-12">
	                	  <label>Job Title</label>
	                	   <input type="text" name="j_title" class="form-control" >
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Description</label>
	                	   <textarea class="form-control" rows="5" id="j_desc" name="j_desc"></textarea>
	                	</div>
	                	<!-- <div class="form-group col-md-4">
	                	  <label>Role</label>
	                	   <select>
	                	  	<option value="2">Employee</option>
	                	    <option value="1">Admin</option>
	                	  </select>
	                	</div> -->
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

	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel">Add Job</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
	              <form>
	                <div class="form-row">
	                	<div class="form-group col-md-12">
	                	  <label>Job Title</label>
	                	   <input type="text" name="j_title" class="form-control" >
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Description</label>
	                	   <textarea class="form-control" rows="5" id="j_desc" name="j_desc"></textarea>
	                	</div>
	                	<!-- <div class="form-group col-md-4">
	                	  <label>Role</label>
	                	   <select>
	                	  	<option value="2">Employee</option>
	                	    <option value="1">Admin</option>
	                	  </select>
	                	</div> -->
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