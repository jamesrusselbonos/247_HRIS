@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="row">
			<div class="jumbotron2">
		  		<h1 style="margin-top: 130px;" class="display-4">Timesheet</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="timesheet_report" data-simplebar>
			<div class="container">
				<div class="card">
				    
				    <div class="card-body">
				   
				        <table class="mdl-data-table" id="addDataTable">
				          <thead>
				            <tr>
				              <th scope="col">Name</th>
				              <th scope="col">Date</th>
				              <th scope="col">Time In</th>
				              <th scope="col">Time Out</th>
				              <th scope="col">Time Duration</th>
				              <th scope="col">Manage</th>
				            </tr>
				          </thead>
				          <tbody>
				      
				            @foreach ($time as $tt)
				            	<tr>

				              <th scope="row" style="min-width: 200px;">
				              	{{ $tt->firstname}} {{ $tt->lastname}}
				              </th>
				              <td style="min-width: 200px;">
				              	{{$tt->date}}
				              </td>
				              <td style="min-width: 150px;">
				              	{{date('h:i:s a', strtotime($tt->time_from))}}
				              </td>
				              @if($tt->time_to != null || $tt->time_to != "")
				             <td style="min-width: 150px;">
				             	{{date('h:i:s a', strtotime($tt->time_to))}}
				             </td>
				             @else
				             <td style="min-width: 150px;"></td>
				             @endif
				             <td style="min-width: 150px;">{{ $tt->time_duration }}</td>
				             <td style="min-width: 150px;">
				             	<div class="btn_desktop">
				             		<span style="float: right; margin: 0;">
				             		<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button> -->
				             		<a href="/time_delete/{{ $tt->id }}"><button type="button" class="btn btn-danger btn_delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button></a>
				             	</span>
				             	</div>
				             	<div class="btn_mobile">
				             		<span style="float: right; margin: 0;">
				             		<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button> -->
				             		<a href="/time_delete/{{ $tt->id1 }}"><button type="button" class="btn btn-danger btn_delete"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
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

@endsection