@extends('admin.admin')

@section('content')

<div class="col-lg-12">
	<div class="row">
			<div class="jumbotron2">
		  		<h1 style="margin-top: 130px;" class="display-4">Overtime Request</h1>
			</div>
		</div>
	<div class="row">
		<div class="col-xl-12">
			<div class="memo_page" data-simplebar>
		<div class="">
			<div class="card">

				 <div class="card-body">
				   <input id="hdn-token" class="hdn-token" type="hidden" name="_token" value="{{csrf_token()}}">
			        <table class="mdl-data-table" id="addDataTable">
			          <thead>
			            <tr>
			              
			              <th scope="col" style="min-width: 200px;">Employee</th>
			              <th scope="col" style="min-width: 150px;">Date</th>
			              <th scope="col" style="min-width: 200px;">Time From</th>
			              <th scope="col" style="min-width: 200px;">Time To</th>
			              <th scope="col" style="min-width: 150px;">Duration</th>
			              <th scope="col" style="min-width: 200px;">Reason</th>
			              <th scope="col" style="min-width: 150px;">Status</th>
			              <th scope="col" style="min-width: 150px;">Manage</th>
			            </tr>
			          </thead>
			          <tbody>
			      
			      		@foreach( $overtimes as $ot)


			            <tr>

			              <th style="min-width: 200px;">
			              	{{ $ot->lastname }}, {{ $ot->firstname }} {{ $ot->middle_name }}
			              </th>
			              <th style="text-overflow: ellipsis; min-width: 150px; min-height: 100px; white-space: nowrap; overflow: hidden;">
			              	{{ $ot->date }}
			              </th>
			              <td style="text-overflow: ellipsis; min-width: 200px; min-height: 100px; white-space: nowrap; overflow: hidden;">
			              	{{ $ot->time_from }}
			              </td>			              
			              <td style="text-overflow: ellipsis; min-width: 200px; min-height: 100px; white-space: nowrap; overflow: hidden;">
			              	{{ $ot->time_to }}
			              </td>
			              <td style="text-overflow: ellipsis; min-width: 150px; min-height: 100px; white-space: nowrap; overflow: hidden;">
			              	{{ $ot->duration }}
			              </td>			              
			              <td style="text-overflow: ellipsis; min-width: 200px; min-height: 100px; white-space: nowrap; overflow: hidden;">
			              	{{ $ot->reason }}
			              </td>
			               <td style="min-width: 150px;">
			              	{{ $ot->status }}
			              </td>
			              
			             
			             <td style="min-width: 150px;">
			             	<div class="btn_desktop">
			             		<span style="float: right;">
				             		<button id="{{ $ot->otime_id }}" type="button" class="btn btn-success overtime_view_edit" data-toggle="modal" data-target="#view_overtime" ><i class="fa fa-eye" aria-hidden="true"></i></button>
				             	@if($ot->status == "Pending")
				             		<button id="{{ $ot->otime_id }}" type="button" class="btn btn-primary overtime_view_edit" data-toggle="modal" data-target="#edit_overtime_modal" ><i class="fa fa-check" aria-hidden="true"></i></button>
	 							@endif	
	 							</span>
			             	</div>
			             	<div class="btn_mobile">
			             		<span style="float: right;">
				             		<button id="{{ $ot->otime_id }}" type="button" class="btn btn-success overtime_view_edit" data-toggle="modal" data-target="#view_overtime" ><i class="fa fa-eye" aria-hidden="true"></i></button>
				             	@if($ot->status == "Pending")
				             		<button id="{{ $ot->otime_id }}" type="button" class="btn btn-primary overtime_view_edit" data-toggle="modal" data-target="#edit_overtime_modal" ><i class="fa fa-check" aria-hidden="true"></i></button>
	 							@endif	
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

