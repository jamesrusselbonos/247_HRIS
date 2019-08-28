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
			              
			              <th scope="col">Memo</th>
			              <th scope="col">Attachment</th>
			              <th scope="col">Date</th>
			              <th scope="col">Manage</th>
			            </tr>
			          </thead>
			          <tbody>
			      
			      		@foreach( $memos as $mem)


			            <tr>

			              <th scope="row">
			              	{{ $mem->memo }}
			              </th>
			              
			              <td style="text-overflow: ellipsis; max-width: 200px;">
			              	{{ $mem->attachment }}
			              </td>
			               <td >
			              	{{ $mem->memo_date }}
			              </td>
			              
			             
			             <td>
			             	<span style="float: right;">
			             		<button id="{{ $mem->id }}" type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; View</button>
			             		<button id="{{ $mem->id }}" type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp; Send</button>
 								<button id="{{ $mem->id }}" type="button" class="btn btn-primary edit-job" data-toggle="modal" data-target=".Edit_modal" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
 								<a href=""><button id="{{ $mem->id }}" type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button></a>
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
	          <h5 class="modal-title" id="exampleModalLabel">Add A Memo</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	       </div>
	       <div class="modal-body">
	              <form method="POST" action="{{ route('admin.memo.create') }}" enctype="multipart/form-data">
	              	{{ csrf_field() }}
	                <div class="form-row">

	                	<div class="form-group col-md-12">
	                	  <label>Memo</label>
	                	   <textarea class="form-control" rows="5" id="memo" name="memo"></textarea>
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Attachment</label></br>
	                	  <input type="file" name="file" id="file" />
	                	</div>	

	                	<div class="form-group col-md-12">
	                	  <label>Date</label>
	                	    <input type="date" name="memo_date" id="memo_date" max="3000-12-31" 
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