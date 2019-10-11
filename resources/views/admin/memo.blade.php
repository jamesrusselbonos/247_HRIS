@extends('admin.admin')

@section('content')

<div class="col-lg-12">
	<div class="row">
			<div class="jumbotron2">
		  		<h1 style="margin-top: 130px;" class="display-4">Memos</h1>
			</div>
		</div>
	<div class="row">
		<div class="col-xl-12">
			<div class="memo_page" data-simplebar>
		<div class="">
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

			              <td style="min-width: 200px;">
			              	{{ $mem->memo }}
			              </td>
			              <td style="text-overflow: ellipsis; max-width: 200px; min-height: 100px; white-space: nowrap; overflow: hidden;">
			              	{{ $mem->subject }}
			              </td>
			              <td style="text-overflow: ellipsis; max-width: 200px; min-height: 100px; white-space: nowrap; overflow: hidden;">
			              	{{ $mem->attachment }}
			              </td>
			               <td style="min-width: 150px;">
			              	{{ $mem->memo_date }}
			              </td>
			              
			             
			             <td style="min-width: 400px;">
			             	<div class="btn_desktop">
			             		<span style="float: right;">
			             		<button id="{{ $mem->id }}" type="button" class="btn btn-success memo_view" data-toggle="modal" data-target="#view_memo" v_memoid="{{$mem->id}}" v_memo="{{ $mem->memo }}" v_subject="{{ $mem->subject }}" v_attachment="{{ $mem->attachment }}" v_memodate="{{ $mem->memo_date }}"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View</button>
			             		<button id="{{ $mem->id }}" type="button" class="btn btn-info send_memo" data-toggle="modal" data-target="#send_memo" s_memoid="{{$mem->id}}" s_memo="{{ $mem->memo }}" s_subject="{{ $mem->subject }}" s_attachment="{{ $mem->attachment }}" s_memodate="{{ $mem->memo_date }}"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;Send</button>
 								<button id="{{ $mem->id }}" type="button" class="btn btn-primary edit_memo" data-toggle="modal" data-target="#edit_memo_modal" e_memoid="{{$mem->id}}" e_memo="{{ $mem->memo }}" e_subject="{{ $mem->subject }}" e_attachment="{{ $mem->attachment }}" e_memodate="{{ $mem->memo_date }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit</button>
 								<a href="/memo_delete/{{ $mem->id }}"><button id="{{ $mem->id }}" type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete</button></a>
 							</span>
			             	</div>
			             	<div class="btn_mobile">
			             		<span style="float: right;">
			             		<button id="{{ $mem->id }}" type="button" class="btn btn-success memo_view" data-toggle="modal" data-target="#view_memo" v_memoid="{{$mem->id}}" v_memo="{{ $mem->memo }}" v_subject="{{ $mem->subject }}" v_attachment="{{ $mem->attachment }}" v_memodate="{{ $mem->memo_date }}"><i class="fa fa-eye" aria-hidden="true"></i></button>
			             		<button id="{{ $mem->id }}" type="button" class="btn btn-info send_memo" data-toggle="modal" data-target="#send_memo" s_memoid="{{$mem->id}}" s_memo="{{ $mem->memo }}" s_subject="{{ $mem->subject }}" s_attachment="{{ $mem->attachment }}" s_memodate="{{ $mem->memo_date }}"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
 								<button id="{{ $mem->id }}" type="button" class="btn btn-primary edit_memo" data-toggle="modal" data-target="#edit_memo_modal" e_memoid="{{$mem->id}}" e_memo="{{ $mem->memo }}" e_subject="{{ $mem->subject }}" e_attachment="{{ $mem->attachment }}" e_memodate="{{ $mem->memo_date }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
 								<a href="/memo_delete/{{ $mem->id }}"><button id="{{ $mem->id }}" type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
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
       					<h3 style="margin: 0; margin-bottom: 30px;" id="vmodal_memo"></h3>
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
       								<a class="memo_download" href="" download=""><i class="fa fa-download" aria-hidden="true"></i>&nbsp; Download</a>
       							</div>
       						</div>
       					</div>
       				</div>
       			</div>	
       		</div>
    	</div>
  	</div>
