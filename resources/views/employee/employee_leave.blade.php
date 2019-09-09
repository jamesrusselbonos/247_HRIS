@extends('employee.employee')

@section('employee_content')

<div class="col-lg-12">
	<div class="memo_page">
		<div class="container">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-lg-12">
			    			<span>
			    				<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Request Leave</button>
			    			</span>
			    		</div>
					</div>
				</div>
				 <div class="card-body">
				   
			        <table class="table table-bordered" id="addDataTable">
			          <thead>
			            <tr>
			              
			              <th scope="col">Name</th>
			              <th scope="col">Leave Type</th>
			              <th scope="col">Date From</th>
			              <th scope="col">Date To</th>
			              <th scope="col">Reason</th>
			              <th scope="col">Manage</th>
			            </tr>
			          </thead>
			          <tbody>
			      
			      		


			            <tr>

			              <th style="max-width: 100px;">
			              	
			              </th>
			              <th style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
			              	
			              </th>
			              <td style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
			              	
			              </td>
			               <td style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
			              	
			              </td>
			              <td style="text-overflow: ellipsis; max-width: 100px; min-height: 100px; white-space: nowrap; overflow: hidden;">
			              	
			              </td>
			              
			             
			             <td style="max-width: 200px;">
			             	<span style="float: right;">
			             		<button id="" type="button" class="btn btn-success data-toggle="modal" data-target="#view_memo"><i class="fa fa-eye" aria-hidden="true"> View</i></button>
			             		<button id="" type="button" class="btn btn-primary data-toggle="modal" data-target="#view_memo"><i class="fa fa-eye" aria-hidden="true"> Edit</i></button>
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
       				<input type="hidden" name="v_vmodal_memoid" id="v_vmodal_memoid">
       				<h3 style="margin: 0; margin-bottom: 30px;" id="v_vmodal_memo"></h3>
       				<h6 style="margin: 0; margin-bottom: 10px;" id="v_vmodal_subject"></h6>
       				<p id="v_modal_memodate"></p>
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
       							<h6 id="v_modal_filename" style="margin: 0; margin-bottom: 10px; font-weight: bold;"></h6>
       							<a class="v_memo_download" href="" download=""><i class="fa fa-download" aria-hidden="true">&nbsp; Download</i></a>
       						</div>
       					</div>
       				</div>
       			</div>
       		</div>	
       </div>
    </div>
  </div>
</div>
@endsection