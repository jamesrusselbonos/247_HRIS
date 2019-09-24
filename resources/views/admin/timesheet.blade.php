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
				   
				        <table class="table display nowrap" id="DataTable">
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

				              <th scope="row">
				              	{{ $tt->firstname}} {{ $tt->lastname}}
				              </th>
				              <td>
				              	{{$tt->date}}
				              </td>
				              <td>
				              	{{date('h:i:s a', strtotime($tt->time_from))}}
				              </td>
				              @if($tt->time_to != null || $tt->time_to != "")
				             <td>
				             	{{date('h:i:s a', strtotime($tt->time_to))}}
				             </td>
				             @else
				             <td></td>
				             @endif
				             <td>{{ $tt->time_duration }}</td>
				             <td>
				             	<span style="float: right; margin: 0;">
				             		<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button> -->
				             		<a href="/time_delete/{{ $tt->id }}"><button type="button" class="btn btn-danger btn_delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button></a>
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
		</div>
	</div>

@endsection