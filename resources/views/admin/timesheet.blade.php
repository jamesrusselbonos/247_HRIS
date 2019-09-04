@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="timesheet_report">
			<div class="container">
				<div class="card">
				    <div class="card-header">
				    	<div class="row">
				    		<div class="col-lg-4">
				    			<!-- <div class="dropdown">
				    			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    			    Export
				    			  </button>
				    			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    			    <a class="dropdown-item" href="#">Copy</a>
				    			    <a class="dropdown-item" href="#">Excel</a>
				    			    <a class="dropdown-item" href="#">CSV</a>
				    			    <a class="dropdown-item" href="#">Print</a>
				    			  </div>
				    			</div> -->
				    		</div>
				    		
				    		<div class="col-lg-4">
				    			<!-- <input type="date" name="bday" max="3000-12-31" 
				    			        min="1000-01-01" class="form-control"> -->
				    		</div>
				    	</div>
				    </div>

				    <div class="card-body">
				   
				        <table class="table table-bordered" id="addDataTable">
				          <thead>
				            <tr>
				              <th scope="col">Name</th>
				              <th scope="col">Date</th>
				              <th scope="col">Time In</th>
				              <th scope="col">Time Out</th>
				              <th scope="col">Manage</th>
				            </tr>
				          </thead>
				          <tbody>
				      
				            @foreach ($time as $tt)
				            	<tr>

				              <th scope="row">
				              	{{ $tt->name}}
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
				             <td>
				             	<span style="float: right; margin: 0;">
				             		<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
				             		<a href="/time_delete/{{ $tt->id }}"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button></a>
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

@endsection