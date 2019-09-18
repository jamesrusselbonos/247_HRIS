@extends('admin.admin')

@section('content')

	<div class="col-lg-12">
		<div class="payroll_index">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-lg-12">
							<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Make Payroll</button>
						</div>
					</div>
				</div>
				<div class="card-body">
					<table class="table display nowrap" id="addDataTable">	
						<thead>
							<tr>
				              <th style="min-width: 200px;">Employees</th>
				              <th style="min-width: 200px;">Dep't</th>
				              <th style="min-width: 200px;">No. of Days Worked</th>
				              <th style="min-width: 200px;">Daily Rate</th>
				              <th style="min-width: 200px;">Rate/Hour</th>
				              <th style="min-width: 200px;">Basic Pay</th>
				              <th style="min-width: 200px;">Total Absences</th>
				              <th style="min-width: 200px;">Unpaid Absences</th>
				              <th style="min-width: 200px;">Charge to SIL</th>
				              <th style="min-width: 200px;">Amount</th>
				              <th style="min-width: 200px;">Allowance</th>
				              <th style="min-width: 200px;">Adjustment/Incentive</th>
				              <th style="min-width: 200px;">No. of days Legal Holiday</th>
				              <th style="min-width: 200px;">Amount</th>
				              <th style="min-width: 200px;">Regular OT Hours</th>
				              <th style="min-width: 200px;">Regular OT Amount</th>
				              <th style="min-width: 200px;">Sunday/Rest Day OT Hours </th>
				              <th style="min-width: 200px;">Sunday/Rest day OT amount</th>
				              <th style="min-width: 200px;">Legal Holidays OT hours </th>
				              <th style="min-width: 200px;">Legal Holiday OT amount</th>
				              <th style="min-width: 200px;">Special Holidays OT hours</th>
				              <th style="min-width: 200px;">Special Holiday OT amount</th>
				              <th style="min-width: 200px;">No. Hours rendered</th>
				              <th style="min-width: 200px;">Amount</th>
				              <th style="min-width: 200px;">No. of hours undertime</th>
				              <th style="min-width: 200px;">No. of hours late</th>
				              <th style="min-width: 200px;">Gross Pay</th>
				              <th style="min-width: 200px;">SSS</th>
				              <th style="min-width: 200px;">PHIC</th>
				              <th style="min-width: 200px;">HDMF</th>
				              <th style="min-width: 200px;">Total deduction</th>
				              <th style="min-width: 200px;">SSS (Loan)</th>
				              <th style="min-width: 200px;">Company loan/Advances</th>
				              <th style="min-width: 200px;">HDMF (Loan)</th>
				              <th style="min-width: 200px;">Uniform</th>
				              <th style="min-width: 200px;">Total deduction</th>
				              <th style="min-width: 200px;">Tax</th>
				              <th style="min-width: 200px;">Net Pay</th>
			            	</tr>
						</thead>
						<tbody>
							<tr>
							  <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
				              <td style="min-width: 200px;">sample</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-xl">
	    	<div class="modal-content">
	      		<div class="modal-header">
	      			<h5 class="modal-title" id="exampleModalLabel">New Payroll</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
	      		</div>
	      		<div class="modal-body" style="padding-left: 30px; padding-right: 30px;">
	      			<div class="row" style="padding-bottom: 10px;">
	      				<div class="col-md-4"></div>
	      				<div class="col-md-4">
							<div class="row">
								<div class="col-sm-5" style="text-align: right;">
									<p style="margin-top: 5px;">Gross Pay</p>
								</div>
								<div class="col-sm-7">
									<input type="text" name="employee_id" class="form-control" readonly>
								</div>
							</div>
	      				</div>
	      				<div class="col-md-4">
	      					<div class="row">
								<div class="col-sm-5" style="text-align: right;">
									<p style="margin-top: 5px;">Net Pay</p>
								</div>
								<div class="col-sm-7">
									<input type="text" name="employee_id" class="form-control" readonly>
								</div>
							</div>
	      				</div>
	      			</div>
	      			<div class="row">
	      				<div class="col-md-12">
	      					<nav>
								<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Employees/Attendance</a>
									<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Holidays/Overtime</a>
									<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Night Differential/Late/Under Time</a>
									<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Benefits/Loans/Tax</a>
								</div>
							</nav>
							<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
									<div style="margin-top: 30px;" class="form-row">
										<div class="col-lg-6">
											<label>Select an Employee</label>
								     		<div class="row" style="padding-bottom: 30px; padding-left: 20px; padding-right: 20px;">

								     			<select class="memoemp_search form-control" data-placeholder="Select Recipient" data-allow-clear="true" style="width: 100%;" name="memoemp_search1" name="memos[]" multiple="multiple" >
								     				<option></option>  
								     				<option>All</option>  
								     				
								     					<option value=""></option>
								     				
								     			</select>
								     		</div>
										</div>
										<div class="col-lg-6">
											<h3 style="margin-top: 0px;">Bonos, James Russel Grefaldo</h3>
											<h6 style="margin-top: -20px;">247-OPM-0003</h6>
										</div>
									</div>
									<div class="form-row" style="background-color: #f4f4f4; padding:10px 10px 0px 10px; margin-bottom: 15px;">
										<h4 style="margin-top: 0px;">Payroll Period</h4>
									</div>
									<div class="form-row">

								  		<div class="form-group col-md-6">
								  			<label>Date From</label>
								   			<input type="date" name="sched_date_from" id="sched_date_from" max="3000-12-31" 
										          min="1000-01-01" class="form-control">
								  		</div>
								  		<div class="form-group col-md-6">
								  			<label>Date To</label>
								    		<input type="date" name="sched_date_to" id="sched_date_to" max="3000-12-31" 
										          min="1000-01-01" class="form-control">
								  		</div>
									</div>
									<div class="form-row">

								  		<div class="form-group col-md-3">
								  			<label>No. days worked</label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-3">
								  			<label>Daily Rate</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-3">
								  			<label>Rate/hour</label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-3">
								  			<label>Basic Pay</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
									</div>
									<div class="form-row" style="background-color: #f4f4f4; padding:10px 10px 0px 10px; margin-bottom: 15px; margin-top: 10px;">
										<h4 style="margin-top: 0px;">Absences</h4>
									</div>
									<div class="form-row">

								  		<div class="form-group col-md-3">
								  			<label>Total Absences</label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-3">
								  			<label>Unpaid Absences</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-3">
								  			<label>Charge to SIL</label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-3">
								  			<label>Amount</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" readonly>
								  		</div>
									</div>
									<div class="form-row" style="background-color: #f4f4f4; padding:10px 10px 0px 10px; margin-bottom: 15px; margin-top: 10px;">
										<h4 style="margin-top: 0px;">Allowance & Incentives</h4>
									</div>	
									<div class="form-row">

								  		<div class="form-group col-md-6">
								  			<label>Total Absences</label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-6">
								  			<label>Unpaid Absences</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
									<div class="form-row" style="padding:10px 0px 0px 0px; margin-bottom: 15px; margin-top: 30px;">
										<h4 style="margin-top: 0px;">Legal Holidays</h4>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
								  			<label>No. of Days</label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-6">
								  			<label>Amount</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" readonly>
								  		</div>
									</div>
									<div class="form-row" style="background-color: #f4f4f4; padding:10px 10px 0px 10px; margin-bottom: 15px; margin-top: 10px;">
										<h4 style="margin-top: 0px;">Overtime</h4>
									</div>
									<div class="form-row">

								  		<div class="form-group col-md-3">
								  			<label>Regular OT Hours</label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-3">
								  			<label>Regular OT Amount</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" readonly>
								  		</div>
								  		<div class="form-group col-md-3">
								  			<label>Sunday/Rest Day OT Hours </label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-3">
								  			<label>Sunday/Rest day OT Amount</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" readonly>
								  		</div>
									</div>
									<div class="form-row">

								  		<div class="form-group col-md-3">
								  			<label>Legal Holidays OT Hours </label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-3">
								  			<label>Legal Holiday OT Hours</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" readonly>
								  		</div>
								  		<div class="form-group col-md-3">
								  			<label>Special Holidays OT hours </label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-3">
								  			<label>Special Holiday OT Amount</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" readonly>
								  		</div>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
									<div class="form-row" style="padding:10px 0px 0px 0px; margin-bottom: 15px; margin-top: 30px;">
										<h4 style="margin-top: 0px;">Night Differential</h4>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
								  			<label>No. of Days Rendered</label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-6">
								  			<label>Amount</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" readonly>
								  		</div>
									</div>
									<div class="form-row" style="background-color: #f4f4f4; padding:10px 10px 0px 10px; margin-bottom: 15px; margin-top: 10px;">
										<h4 style="margin-top: 0px;">Undertime</h4>
									</div>
									<div class="form-row">

								  		<div class="form-group col-md-4">
								  			<label>No. Of Hours Undertime </label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-4">
								  			<label>No. Of Hours Late</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-4">
								  			<label>Amount </label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" readonly>
								  		</div>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
									<div class="form-row" style="padding:10px 0px 0px 0px; margin-bottom: 15px; margin-top: 30px;">
										<h4 style="margin-top: 0px;">Government Mandated Benefits</h4>
									</div>
									<div class="form-row">

								  		<div class="form-group col-md-3">
								  			<label>SSS </label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-3">
								  			<label>PHIC</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-3">
								  			<label>HDMF </label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-3">
								  			<label>Total Deduction</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" readonly>
								  		</div>
									</div>
									<div class="form-row" style="background-color: #f4f4f4; padding:10px 10px 0px 10px; margin-bottom: 15px; margin-top: 10px;">
										<h4 style="margin-top: 0px;">Loans/Miscellaneous</h4>
									</div>
									<div class="form-row">

								  		<div class="form-group col-md-4">
								  			<label>SSS </label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-4">
								  			<label>Company Loan / Advances</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-4">
								  			<label>HDMF </label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control">
								  		</div>
									</div>
									<div class="form-row">

								  		<div class="form-group col-md-6">
								  			<label>Uniform </label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-6">
								  			<label>Total Deduction</label>
								    		<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" readonly>
								  		</div>
									</div>
									<div class="form-row" style="background-color: #f4f4f4; padding:10px 10px 0px 10px; margin-bottom: 15px; margin-top: 10px;">
										<h4 style="margin-top: 0px;">Tax</h4>
									</div>
									<div class="form-row">

								  		<div class="form-group col-md-6">
								  			<label>Tax </label>
								   			<input type="text" name="mlevel_title" id="mlevel_title" class="form-control" >
								  		</div>
								  		<div class="form-group col-md-6">
								  			
								  		</div>
									</div>
								</div>
							</div>
						</div>
	      			</div>	
	      		</div>
	      		<div class="modal-footer">
      		        <button type="button" class="btn btn-success"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Generate Payroll</button>
      		     </div>
	    	</div>
	  	</div>
	</div>

@endsection