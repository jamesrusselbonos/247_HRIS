@extends('admin.admin')

@section('content')

	<div class="col-lg-12">
		<div class="row">
			<div class="jumbotron2">
		  		<h1 style="margin-top: 130px;" class="display-4">Payroll</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="payroll_index">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-lg-12">
							<span>
								<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Make Payroll</button>
								
								<!-- <button style="float: right;" type="button" class="btn btn-info"><i class="fa fa-print" aria-hidden="true"></i>&nbsp; Print</button> -->
							</span>
						</div>
					</div>
				</div>
				<div class="card-body">
					<table id="payroll_table" class="mdl-data-table" style="width:100%;">	
						<thead>
							<tr>
				              <th style="min-width: 250px;">Employees</th>
				              <th style="min-width: 200px;">Dep't</th>
				              <th style="min-width: 200px;">No. of Days Worked</th>
				              <th style="min-width: 200px;">Daily Rate</th>
				              <th style="min-width: 200px;">Rate/Hour</th>
				              <th style="min-width: 200px; background-color: #F3F3F3; color: #000;">Basic Pay</th>
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
				              <th style="min-width: 250px;">Sunday/Rest Day OT Hours </th>
				              <th style="min-width: 250px;">Sunday/Rest day OT amount</th>
				              <th style="min-width: 200px;">Legal Holidays OT hours </th>
				              <th style="min-width: 200px;">Legal Holiday OT amount</th>
				              <th style="min-width: 250px;">Special Holidays OT hours</th>
				              <th style="min-width: 250px;">Special Holiday OT amount</th>
				              <th style="min-width: 200px;">No. Hours rendered</th>
				              <th style="min-width: 200px;">Amount</th>
				              <th style="min-width: 200px;">No. of hours undertime</th>
				              <th style="min-width: 200px;">No. of hours late</th>
				              <th style="min-width: 200px;">Amount</th>
				              <th style="min-width: 200px; background-color: #F3F3F3; color: #000;">Gross Pay</th>
				              <th style="min-width: 200px;">SSS</th>
				              <th style="min-width: 200px;">PHIC</th>
				              <th style="min-width: 200px;">HDMF</th>
				              <th style="min-width: 200px; background-color: #FCF8E3; color: #000;">Total deduction</th>
				              <th style="min-width: 200px;">SSS (Loan)</th>
				              <th style="min-width: 200px;">Company loan/Advances</th>
				              <th style="min-width: 200px;">HDMF (Loan)</th>
				              <th style="min-width: 200px;">Uniform</th>
				              <th style="min-width: 200px; background-color: #FCF8E3; color: #000;">Total deduction</th>
				              <th style="min-width: 200px; background-color: #FCF8E3; color: #000;">Tax</th>
				              <th style="min-width: 200px; background-color: #F3F3F3; color: #000;">Net Pay</th>
				              <th style="min-width: 200px;">Manage</th>
			            	</tr>
						</thead>
						<tbody>
							@foreach($payrolls as $payroll)
								<tr>
								  <td style="min-width: 250px;">
								  	{{ $payroll->lastname }}, {{ $payroll->firstname }} {{$payroll->middle_name}}</br>
								  	{{$payroll->employee_id}}
								  </td>
					              <td style="min-width: 200px;">{{ $payroll->department_name }}</td>
					              <td style="min-width: 200px;">{{ $payroll->no_days_worked }}</td>
					              <td style="min-width: 200px;">{{ $payroll->daily_rate }}</td>
					              <td style="min-width: 200px;">{{ $payroll->rate_per_hour }}</td>
					              <td style="min-width: 200px; background-color: #F3F3F3; color: #000;">{{ $payroll->basic_pay }}</td>
					              <td style="min-width: 200px;">{{ $payroll->total_absences }}</td>
					              <td style="min-width: 200px;">{{ $payroll->unpaid_absences }}</td>
					              <td style="min-width: 200px;">{{ $payroll->charged_to_SIL }}</td>
					              <td style="min-width: 200px;">{{ $payroll->amount_absences }}</td>
					              <td style="min-width: 200px;">{{ $payroll->allowance }}</td>
					              <td style="min-width: 200px;">{{ $payroll->adjustment_incentives }}</td>
					              <td style="min-width: 200px;">{{ $payroll->no_legal_holidays }}</td>
					              <td style="min-width: 200px;">{{ $payroll->amount_holidays }}</td>
					              <td style="min-width: 200px;">{{ $payroll->regular_OT_hours }}</td>
					              <td style="min-width: 200px;">{{ $payroll->regular_OT_amount }}</td>
					              <td style="min-width: 250px;">{{ $payroll->restday_OT_hours }}</td>
					              <td style="min-width: 250px;">{{ $payroll->restday_OT_amount }}</td>
					              <td style="min-width: 200px;">{{ $payroll->legal_holiday_OT_hours }}</td>
					              <td style="min-width: 200px;">{{ $payroll->legal_holiday_OT_amount }}</td>
					              <td style="min-width: 250px;">{{ $payroll->special_holiday_OT_hours }}</td>
					              <td style="min-width: 250px;">{{ $payroll->special_holiday_OT_amount }}</td>
					              <td style="min-width: 200px;">{{ $payroll->no_hours_rendered }}</td>
					              <td style="min-width: 200px;">{{ $payroll->amount_night_diffential }}</td>
					              <td style="min-width: 200px;">{{ $payroll->no_hours_undertime }}</td>
					              <td style="min-width: 200px;">{{ $payroll->no_hours_late }}</td>
					              <td style="min-width: 200px;">{{ $payroll->tardiness_amount }}</td>
					              <td style="min-width: 200px; background-color: #F3F3F3; color: #000;">{{ $payroll->gross_pay }}</td>
					              <td style="min-width: 200px;">{{ $payroll->SSS_payroll }}</td>
					              <td style="min-width: 200px;">{{ $payroll->PHIC_payroll }}</td>
					              <td style="min-width: 200px;">{{ $payroll->HDMF_payroll }}</td>
					              <td style="min-width: 200px; background-color: #FCF8E3; color: #000;">{{ $payroll->total_deduction_benefits }}</td>
					              <td style="min-width: 200px;">{{ $payroll->SSS_loan }}</td>
					              <td style="min-width: 200px;">{{ $payroll->company_loan }}</td>
					              <td style="min-width: 200px;">{{ $payroll->HDMF_loan }}</td>
					              <td style="min-width: 200px;">{{ $payroll->uniform }}</td>
					              <td style="min-width: 200px; background-color: #FCF8E3; color: #000;">{{ $payroll->total_deduction_loan }}</td>
					              <td style="min-width: 200px; background-color: #FCF8E3; color: #000;">{{ $payroll->tax }}</td>
					              <td style="min-width: 200px; background-color: #F3F3F3; color: #000;">{{ $payroll->net_pay }}</td>
					              <td style="min-width: 200px;">
					              	<button id="{{ $payroll->id }}" type="button" class="btn btn-success btn_payslip" data-toggle="modal" data-target="#payslip_modal"
					              		payslip_fname="{{ $payroll->firstname }}"
					              		payslip_lname="{{ $payroll->lastname }}"
					              		payslip_dept="{{ $payroll->department_name }}"
					              		payslip_basicpay="{{ $payroll->basic_pay }}"
					              		payslip_nodays="{{ $payroll->no_days_worked }}"
					              		payslip_holiday="{{ $payroll->no_legal_holidays }}"
					              		payslip_holiday_amount="{{ $payroll->amount_holidays }}"
					              		payslip_allowance="{{ $payroll->allowance }}"
					              		payslip_absences="{{ $payroll->total_absences }}"
					              		payslip_unpaid="{{ $payroll->unpaid_absences }}"
					              		payslip_SLVL="{{ $payroll->charged_to_SIL }}"
					              		payslip_late="{{ $payroll->no_hours_late }}"
					              		payslip_undertime="{{ $payroll->no_hours_undertime }}"
					              		payslip_tardiness_amount="{{ $payroll->tardiness_amount }}"
					              		payslip_regular_OT="{{ $payroll->regular_OT_hours }}"
					              		payslip_regular_OT_amount="{{ $payroll->regular_OT_amount }}"
					              		payslip_legal_OT="{{ $payroll->legal_holiday_OT_hours }}"
					              		payslip_legal_OT_amount="{{ $payroll->legal_holiday_OT_amount }}"
					              		payslip_restday_OT="{{ $payroll->restday_OT_hours }}"
					              		payslip_restday_OT_amount="{{ $payroll->restday_OT_amount }}"
					              		payslip_special_OT="{{ $payroll->special_holiday_OT_hours }}"
					              		payslip_special_OT_amount="{{ $payroll->special_holiday_OT_amount }}"
					              		payslip_night="{{ $payroll->no_hours_rendered }}"
					              		payslip_night_amount="{{ $payroll->amount_night_diffential }}"
					              		payslip_adjustment="{{ $payroll->adjustment_incentives }}"
					              		payslip_tax="{{ $payroll->tax }}"
					              		payslip_sss="{{ $payroll->SSS_payroll }}"
					              		payslip_philhealth="{{ $payroll->PHIC_payroll }}"
					              		payslip_pagibig="{{ $payroll->HDMF_payroll }}"
					              		payslip_sss_loan="{{ $payroll->SSS_loan }}"
					              		payslip_company_loan="{{ $payroll->company_loan }}"
					              		payslip_pagibig_loan="{{ $payroll->HDMF_loan }}"
					              		payslip_uniform="{{ $payroll->uniform }}"
					              		payslip_gross="{{ $payroll->gross_pay }}"
					              		payslip_net="{{ $payroll->net_pay }}"
					              		payslip_datefrom="{{ $payroll->date_from }}"
					              		payslip_dateto="{{ $payroll->date_to }}"
					              	><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Make Payslip</button>
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

	<div class="modal fade bd-example-modal-lg" id="generate_payroll" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-xl">
	    	<div class="modal-content">
	      		<div class="modal-header">
	      			<h5 class="modal-title" id="exampleModalLabel">New Payroll</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
	      		</div>
	      		<form method="POST" action="{{route('payroll.generatePayroll')}}" name="genarateForm" id="genarateForm">
	      			{{ csrf_field() }}
		      		<div class="modal-body" style="padding-left: 20px; padding-right: 20px;width: 500px;">
		      			<div class="row" style="padding-bottom: 10px;">
		      				<div class="col-md-6">
								<div class="row">
									<div class="col-sm-5" style="text-align: right;">
										<p style="margin-top: 5px;">Gross Pay</p>
									</div>
									<div class="col-sm-7">
										<input type="text" name="p_gross_pay" id="p_gross_pay" class="form-control" readonly>
									</div>
								</div>
		      				</div>
		      				<div class="col-md-6">
		      					<div class="row">
									<div class="col-sm-5" style="text-align: right;">
										<p style="margin-top: 5px;">Net Pay</p>
									</div>
									<div class="col-sm-7">
										<input type="text" name="p_net_pay" id="p_net_pay" class="form-control" readonly>
										<input type="hidden" name="p_net_pay2" id="p_net_pay2" class="form-control" readonly>
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
													<form method="POST" action="{{route('attendance.load')}}">
														{{ csrf_field() }}
														<select class="js-example-basic-single pay_search" id="search_emp" style="width: 100%;" name="search_emp">
															<option selected disabled>Search Employee</option>
															@foreach($employees as $emp)
															  <option value="{{$emp->employee_id}}" p_salary="{{$emp->salary}}" p_allowances="{{$emp->allowance}}">{{ucwords($emp->lastname)}}, {{ucwords($emp->firstname)}} {{ucwords($emp->middle_name)}}</option>
														  	@endforeach
														</select>
													</form>
									     		</div>
											</div>
											<div class="col-lg-6">
												
												<h6 style="margin-top: -20px;" id="txt_p_empid"></h6>
												<h3 style="margin-top: 10px;font-size: 20px" id="txt_p_name"></h3>
												<input type="hidden" id="p_empid" name="p_empid">
												<input id="hdn-token" class="hdn-token" type="hidden" name="_token" value="{{ csrf_token() }}">
											</div>
										</div>
										<div class="form-row" style="background-color: #f4f4f4; padding:10px 10px 0px 10px; margin-bottom: 15px;">
											<h4 style="margin-top: 0px;">Payroll Period</h4>
										</div>
										<div class="form-row">

									  		<div class="form-group col-md-6">
									  			<label>Date From</label>
									   			<input type="date" name="p_date_from" id="p_date_from" max="3000-12-31" 
											          min="1000-01-01" class="form-control">
									  		</div>
									  		<div class="form-group col-md-6">
									  			<label>Date To</label>
									    		<input type="date" name="p_date_to" id="p_date_to" max="3000-12-31" 
											          min="1000-01-01" class="form-control">
									  		</div>
										</div>
										<div class="form-row">

									  		<div class="form-group col-md-3">
									  			<label>No. days worked</label>
									   			<input type="text" name="p_no_days_worked" id="p_no_days_worked" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-3">
									  			<label>Daily Rate</label>
									    		<input type="text" name="p_daily_rate" id="p_daily_rate" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-3">
									  			<label>Rate/hour</label>
									   			<input type="text" name="p_rate_hour" id="p_rate_hour" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-3">
									  			<label>Basic Pay</label>
									    		<input type="text" name="p_basic_pay" id="p_basic_pay" class="form-control" readonly>
									  		</div>
										</div>
										<div class="form-row" style="background-color: #f4f4f4; padding:10px 10px 0px 10px; margin-bottom: 15px; margin-top: 10px;">
											<h4 style="margin-top: 0px;">Absences</h4>
										</div>
										<div class="form-row">

									  		<div class="form-group col-md-6">
									  			<label>Total Absences</label>
									   			<input type="text" name="p_total_absences" id="p_total_absences" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-6">
									  			<label>Unpaid Absences</label>
									    		<input type="text" name="p_unpaid_absences" id="p_unpaid_absences" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-6">
									  			<label>Charge to SIL</label>
									   			<input type="text" name="p_charge_to_SIL" id="p_charge_to_SIL" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-6">
									  			<label>Amount</label>
									    		<input type="text" name="p_amount_absences" id="p_amount_absences" class="form-control" readonly>
									  		</div>
										</div>
										<div class="form-row" style="background-color: #f4f4f4; padding:10px 10px 0px 10px; margin-bottom: 15px; margin-top: 10px;">
											<h4 style="margin-top: 0px;">Allowance & Incentives</h4>
										</div>	
										<div class="form-row">

									  		<div class="form-group col-md-6">
									  			<label>Allowance</label>
									   			<input type="text" name="p_allowance" id="p_allowance" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-6">
									  			<label>Adjustment/Incentive</label>
									    		<input type="text" name="p_adjustment_incentive" id="p_adjustment_incentive" class="form-control" required="">
									  		</div>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
										<div class="form-row" style="padding: 5px 0px 0px 0px; margin-bottom: 15px; margin-top: 30px;">
											<h4 style="margin-top: 0px;">Legal Holidays</h4>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
									  			<label>No. of Days</label>
									   			<input type="text" name="p_no_holidays" id="p_no_holidays" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-6">
									  			<label>Amount</label>
									    		<input type="text" name="p_amount_holidays" id="p_amount_holidays" class="form-control" readonly>
									  		</div>
										</div>
										<div class="form-row" style="background-color: #f4f4f4; padding:10px 10px 0px 10px; margin-bottom: 15px; margin-top: 10px;">
											<h4 style="margin-top: 0px;">Overtime</h4>
										</div>
										<div class="form-row">

									  		<div class="form-group col-md-3">
									  			<label>Regular OT Hours</label>
									   			<input type="text" name="p_reg_OT_hours" id="p_reg_OT_hours" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-3">
									  			<label>Regular OT Amount</label>
									    		<input type="text" name="p_reg_OT_amount" id="p_reg_OT_amount" class="form-control" readonly>
									  		</div>
									  		<div class="form-group col-md-3">
									  			<label>Sunday/Rest Day OT Hours </label>
									   			<input type="text" name="p_rest_OT_hours" id="p_rest_OT_hours" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-3">
									  			<label>Sunday/Rest day OT Amount</label>
									    		<input type="text" name="p_rest_OT_amount" id="p_rest_OT_amount" class="form-control" readonly>
									  		</div>
										</div>
										<div class="form-row">

									  		<div class="form-group col-md-3">
									  			<label>Legal Holidays OT Hours </label>
									   			<input type="text" name="p_lholiday_hours" id="p_lholiday_hours" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-3">
									  			<label>Legal Holiday OT Amount</label>
									    		<input type="text" name="p_lholiday_amount" id="p_lholiday_amount" class="form-control" readonly>
									  		</div>
									  		<div class="form-group col-md-3">
									  			<label>Special Holidays OT hours </label>
									   			<input type="text" name="p_sholiday_hours" id="p_sholiday_hours" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-3">
									  			<label>Special Holiday OT Amount</label>
									    		<input type="text" name="p_sholiday_amount" id="p_sholiday_amount" class="form-control" readonly>
									  		</div>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
										<div class="form-row" style="padding: 5px 0px 0px 0px; margin-bottom: 15px; margin-top: 30px;">
											<h4 style="margin-top: 0px;">Night Differential</h4>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
									  			<label>No. of Days Rendered</label>
									   			<input type="text" name="p_no_rendered" id="p_no_rendered" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-6">
									  			<label>Amount</label>
									    		<input type="text" name="p_amount_night" id="p_amount_night" class="form-control" readonly>
									  		</div>
										</div>
										<div class="form-row" style="background-color: #f4f4f4; padding:10px 10px 0px 10px; margin-bottom: 15px; margin-top: 10px;">
											<h4 style="margin-top: 0px;">Undertime</h4>
										</div>
										<div class="form-row">

									  		<div class="form-group col-md-6">
									  			<label>No. Of Hours Undertime </label>
									   			<input type="text" name="p_no_undertime" id="p_no_undertime" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-6">
									  			<label>No. Of Hours Late</label>
									    		<input type="text" name="p_no_late" id="p_no_late" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-6">
									  			<label>Amount </label>
									   			<input type="text" name="p_amount_undertime_late" id="p_amount_undertime_late" class="form-control" readonly>
									  		</div>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
										<div class="form-row" style="padding: 5px 0px 0px 0px; margin-bottom: 15px; margin-top: 30px;">
											<h4 style="margin-top: 0px;">Government Mandated Benefits</h4>
										</div>
										<div class="form-row">

									  		<div class="form-group col-md-3">
									  			<label>SSS </label>
									   			<input type="text" name="p_sss" id="p_sss" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-3">
									  			<label>PHIC</label>
									    		<input type="text" name="p_phic" id="p_phic" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-3">
									  			<label>HDMF </label>
									   			<input type="text" name="p_hdmf" id="p_hdmf" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-3">
									  			<label>Total Deduction</label>
									    		<input type="text" name="p_total_deduction_benefits" id="p_total_deduction_benefits" class="form-control" readonly>
									  		</div>
										</div>
										<div class="form-row" style="background-color: #f4f4f4; padding:10px 10px 0px 10px; margin-bottom: 15px; margin-top: 10px;">
											<h4 style="margin-top: 0px;">Loans/Miscellaneous</h4>
										</div>
										<div class="form-row">

									  		<div class="form-group col-md-6">
									  			<label>SSS </label>
									   			<input type="text" name="p_sss_loan" id="p_sss_loan" class="form-control" value="" required="">
									  		</div>
									  		<div class="form-group col-md-6">
									  			<label>Company Loan / Advances</label>
									    		<input type="text" name="p_company_loan" id="p_company_loan" class="form-control" value=""required="">
									  		</div>
									  		<div class="form-group col-md-6">
									  			<label>HDMF </label>
									   			<input type="text" name="p_hdmf_loan" id="p_hdmf_loan" class="form-control" value=""required="">
									  		</div>
										</div>
										<div class="form-row">

									  		<div class="form-group col-md-6">
									  			<label>Uniform </label>
									   			<input type="text" name="p_uniform" id="p_uniform" class="form-control" value=""required="">
									  		</div>
									  		<div class="form-group col-md-6">
									  			<label>Total Deduction</label>
									    		<input type="text" name="p_total_deduction_loan" id="p_total_deduction_loan" class="form-control" value="" readonly>
									  		</div>
										</div>
										<div class="form-row" style="background-color: #f4f4f4; padding:10px 10px 0px 10px; margin-bottom: 15px; margin-top: 10px;">
											<h4 style="margin-top: 0px;">Tax</h4>
										</div>
										<div class="form-row">

									  		<div class="form-group col-md-6">
									  			<label>Tax </label>
									   			<input type="text" name="p_tax" id="p_tax" class="form-control" >
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
	      		        <button type="submit" class="btn btn-success btn_payroll" form="genarateForm"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Generate Payroll</button>
	      		     </div>
	      		</form>
	    	</div>
	  	</div>
	</div>

	<div class="modal fade payslip_modal" id="payslip_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-xl">
	    	<div class="modal-content">
	     	 	<div class="modal-header">
	     	 		<h5 class="modal-title" id="exampleModalLabel">Payslip</h5>
 	 		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 	 		          	<span aria-hidden="true">&times;</span>
 	 		        </button>
	     	 	</div>
	     	 	<form>
	     	 		<div class="modal-body" style="padding-right: 20px; padding-left: 20px;">
	     	 			<div class="form-row" style="margin-top: 5px;">
	     	 				<div class="col-md-6">
	     	 					<div class="row">
	     	 						<div class="col-md-4">
	     	 							<h6>EMPLOYEE NAME:</h6>
	     	 						</div>
	     	 						<div class="col-md-8">
	     	 							<h6 class="payslip_name" id="txt_payslip_fname"></h6>&nbsp;<h6 class="payslip_name" id="txt_payslip_lname"></h6>
	     	 							<input type="hidden" name="txt_slip_fname">
	     	 							<input type="hidden" name="txt_slip_lname">
	     	 						</div>
	     	 					</div>
	     	 					<div class="row" style="margin-top: -20px;">
	     	 						<div class="col-md-4">
	     	 							<h6>DEPT./POSITION:</h6>
	     	 						</div>
	     	 						<div class="col-md-8">
	     	 							<h6 id="payslip_dept"></h6>
	     	 							<input type="hidden" name="txt_payslip_dept" id="txt_payslip_dept">
	     	 						</div>
	     	 					</div>
	     	 				</div>
	     	 				<div class="col-md-6">
	     	 					<div class="row">
	     	 						<div class="col-md-6">
	     	 							<h4>PAYSLIP</h4>
	     	 							<h6 class="payslip_date" id="txt_payslip_dateform"></h6><h6 class="payslip_date">&nbsp;to&nbsp;</h6><h6 class="payslip_date" id="txt_payslip_dateto"</h6>
	     	 							<input type="hidden" name="txt_payslip_datefrom">
	     	 							<input type="hidden" name="txt_payslip_dateto">
	     	 						</div>
	     	 						<div class="col-md-6" style="background-color: #000;">
	     	 							<img src="/img/icon2.png" style="width: 100px; height: 100px; display: block; margin: 0 auto;">
	     	 						</div>
	     	 					</div>
	     	 				</div>
	     	 			</div>
	     	 			<div class="form-row" style="margin-top: 30px;">
	     	 				<div class="col-md-6" style="padding-right: 20px;">
	     	 					<div class="row">
	     	 						<div class="col-md-12">
	     	 							<div class="row" style="background-color: #f4f4f4;">
	     	 								<div class="col-md-4">
	     	 									<p style="font-weight: bold; margin-top: 5px;">BASIC PAY:</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_basic_pay" id="txt_payslip_basic_pay">
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-4">
	     	 									<p>No. of Days</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_days" id="txt_payslip_days">
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									
	     	 								</div>
	     	 							</div>
	     	 						</div>
	     	 					</div>
	     	 					<div class="row" style="background-color: #f4f4f4;">
	     	 						<div class="col-md-12">
	     	 							<div class="row">
	     	 								<div class="col-md-4">
	     	 									<p style="font-weight: bold;">HOLIDAY:</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_holiday" id="txt_payslip_holiday">
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_holiday_amount" id="txt_payslip_holiday_amount">
	     	 								</div>
	     	 							</div>
	     	 						</div>
	     	 					</div>
	     	 					<div class="row" style="background-color: #f4f4f4; margin-top: 10px;">
	     	 						<div class="col-md-12">
	     	 							<div class="row">
	     	 								<div class="col-md-4">
	     	 									<p style="font-weight: bold;">ALLOWANCES:</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_allowance" id="txt_payslip_allowance">
	     	 								</div>
	     	 							</div>
	     	 						</div>
	     	 					</div>
	     	 					<div class="row" style="margin-top: 15px;">
	     	 						<div class="col-md-12">
	     	 							<div class="row" style="background-color: #f4f4f4;">
	     	 								<div class="col-md-4">
	     	 									<p style="font-weight: bold;">ABSENCES:</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_absent" id="txt_payslip_absent">
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-4">
	     	 									<p>Unpaid absences</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_unpaid_absent" id="txt_payslip_unpaid_absent">
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-4">
	     	 									<p>Charge to SL/VL</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_SL_VL" id="txt_payslip_SL_VL">
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 								</div>
	     	 							</div>
	     	 						</div>
	     	 					</div>
	     	 					<div class="row">
	     	 						<div class="col-md-12">
	     	 							<div class="row" style="background-color: #f4f4f4;">
	     	 								<div class="col-md-4">
	     	 									<p style="font-weight: bold;">TARDINESS:</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_tardiness" id="txt_payslip_tardiness">
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_tardiness_total" id="txt_payslip_tardiness_total">
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-4">
	     	 									<p">Late</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_late" id="txt_payslip_late">
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-4">
	     	 									<p>Undertime</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_undertime" id="txt_payslip_undertime">
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									
	     	 								</div>
	     	 							</div>
	     	 						</div>
	     	 					</div>		
	     	 					<div class="row">
	     	 						<div class="col-md-12">
	     	 							<div class="row" style="background-color: #f4f4f4;">
	     	 								<div class="col-md-4">
	     	 									<p style="font-weight: bold;">OVERTIME:</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_overtime" id="txt_payslip_overtime">
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_overtime_amount" id="txt_payslip_overtime_amount">
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-4">
	     	 									<p">Regular</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_regular_OT" id="txt_payslip_regular_OT">
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_regular_OT_amount" id="txt_payslip_regular_OT_amount">
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-4">
	     	 									<p>Legal Holiday</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_legal_OT" id="txt_payslip_legal_OT">
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_legal_OT_amount" id="txt_payslip_legal_OT_amount">
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-4">
	     	 									<p>Sund/Rest Day</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_lrestday_OT" id="txt_payslip_lrestday_OT">
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_lrestday_OT_amount" id="txt_payslip_lrestday_OT_amount">
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-4">
	     	 									<p>Special Holiday</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_special_OT" id="txt_payslip_special_OT">
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_special_OT_amount" id="txt_payslip_special_OT_amount">
	     	 								</div>
	     	 							</div>
	     	 						</div>
	     	 					</div>
	     	 					<div class="row">
	     	 						<div class="col-md-12">
	     	 							<div class="row" style="background-color: #f4f4f4;">
	     	 								<div class="col-md-4">
	     	 									<p style="font-weight: bold;">Night Shift Diff</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_night" id="txt_payslip_night">
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-4">
	     	 									
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_night_amount" id="txt_payslip_night_amount">
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									
	     	 								</div>
	     	 							</div>
	     	 						</div>
	     	 					</div>
	     	 					<div class="row">
	     	 						<div class="col-md-12">
	     	 							<div class="row" style="background-color: #f4f4f4;">
	     	 								<div class="col-md-4">
	     	 									<p style="font-weight: bold;">ADJUSTMENT</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_adjustment" id="txt_payslip_adjustment">
	     	 								</div>
	     	 							</div>
	     	 						</div>
	     	 					</div>
	     	 				</div>
	     	 				<div class="col-md-6"  style="padding-left: 20px;">
	     	 					<div class="row" style="background-color: #f4f4f4;">
	     	 						<div class="col-md-12" style="text-align: center;">
	     	 							<p style="font-weight: bold;">DEDUCTIONS:</p>
	     	 						</div>
	     	 					</div>
	     	 					<div class="row">
	     	 						<div class="col-md-12">
	     	 							<div class="row" style="background-color: #f4f4f4;; margin-top: 10px;">
	     	 								<div class="col-md-8">
	     	 									<p style="font-weight: bold;">TAX</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_tax" id="txt_payslip_tax">
	     	 								</div>
	     	 							</div>
	     	 						</div>
	     	 					</div>
	     	 					<div class="row">
	     	 						<div class="col-md-12">
	     	 							<div class="row" style="background-color: #f4f4f4;; margin-top: 10px;">
	     	 								<div class="col-md-8">
	     	 									<p style="font-weight: bold;">EMPLOYEE CONTRIBUTION</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-8">
	     	 									<p>SSS Premium</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_sss" id="txt_payslip_sss">
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-8">
	     	 									<p>PhilHealth</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_philhealth" id="txt_payslip_philhealth">
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-8">
	     	 									<p>Pag-Ibig Fund</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_pagibig" id="txt_payslip_pagibig">
	     	 								</div>
	     	 							</div>
	     	 						</div>
	     	 					</div>
	     	 					<div class="row">
	     	 						<div class="col-md-12">
	     	 							<div class="row" style="background-color: #f4f4f4;">
	     	 								<div class="col-md-8">
	     	 									<p style="font-weight: bold;">STANDARD DEDUCTION</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-8">
	     	 									<p>SSS Loan</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_sss_loan" id="txt_payslip_sss_loan">
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-8">
	     	 									<p>Pag-Ibig Loan</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_pagibig_loan" id="txt_payslip_pagibig_loan">
	     	 								</div>
	     	 							</div>
	     	 							<div class="row">
	     	 								<div class="col-md-8">
	     	 									<p>Company Loan/Advances</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_company_loan" id="txt_payslip_company_loan">
	     	 								</div>
	     	 							</div>
	     	 						</div>
	     	 					</div>
	     	 					<div class="row">
	     	 						<div class="col-md-12">
	     	 							<div class="row" style="background-color: #f4f4f4;">
	     	 								<div class="col-md-8">
	     	 									<p style="font-weight: bold;">UNIFORM</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_uniform" id="txt_payslip_uniform">
	     	 								</div>
	     	 							</div>
	     	 						</div>
	     	 					</div>
	     	 					<div class="row">
	     	 						<div class="col-md-12">
	     	 							<div class="row" style="background-color: #f4f4f4; margin-top: 10px;">
	     	 								<div class="col-md-8">
	     	 									<p style="font-weight: bold;">TOTAL DEDUCTION</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_total" id="txt_payslip_total">
	     	 								</div>
	     	 							</div>
	     	 						</div>
	     	 					</div>
	     	 				</div>
	     	 			</div>
	     	 			<div class="form-row" style="margin-top: 20px;">
	     	 				<div class="col-md-6" style="padding-right: 20px;">
	     	 					<div class="row" style="background-color: #f4f4f4;">
	     	 						<div class="col-md-12">
	     	 							<div class="row">
	     	 								<div class="col-md-4">
	     	 									<p style="font-weight: bold;">GROSS PAY</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_gross" id="txt_payslip_gross">
	     	 								</div>
	     	 							</div>
	     	 						</div>
	     	 					</div>
	     	 				</div>
	     	 				<div class="col-md-6" style="padding-left: 20px;">
	     	 					<div class="row">
	     	 						<div class="col-md-12">
	     	 							<div class="row" style="background-color: #f4f4f4;">
	     	 								<div class="col-md-8">
	     	 									<p style="font-weight: bold;">NET PAY</p>
	     	 								</div>
	     	 								<div class="col-md-4">
	     	 									<input type="text" name="txt_payslip_net" id="txt_payslip_net">
	     	 								</div>
	     	 							</div>
	     	 						</div>
	     	 					</div>
	     	 				</div>
	     	 			</div>
	     	 		</div>
	     	 		<div class="modal-footer">
	     	 			<button style="float: right;" type="button" class="btn btn-info"><i class="fa fa-print" aria-hidden="true"></i>&nbsp; Print</button>
	     	 		</div>
	     	 	</form>
	    	</div>
	  	</div>
	</div>

