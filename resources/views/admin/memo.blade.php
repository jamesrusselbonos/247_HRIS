@extends('admin.admin')

@section('content')

<div class="col-lg-12">
	<div class="memo_page">
		<div class="container">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-lg-12">
			    			<span>
			    				<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Memo</button>
			    			</span>
			    		</div>
					</div>
				</div>
				 <div class="card-body">
				   
			        <table class="table table-bordered" id="addDataTable">
			          <thead>
			            <tr>
			              <th scope="col">Employee</th>
			              <th scope="col">Employee ID</th>
			              <th scope="col">Memo</th>
			              <th scope="col">Date</th>
			              <th scope="col">Manage</th>
			            </tr>
			          </thead>
			          <tbody>
			      
			      		

			            <tr>

			              <th scope="row">
			              	
			              </th>
			              
			              <td style="max-width: 400px;">
			              	
			              </td>
			               <td style="max-width: 400px;">
			              	
			              </td>
			               <td style="max-width: 400px;">
			              	
			              </td>
			             
			             <td>
			             	<span style="float: right;">
			             		<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp; Send Memo</button>
 								<button type="button" class="btn btn-primary edit-job" data-toggle="modal" data-target=".Edit_modal" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
 								<a href=""><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button></a>
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
	          <h5 class="modal-title" id="exampleModalLabel">Add A Memo</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
	              <form method="POST" action="{{route('admin.job_title')}}">
	              	{{ csrf_field() }}
	                <div class="form-row">
	                	<div class="form-group col-md-12">
	                	  <label>Job Title</label>
	                	  <select id="edit_ejobtitle" name="edit_ejobtitle">
						  	@foreach($memo_employee as $e_memo)
						  		<option value="{{$e_memo->id}}">{{$e_memo->lastname}}, {{$e_memo->firstname}} {{$e_memo	->middle_name}}</option> 
						  	@endforeach
						  </select>
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Employee ID</label>
	                	  <input type="text" name="edit_ejobdesc" id="edit_ejobdesc" class="form-control" >
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Memo</label>
	                	   <textarea class="form-control" rows="5" id="job_desc" name="job_desc"></textarea>
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Date</label>
	                	    <input type="date" name="edit_ebday" id="edit_ebday" max="3000-12-31" 
								          min="1000-01-01" class="form-control">
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