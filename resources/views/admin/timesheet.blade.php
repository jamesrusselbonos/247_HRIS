@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="timesheet_report">
			<div class="container">
				<div class="card">
				    <div class="card-header">
				    	<div class="row">
				    		<div class="col-lg-4">
				    			<input type="text" name="search_time" class="form-control search_time" placeholder="Search Employee" >
				    		</div>
				    		<div class="col-lg-4">
				    			<div style="float: right;" class="dropdown">
				    			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    			    Export
				    			  </button>
				    			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    			    <a class="dropdown-item" href="#">Copy</a>
				    			    <a class="dropdown-item" href="#">Excel</a>
				    			    <a class="dropdown-item" href="#">CSV</a>
				    			    <a class="dropdown-item" href="#">Print</a>
				    			  </div>
				    			</div>
				    		</div>
				    		<div class="col-lg-4">
				    			<input type="date" name="bday" max="3000-12-31" 
				    			        min="1000-01-01" class="form-control">
				    		</div>
				    	</div>
				    </div>

				    <div class="card-body">
				   
				        <table class="table table-bordered">
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
				      
				            <tr>

				              <th scope="row">
				              	Adrian Benitez </br>
				              	Web Developer, 247-OPM-0001
				              </th>
				              <td>
				              	August 13, 2019
				              </td>
				              <td>
				              	8:00 AM
				              </td>
				             <td>
				             	5:00 PM
				             </td>
				             <td>
				             	<span style="float: right; margin: 0;">
				             		<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</button>
				             		<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</button>
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

@endsection