<script>
		$(document).ready(function() {

		$('.btn_payslip').on('click',  function(event){
            var slip_fname = $(this).attr('payslip_fname');
            var slip_lname = $(this).attr('payslip_lname');
            var slip_dept = $(this).attr('payslip_dept');
            var slip_basicpay = $(this).attr('payslip_basicpay');
            var slip_nodays = $(this).attr('payslip_nodays');
            var slip_holiday = $(this).attr('payslip_holiday');
            var slip_holiday_amount = $(this).attr('payslip_holiday_amount');
            var slip_allowance = $(this).attr('payslip_allowance');
            var slip_absences = $(this).attr('payslip_absences');
            var slip_unpaid = $(this).attr('payslip_unpaid');
            var slip_slvl = $(this).attr('payslip_SLVL');
            var slip_late = $(this).attr('payslip_late');
            var slip_undertime = $(this).attr('payslip_undertime');
            var slip_tardiness_amount = $(this).attr('payslip_tardiness_amount');
            var slip_regularOT = $(this).attr('payslip_regular_OT');
            var slip_regularOT_amount = $(this).attr('payslip_regular_OT_amount');
            var slip_legalOT = $(this).attr('payslip_legal_OT');
            var slip_legalOT_amount = $(this).attr('payslip_legal_OT_amount');
            var slip_restdayOT = $(this).attr('payslip_restday_OT');
            var slip_restdayOT_amount = $(this).attr('payslip_restday_OT_amount');
            var slip_specialOT = $(this).attr('payslip_special_OT');
            var slip_specialOT_amount = $(this).attr('payslip_special_OT_amount');
            var slip_night = $(this).attr('payslip_night');
            var slip_night_amount = $(this).attr('payslip_night_amount');
            var slip_adjustment = $(this).attr('payslip_adjustment');
            var slip_tax = $(this).attr('payslip_tax');
            var slip_sss = $(this).attr('payslip_sss');
            var slip_philhealth = $(this).attr('payslip_philhealth');
            var slip_pagibig = $(this).attr('payslip_pagibig');
            var slip_sss_loan = $(this).attr('payslip_sss_loan');
            var slip_pagibig_loan = $(this).attr('payslip_pagibig_loan');
            var slip_company_loan = $(this).attr('payslip_company_loan');
            var slip_uniform = $(this).attr('payslip_uniform');
            var slip_gross = $(this).attr('payslip_gross');
            var slip_net = $(this).attr('payslip_net');
            var slip_datefrom = $(this).attr('payslip_datefrom');
            var slip_dateto = $(this).attr('payslip_dateto');

            console.log(slip_specialOT_amount);

            var slip_val1 = parseInt(slip_tax, 10); 
           	var slip_val2 = parseInt(slip_sss, 10); 
           	var slip_val3 = parseInt(slip_philhealth, 10); 
           	var slip_val4 = parseInt(slip_pagibig, 10);
           	var slip_val5 = parseInt(slip_sss_loan, 10); 
           	var slip_val6 = parseInt(slip_pagibig_loan, 10); 
           	var slip_val7 = parseInt(slip_company_loan, 10); 
           	var slip_val8 = parseInt(slip_uniform, 10);

           	var parsed_Total = slip_val1 + slip_val2 + slip_val3 + slip_val4 + slip_val5 + slip_val6 + slip_val7 + slip_val8;

           	var tardiness_val1 = parseInt(slip_late, 10); 
           	var tardiness_val2 = parseInt(slip_undertime, 10);

           	var tardiness =  tardiness_val1 + tardiness_val2;

           	var OT_val1 = parseInt(slip_regularOT, 10);
           	var OT_val2 = parseInt(slip_legalOT, 10);
           	var OT_val3 = parseInt(slip_restdayOT, 10);
           	var OT_val4 = parseInt(slip_specialOT, 10);

           	var OT = OT_val1 + OT_val2 + OT_val3 + OT_val4;

           	var OT_amount_val1 = parseInt(slip_regularOT_amount, 10);
           	var OT_amount_val2 = parseInt(slip_legalOT_amount, 10);
           	var OT_amount_val3 = parseInt(slip_restdayOT_amount, 10);
           	var OT_amount_val4 = parseInt(slip_specialOT_amount, 10);

           	var OT_amount = OT_amount_val1 + OT_amount_val2 + OT_amount_val3 + OT_amount_val4;
            
            $('#txt_payslip_fname').html(slip_fname);
            $('#txt_payslip_lname').html(slip_lname);
            $('#payslip_dept').html(slip_dept);
            $('#txt_payslip_dateform').html(slip_datefrom);
            $('#txt_payslip_dateto').html(slip_dateto);
            $('#txt_payslip_basic_pay').val(slip_basicpay);
            $('#txt_payslip_days').val(slip_nodays);
            $('#txt_payslip_holiday').val(slip_holiday);
            $('#txt_payslip_holiday_amount').val(slip_holiday_amount);
            $('#txt_payslip_allowance').val(slip_allowance);
            $('#txt_payslip_absent').val(slip_absences);
            $('#txt_payslip_SL_VL').val(slip_slvl);
            $('#txt_payslip_late').val(slip_late);
            $('#txt_payslip_undertime').val(slip_undertime);
            $('#txt_payslip_regular_OT').val(slip_regularOT);
            $('#txt_payslip_regular_OT_amount').val(slip_regularOT_amount);
            $('#txt_payslip_legal_OT').val(slip_legalOT);
            $('#txt_payslip_legal_OT_amount').val(slip_legalOT_amount);
            $('#txt_payslip_lrestday_OT').val(slip_restdayOT);
            $('#txt_payslip_lrestday_OT_amount').val(slip_restdayOT_amount);
            $('#txt_payslip_special_OT').val(slip_specialOT);
            $('#txt_payslip_special_OT_amount').val(slip_specialOT_amount);
            $('#txt_payslip_night_amount').val(slip_night_amount);
            $('#txt_payslip_adjustment').val(slip_adjustment);
            $('#txt_payslip_tax').val(slip_tax);
            $('#txt_payslip_sss').val(slip_sss);
            $('#txt_payslip_philhealth').val(slip_philhealth);
            $('#txt_payslip_pagibig').val(slip_pagibig);
            $('#txt_payslip_sss_loan').val(slip_sss_loan);
            $('#txt_payslip_pagibig_loan').val(slip_pagibig_loan);
            $('#txt_payslip_company_loan').val(slip_company_loan);
            $('#txt_payslip_gross').val(slip_gross);
            $('#txt_payslip_net').val(slip_net);
            $('#txt_payslip_unpaid_absent').val(slip_unpaid);
            $('#txt_payslip_night').val(slip_night);
            $('#txt_payslip_uniform').val(slip_uniform);
            $('#txt_payslip_total').val(parsed_Total);
            $('#txt_payslip_tardiness').val(tardiness);
            $('#txt_payslip_overtime').val(OT);
            $('#txt_payslip_overtime_amount').val(OT_amount);
            $('#txt_payslip_tardiness_total').val(slip_tardiness_amount);
            
         });

/////////////////////PAYROLL////////////////////////////////


		$('.pay_search').change(function(){
			document.getElementById("p_date_from").valueAsDate = null;
			document.getElementById("p_date_to").valueAsDate = null;
			$('#p_no_days_worked').val('');
			$('#p_basic_pay').val('');
			$('#p_total_absences').val('');
			$('#p_unpaid_absences').val('');
			$('#p_charge_to_SIL').val('');
			$('#p_amount_absences').val('');
			$('#p_adjustment_incentive').val('');
			$('#p_no_holidays').val('');
			$('#p_amount_holidays').val('');
			$('#p_gross_pay').val('');
			$('#p_net_pay').val('');
			$('#p_no_undertime').val('');
			$('#p_no_late').val('');
			$('#p_amount_undertime_late').val('');
			$('#p_sss').val('');
			$('#p_phic').val('');
			$('#p_hdmf').val('');
			$('#p_total_deduction_benefits').val('');
			$('#p_total_deduction_benefits').val('');
		});

		var date_from = "";
		var date_to = "";

			$('#p_date_from').on('change', function(){
				var from = $(this).val();
				date_from = from;
				load(date_from, date_to);
			});

			$('#p_date_to').on('change', function(){
				var to = $(this).val();
				date_to = to;
				load(date_from, date_to);
			});

			function load(d_from, d_to){
				var token = $('#hdn-token').val();
				var id = $('#txt_p_empid').html();
				if(date_from != "" && date_to != ""){

				data = { 
							_token: token,
							id : id,
							d_from : d_from,
							d_to : d_to,
						};
	

				$.ajax({
				        url: '/ajaxPayroll' ,
				        type: "POST",
				        data: data,
				        success: function( response ) {
				        	// console.log(response);

				        	var rate_hour = $('#p_rate_hour').val();
				        	var daily = $('#p_daily_rate').val();
				        	var hourly = $('#p_rate_hour').val();
				        	var night_differential = response.night_differential;
				        	var amount_night_differential = night_differential * rate_hour * 0.1;


				        	var rest_ot = response.rest_ot_duration;
				        	var rest_ot_amount = response.daysWorked * rest_ot * 1 ;
				        	var legal_ot = response.legal_holiday_ot_duration;
				        	var legal_ot_amount = rate_hour * legal_ot * 1;
				        	var special_ot = response.special_holiday_ot_duration;
				        	var special_ot_amount = rate_hour * special_ot * 0.30;

				        	// var amount_night_differential = night_differential * night_differential_rate;
				        	var overtime = response.regular_ot_duration;
				        	var overtime_amount = rate_hour * overtime * 0.25;
				        	var basic_pay = response.daysWorked * daily;
				        	var amount = response.absents - response.unpaid;
				        	var paid_absents = amount * daily;
				        	var unpaid_absences = response.unpaid * daily;
				        	var allowance = response.allowances.allowance;
				           	
				        	var holiday = response.holidays * daily;

				        	var undertime = response.total_undertime;
				        	var late = response.total_late;
				        	var amount_undertime = undertime * rate_hour;
				        	var amount_late = late * rate_hour;


				        	var total_amount_late_undertime = amount_late + amount_undertime;
				        	var gross_pay_pr = basic_pay + paid_absents + allowance - total_amount_late_undertime + holiday + 
				        	amount_night_differential + rest_ot_amount + legal_ot_amount + special_ot_amount + overtime_amount;

				        	
				        	$('#p_no_holidays').val(response.holidays);
				        	$('#p_amount_holidays').val(holiday.toFixed(2));

				        	$('#p_no_days_worked').val(response.daysWorked);
				        	$('#p_basic_pay').val(basic_pay.toFixed(2));
				        	$('#p_gross_pay').val(gross_pay_pr.toFixed(2));
				        	
				        	$('#p_total_absences').val(response.absents);
				        	$('#p_unpaid_absences').val(response.unpaid);
				        	$('#p_charge_to_SIL').val(paid_absents);
				        	$('#p_amount_absences').val(unpaid_absences.toFixed(2));
				        	$('#p_no_undertime').val(undertime.toFixed(2));
				        	$('#p_no_late').val(late.toFixed(2));
				        	$('#p_amount_undertime_late').val(total_amount_late_undertime.toFixed(2));
				        	$('#p_reg_OT_hours').val(overtime);
				        	$('#p_no_rendered').val(night_differential);
				        	$('#p_amount_night').val(amount_night_differential.toFixed(2));
				        	$('#p_reg_OT_amount').val(overtime_amount.toFixed(2));
				        	$('#p_rest_OT_hours').val(rest_ot.toFixed(2));
				        	$('#p_rest_OT_amount').val(rest_ot_amount.toFixed(2));
				        	$('#p_lholiday_hours').val(legal_ot_amount.toFixed(2));
				        	$('#p_lholiday_hours').val(legal_ot.toFixed(2));
				        	$('#p_lholiday_amount').val(legal_ot_amount.toFixed(2));				        	
				        	$('#p_sholiday_hours').val(special_ot.toFixed(2));
				        	$('#p_sholiday_amount').val(special_ot_amount.toFixed(2));

				        	// $('#p_allowance').val(allowance);

				        			
				        	
	        	        	var phic = basic_pay * 0.02;
	        	        	var hdmf = basic_pay * 0.02;
	        	        	var gross_pay =  $('#p_gross_pay').val();

	        	        	if (gross_pay >= 0 && gross_pay <= 2250) {
	        				  	var msc = 2000;
	        				}
	        				else if (gross_pay >= 2250 && gross_pay <= 2749.99) {
	        					var msc = 2500;
	        				}
	        				else if (gross_pay >= 2750 && gross_pay <= 3249.99) {
	        					var msc = 3000;
	        				}
	        				else if (gross_pay >= 3250 && gross_pay <= 3749.99) {
	        					var msc = 3500;
	        				}
	        				else if (gross_pay >= 3750 && gross_pay <= 4249.99) {
	        					var msc = 4000;
	        				}
	        				else if (gross_pay >= 4250 && gross_pay <= 4749.99) {
	        					var msc = 4500;
	        				}
	        				else if (gross_pay >= 4750 && gross_pay <= 5249.99) {
	        					var msc = 5000;
	        				}
	        				else if (gross_pay >= 5250 && gross_pay <= 5749.99) {
	        					var msc = 5500;
	        				}
	        				else if (gross_pay >= 5750 && gross_pay <= 6249.99) {
	        					var msc = 6000;
	        				}
	        				else if (gross_pay >= 6250 && gross_pay <= 6749.99) {
	        					var msc = 6500;
	        				}
	        				else if (gross_pay >= 6750 && gross_pay <= 7249.99) {
	        					var msc = 7000;
	        				}
	        				else if (gross_pay >= 7250 && gross_pay <= 7749.99) {
	        					var msc = 7500;
	        				}
	        				else if (gross_pay >= 7750 && gross_pay <= 8249.99) {
	        					var msc = 8000;
	        				}
	        				else if (gross_pay >= 8250 && gross_pay <= 8749.99) {
	        					var msc = 8500;
	        				}
	        				else if (gross_pay >= 8750 && gross_pay <= 9249.99) {
	        					var msc = 9000;
	        				}
	        				else if (gross_pay >= 9250 && gross_pay <= 9749.99) {
	        					var msc = 9500;
	        				}
	        				else if (gross_pay >= 9750 && gross_pay <= 10249.99) {
	        					var msc = 10000;
	        				}
	        				else if (gross_pay >= 10250 && gross_pay <= 10749.99) {
	        					var msc = 10500;
	        				}
	        				else if (gross_pay >= 10750 && gross_pay <= 11249.99) {
	        					var msc = 11000;
	        				}
	        				else if (gross_pay >= 11250 && gross_pay <= 11749.99) {
	        					var msc = 11500;
	        				}
	        				else if (gross_pay >= 11750 && gross_pay <= 12249.99) {
	        					var msc = 12000;
	        				}
	        				else if (gross_pay >= 12250 && gross_pay <= 12749.99) {
	        					var msc = 12500;
	        				}
	        				else if (gross_pay >= 12750 && gross_pay <= 13249.99) {
	        					var msc = 13000;
	        				}
	        				else if (gross_pay >= 13250 && gross_pay <= 13749.99) {
	        					var msc = 13500;
	        				}
	        				else if (gross_pay >= 13750 && gross_pay <= 14249.99) {
	        					var msc = 14000;
	        				}
	        				else if (gross_pay >= 14250 && gross_pay <= 14749.99) {
	        					var msc = 14500;
	        				}
	        				else if (gross_pay >= 14750 && gross_pay <= 15249.99) {
	        					var msc = 15000;
	        				}
	        				else if (gross_pay >= 15250 && gross_pay <= 15749.99) {
	        					var msc = 15500;
	        				}
	        				else if (gross_pay >= 15750 && gross_pay <= 16249.99) {
	        					var msc = 16000;
	        				}
	        				else if (gross_pay >= 16250 && gross_pay <= 16749.99) {
	        					var msc = 16500;
	        				}
	        				else if (gross_pay >= 16750 && gross_pay <= 17249.99) {
	        					var msc = 17000;
	        				}
	        				else if (gross_pay >= 17250 && gross_pay <= 17749.99) {
	        					var msc = 17500;
	        				}
	        				else if (gross_pay >= 17750 && gross_pay <= 18249.99) {
	        					var msc = 18000;
	        				}
	        				else if (gross_pay >= 18250 && gross_pay <= 18749.99) {
	        					var msc = 18500;
	        				}
	        				else if (gross_pay >= 18750 && gross_pay <= 19249.99) {
	        					var msc = 19000;
	        				}
	        				else if (gross_pay >= 19250 && gross_pay <= 19749.99) {
	        					var msc = 19500;
	        				}
	        				else if (gross_pay >= 19750 && gross_pay <= 1000000) {
	        					var msc = 20000;
	        				}

	        				var sss = msc * 0.04;

	        				var amount_benefits = sss + phic + hdmf;

	        	        	$('#p_phic').val(phic.toFixed(2));
	        	        	$('#p_hdmf').val(hdmf.toFixed(2));
	        	        	$('#p_sss').val(sss.toFixed(2));
	        	        	$('#p_total_deduction_benefits').val(amount_benefits.toFixed(2));

	        	        	var net_pay = gross_pay_pr - amount_benefits;

	        	        	var net = parseInt(net_pay, 10);

	        	        	$('#p_adjustment_incentive').keyup(function(){
				        		var incentives = $(this).val();
				        		var new_incentives = parseInt(incentives, 10);
				        		var new_net = net_pay + new_incentives;

				        		var gross = gross_pay_pr + new_incentives;
				        		$('#p_gross_pay').val(gross.toFixed(2));
				        		$('#p_net_pay').val(new_net.toFixed(2));
				        		$('#p_net_pay2').val(new_net.toFixed(2));


				        		$('#p_sss_loan').val('');
				        		$('#p_company_loan').val('');
				        		$('#p_hdmf_loan').val('');
				        		$('#p_uniform').val('');
				        		$('#p_total_deduction_loan').val('');
				        		$('#p_tax').val('');
				        		
				        		
				        	});

				        	$('#p_net_pay').val(net_pay.toFixed(2));
				        	$('#p_net_pay2').val(net_pay.toFixed(2));

				        	var loan = $('[name="p_sss_loan"],[name="p_company_loan"],[name="p_hdmf_loan"],[name="p_uniform"],[name="p_tax"]'),
								loan_sss = $('[name="p_sss_loan"]'),
								loan_company = $('[name="p_company_loan"]'),
								loan_hdmf = $('[name="p_hdmf_loan"]'),
								uniform = $('[name="p_uniform"]'),
								tax = $('[name="p_tax"]'),
								loan_total = $('[name="p_total_deduction_loan"]');		

							loan.change(function() {
								 var val1 = (isNaN(parseInt(loan_sss.val()))) ? 0 : parseInt(loan_sss.val());
								 var val2 = (isNaN(parseInt(loan_company.val()))) ? 0 : parseInt(loan_company.val());
								 var val3 = (isNaN(parseInt(loan_hdmf.val()))) ? 0 : parseInt(loan_hdmf.val());
								 var val4 = (isNaN(parseInt(uniform.val()))) ? 0 : parseInt(uniform.val());
								 var val5 = (isNaN(parseInt(tax.val()))) ? 0 : parseInt(tax.val());

								 loan_total.val(val1 + val2 + val3 + val4);

								 var loans = loan_total.val();
								 var net_pay_amount = $('#p_net_pay2').val();

								 console.log(net_pay_amount);

								 var net_loan = net_pay_amount - loans;

								 console.log(net_loan);

								 var net_pay_final = net_loan - val5;

								 $('#p_net_pay').val(net_pay_final.toFixed(2));
							});

				        }
				      });
				}
			}





////////////////////////////////////////////////////////////////
			$('#search_emp').select2({
				dropdownParent: $('#generate_payroll')
			});

			$('#search_emp').on('change', function() {
				var data = $('#search_emp option:selected').text();
				var data2 = $('#search_emp').val();

				var data_p_dept = $('#search_emp option:selected').attr('p_salary');
				var data_p_allowance = $('#search_emp option:selected').attr('p_allowances');
				var data_rate_hour = data_p_dept/8;
				
				$('#txt_p_name').html(data);
				$('#txt_p_empid').html(data2);
				$('#p_empid').val(data2);
				$('#p_allowance').val(data_p_allowance);
				$('#p_daily_rate').val(data_p_dept);
				$('#p_rate_hour').val(data_rate_hour);
			});
	    });
	</script>
@endsection