<div class="modal fade edit_overtime_modal" id="edit_overtime_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
  			<div class="modal-header">
    			<h3 class="modal-title" id="exampleModalLabel">Overtime Request</h3>
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
      				<span aria-hidden="true">&times;</span>
    			</button>
  			</div>
      		<div class="modal-body" style="padding-right: 50px; padding-left: 50px;">
  				<form method="POST" action="{{route('admin.overtime.edit')}}">
  					{{ csrf_field() }}
		      		<div class="row">
		      			<h4 id="eo_lname"></h4><h4>,&nbsp;</h4><h4 id="eo_fname"></h4>&nbsp;<h4 id="eo_mname"></h4>
		      		</div>
		      		<div class="row">
		      			<h6 style="margin-top: -15px;" id="eo_empid"></h6>
		      			<input type="hidden" name="txt_eo_empid" id="txt_eo_empid">
		      			<input type="hidden" name="hdn_from" id="hdn_from" value="{{Auth::user()->name}}">
		      			<input type="hidden" name="hdn_id" id="hdn_id">
		      			<input type="hidden" name="hdn_tfrom" id="hdn_tfrom">
		      			<input type="hidden" name="hdn_tto" id="hdn_tto">
		      			<input type="hidden" name="hdn_date" id="hdn_date">
		      			<input type="hidden" name="hdn_empid" id="hdn_empid">
		      		</div>
		      		<div class="row">
		      			<h6>Date: &nbsp;</h6><h6 id="eo_date"></h6>
		      		</div>
		      		<div class="row">
		      			<h6>From: &nbsp;</h6><h6 id="eo_timefrom"></h6><h6>&nbsp; To: &nbsp;</h6><h6 id="eo_timeto"></h6>
		      		</div>		      		
		      		<div class="row">
		      			<h6>Duration: &nbsp;</h6><h6 id="eo_duration"></h6>
		      		</div>
		      		<div class="row">
		      			<h6>Reason: &nbsp;</h6><h6 id="eo_reason"></h6>
		      		</div>

		      		<div class="row">
		      			<label>Status</label>
					  	<select name="eo_status" id="eo_status">
					    	<option value="Pending">Pending</option>
					    	<option value="Approved">Approved</option>
					    	<option value="Declined">Declined</option>
					  	</select>
		      		</div>
		      		<div class="modal-footer" style="margin-top: 20px;">
	              	   	<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
		               	<button type="submit" class="btn btn-success btn_save_overtime"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
		            </div>
  				</form>
    		</div>
  		</div>
  	</div>
</div>


<div class="modal fade view_overtime" id="view_overtime" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
  			<div class="modal-header">
    			<h3 class="modal-title" id="exampleModalLabel">Overtime Request</h3>
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
      				<span aria-hidden="true">&times;</span>
    			</button>
  			</div>
      		<div class="modal-body" style="padding-right: 50px; padding-left: 50px;">
  				<form method="" action="">
  					{{ csrf_field() }}
		      		<div class="row">
		      			<h4 id="vo_lname"></h4><h4>,&nbsp;</h4><h4 id="vo_fname"></h4>&nbsp;<h4 id="vo_mname"></h4>
		      		</div>
		      		<div class="row">
		      			<h6 style="margin-top: -15px;" id="vo_empid"></h6>
		      			<input type="hidden" name="txt_eo_empid" id="txt_vo_empid">
		      			<input type="hidden" name="hdn_from" id="hdn_from" value="{{Auth::user()->name}}">
		      			<input type="hidden" name="hdn_id" id="hdn_id">
		      		</div>
		      		<div class="row">
		      			<h6>Date: &nbsp;</h6><h6 id="vo_date"></h6>
		      		</div>
		      		<div class="row">
		      			<h6>From: &nbsp;</h6><h6 id="vo_timefrom"></h6><h6>&nbsp; To: &nbsp;</h6><h6 id="vo_timeto"></h6>
		      		</div>		      		
		      		<div class="row">
		      			<h6>Duration: &nbsp;</h6><h6 id="vo_duration"></h6>
		      		</div>
		      		<div class="row">
		      			<h6>Reason: &nbsp;</h6><h6 id="vo_reason"></h6>
		      		</div>

		      		<div class="row">
		      			<h6>Status: &nbsp;</h6><h6 name="vo_status" id="vo_status"></h6>
		      		</div>

  				</form>
    		</div>
  		</div>
  	</div>
</div>
@endsection