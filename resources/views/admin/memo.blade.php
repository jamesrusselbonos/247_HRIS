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
			              <th scope="col">Subject</th>
			              <th scope="col">Attachment</th>
			              <th scope="col">Date</th>
			              <th scope="col">Manage</th>
			            </tr>
			          </thead>
			          <tbody>
			      
			      		@foreach( $memos as $mem)


			            <tr>

			              <th style="max-width: 100px;">
			              	{{ $mem->memo }}
			              </th>
			              <th style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
			              	{{ $mem->subject }}
			              </th>
			              <td style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
			              	{{ $mem->attachment }}
			              </td>
			               <td style="max-width: 50px;">
			              	{{ $mem->memo_date }}
			              </td>
			              
			             
			             <td style="max-width: 200px;">
			             	<span style="float: right;">
			             		<button id="{{ $mem->id }}" type="button" class="btn btn-success memo_view" data-toggle="modal" data-target="#view_memo" v_memoid="{{$mem->id}}" v_memo="{{ $mem->memo }}" v_subject="{{ $mem->subject }}" v_attachment="{{ $mem->attachment }}" v_memodate="{{ $mem->memo_date }}"><i class="fa fa-eye" aria-hidden="true"> View</i></button>
			             		<button id="{{ $mem->id }}" type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-paper-plane" aria-hidden="true"> Send</i></button>
 								<button id="{{ $mem->id }}" type="button" class="btn btn-primary edit-job" data-toggle="modal" data-target=".Edit_modal" ><i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i></button>
 								<a href=""><button id="{{ $mem->id }}" type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"> Delete</i></button></a>
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

<div class="modal fade view_memo" id="view_memo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          <!-- <h5 class="modal-title" id="exampleModalLabel">Add A Memo</h5> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
       </div>
       <div class="modal-body" style="padding: 30px 30px 30px 30px;">
       		<div class="row">
       			<div class="col-lg-12">
       				<input type="hidden" name="vmodal_memoid" id="vmodal_memoid">
       				<h3 style="margin: 0; margin-bottom: 10px;" id="vmodal_memo"></h3>
       				<h6 style="margin: 0; margin-bottom: 10px;" id="vmodal_subject"></h6>
       				<p id="vmodal_memodate"></p>
       			</div>
       		</div>
       		<div class="row">
       			<div class="col-lg-12">
       				<div class="attach">
       					<div class="row">
       						<div class="col-lg-1" style="text-align: center;">
       							<i class="fa fa-file-text-o" aria-hidden="true" style="font-size: 50px; color: #282828;"></i>
       						</div>
       						<div class="col-lg-11">
       							<h6 id="vmodal_filename" style="margin: 0; margin-bottom: 10px; font-weight: bold;"></h6>
       							<a class="memo_download" href="" download=""><i class="fa fa-download" aria-hidden="true">&nbsp; Download</i></a>
       						</div>
       					</div>
       				</div>
       			</div>
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
	                	   <input class="form-control" rows="5" id="memo" name="memo">
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Subject</label>
	                	   <textarea class="form-control" rows="5" id="subject" name="subject"></textarea>
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