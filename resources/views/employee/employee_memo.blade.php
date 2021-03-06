@extends('employee.employee')

@section('employee_content')

<div class="col-lg-12">
	<div class="row">
        <div class="jumbotron2">
          <h1 style="margin-top: 130px;" class="display-4">Memo</h1>
        </div>
      </div>
	<div class="row">
		<div class="col-xl-12">
			<div class="memo_page">
		<div class="container" data-simplebar>
			<div class="card">
				<!-- <div class="card-header">
					<div class="row">
						<div class="col-lg-12">
			    			<span>
			    				button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Memo</button>
			    			</span>
			    		</div>
					</div>
				</div> -->
				 <div class="card-body">
				   
			        <table class="mdl-data-table" id="addDataTable">
			          <thead>
			            <tr>
			              
			              <th scope="col" >Memo</th>
			              <th scope="col">Subject</th>
			              <th scope="col">Attachment</th>
			              <th scope="col">Date</th>
			              <th scope="col">Manage</th>
			            </tr>
			          </thead>
			          <tbody>
			      
			      		@foreach(auth()->user()->Notifications as $notification)

			      		@if($notification->type == "App\Notifications\SendMemo")
				            <tr>

				              <td style="min-width: 150px;">
				              	{{$notification->data['title']}}
				              </td>
				              <td style="text-overflow: ellipsis; max-width: 150px; min-height: 100px; white-space: nowrap; overflow: hidden;">
				              	{{$notification->data['subject']}}
				              </td>
				              <td style="text-overflow: ellipsis; max-width: 150px; min-height: 100px; white-space: nowrap; overflow: hidden;">
				              	{{$notification->data['file']}}
				              </td>
				               <td style="min-width: 150px;">
				              	{{$notification->data['date']}}
				              </td>
				              
				             
				             <td style="min-width: 200px;">
				             	<div class="btn_desktop">
				             		<span style="float: right;">
					             		<button id="{{ $notification->id }}" type="button" class="btn btn-success memo_view" memo_id="{{ $notification->id }}" memo_title="{{ $notification->data['title'] }}" memo_subj="{{ $notification->data['subject'] }}" memo_file="{{ $notification->data['file'] }}" memo_date="{{ $notification->data['date'] }}" data-toggle="modal" data-target="#view_memo"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View</button>
		 							</span>
				             	</div>
				             	<div class="btn_mobile">
				             		<span style="float: right;">
					             		<button id="{{ $notification->id }}" type="button" class="btn btn-success memo_view" memo_id="{{ $notification->id }}" memo_title="{{ $notification->data['title'] }}" memo_subj="{{ $notification->data['subject'] }}" memo_file="{{ $notification->data['file'] }}" memo_date="{{ $notification->data['date'] }}" data-toggle="modal" data-target="#view_memo"><i class="fa fa-eye" aria-hidden="true"></i></button>
		 							</span>
				             	</div>
				             </td>
				            </tr>
			      		@endif
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
       							<a class="v_memo_download" href="" download=""><i class="fa fa-download" aria-hidden="true">&nbsp;</i>&nbsp;Download</a>
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