</div>

<div class="modal fade send_memo" id="send_memo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          <!-- <h5 class="modal-title" id="exampleModalLabel">Send Memo</h5> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
       </div>
       <div class="modal-body" style="padding: 30px 30px 30px 30px;">
       	<form enctype="multipart/form-data">

       		<input id="hdn-token" class="hdn-token" type="hidden" name="_token" value="{{csrf_token()}}">
       		<input id="hdn-name" class="hdn-name" type="hidden" name="name" value="{{auth()->user()->name}}">
       		<h5>Select a recipient</h5>
       		<div class="row" style="padding-bottom: 30px; padding-left: 20px; padding-right: 20px;">
       			
       			<select class="memoemp_search form-control" data-placeholder="Select Recipient" data-allow-clear="true" style="width: 100%;" name="memoemp_search1" name="memos[]" multiple="multiple" >
       				<option></option>  
       				<option value = "0001">All</option>  
       				@foreach($memo_user as $user)
       				<option value="{{ $user->employee_id }}">{{ $user->firstname }} {{ $user->lastname }}</option>
       				@endforeach	
       			</select>
       			
       		</div>
       		<div class="memo_container">
       			<div class="row">
       				<div class="col-lg-12">
       					<input type="hidden" name="smodal_memoid" id="smodal_memoid">
       					<h3 style="margin: 0; margin-bottom: 30px;" name="smodal_memo" id="smodal_memo" ></h3>
       					<h6 style="margin: 0; margin-bottom: 10px;" id="smodal_subject" name="smodal_subject"></h6>
       					<p id="smodal_memodate"></p>
       				</div>
       			</div>
       			<div class="row">
       				<div class="col-lg-12">
       					<div class="attach">
       						<div class="row">
       							<div class="col-lg-1">
       								<i class="fa fa-file-text-o" aria-hidden="true" style="font-size: 50px; color: #282828;"></i>
       							</div>
       							<div class="col-lg-11">
       								<h6 id="smodal_filename" style="margin: 0; margin-bottom: 10px; font-weight: bold;"></h6>
       								<!-- <a class="memo_download" href="" download=""><i class="fa fa-download" aria-hidden="true">&nbsp; Download</i></a> -->
       							</div>
       						</div>
       					</div>
       				</div>
       			</div>
       		</div>
       		<div class="modal-footer">
	             <div id="btn">
         			<button type="button" class="btn btn-info btn_sent" id="btn_send"><i class="fa fa-paper-plane" aria-hidden="true"> Send</i></button>
         		</div>
	         </div>
       	</form>	
       </div>
    </div>
  </div>
</div>

<div class="modal fade edit_memo_modal" id="edit_memo_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	 <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	       	<div class="modal-header">
	            <h5 class="modal-title" id="exampleModalLabel">Edit Memo</h5>
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	               <span aria-hidden="true">&times;</span>
	            </button>
	       	</div>
	        <div class="modal-body">
	              <form method="POST" action="{{ route('admin.memo.edit') }}" enctype="multipart/form-data">
	              	{{ csrf_field() }}
	                <div class="form-row">

	                	<div class="form-group col-md-12">
	                	  <label>Memo</label>
	                	   <input class="form-control" rows="5" id="edit_memo_title" name="edit_memo_title">
	                	   <input type="hidden" name="edit_memo_id" id="edit_memo_id">
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Subject</label>
	                	   <textarea class="form-control" rows="5" id="edit_memo_subject" name="edit_memo_subject"></textarea>
	                	</div>

	                	<div class="form-group col-md-12">
	                	  <label>Attachment</label></br>
	                	  <input type="file" name="edit_memo_file" id="edit_memo_file" />
	                	  <input type="hidden" name="hidden_edit_attachment" id="hidden_edit_attachment">
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