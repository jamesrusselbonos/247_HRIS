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
							@foreach($payrolls as $payroll)
								<tr>
								  <td style="min-width: 200px;">{{ $payroll->lastname }}, {{ $payroll->firstname }}</td>
					              <td style="min-width: 200px;">{{ $payroll->department_name }}</td>
					              <td style="min-width: 200px;">{{ $payroll->no_days_worked }}</td>
					              <td style="min-width: 200px;">{{ $payroll->daily_rate }}</td>
					              <td style="min-width: 200px;">{{ $payroll->rate_per_hour }}</td>
					              <td style="min-width: 200px;">{{ $payroll->basic_pay }}</td>
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
					              <td style="min-width: 200px;">{{ $payroll->restday_OT_hours }}</td>
					              <td style="min-width: 200px;">{{ $payroll->restday_OT_amount }}</td>
					              <td style="min-width: 200px;">{{ $payroll->legal_holiday_OT_hours }}</td>
					              <td style="min-width: 200px;">{{ $payroll->legal_holiday_OT_amount }}</td>
					              <td style="min-width: 200px;">{{ $payroll->special_holiday_OT_hours }}</td>
					              <td style="min-width: 200px;">{{ $payroll->special_holiday_OT_amount }}</td>
					              <td style="min-width: 200px;">{{ $payroll->no_hours_rendered }}</td>
					              <td style="min-width: 200px;">{{ $payroll->amount_night_diffential }}</td>
					              <td style="min-width: 200px;">{{ $payroll->no_hours_undertime }}</td>
					              <td style="min-width: 200px;">{{ $payroll->no_hours_late }}</td>
					              <td style="min-width: 200px;">{{ $payroll->gross_pay }}</td>
					              <td style="min-width: 200px;">{{ $payroll->SSS_payroll }}</td>
					              <td style="min-width: 200px;">{{ $payroll->PHIC_payroll }}</td>
					              <td style="min-width: 200px;">{{ $payroll->HDMF_payroll }}</td>
					              <td style="min-width: 200px;">{{ $payroll->total_deduction_benefits }}</td>
					              <td style="min-width: 200px;">{{ $payroll->SSS_loan }}</td>
					              <td style="min-width: 200px;">{{ $payroll->company_loan }}</td>
					              <td style="min-width: 200px;">{{ $payroll->HDMF_loan }}</td>
					              <td style="min-width: 200px;">{{ $payroll->uniform }}</td>
					              <td style="min-width: 200px;">{{ $payroll->total_deduction_loan }}</td>
					              <td style="min-width: 200px;">{{ $payroll->tax }}</td>
					              <td style="min-width: 200px;">{{ $payroll->net_pay }}</td>
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
		      		<div class="modal-body" style="padding-left: 30px; padding-right: 30px;">
		      			<div class="row" style="padding-bottom: 10px;">
		      				<div class="col-md-4"></div>
		      				<div class="col-md-4">
								<div class="row">
									<div class="col-sm-5" style="text-align: right;">
										<p style="margin-top: 5px;">Gross Pay</p>
									</div>
									<div class="col-sm-7">
										<input type="text" name="p_gross_pay" id="p_gross_pay" class="form-control" readonly>
									</div>
								</div>
		      				</div>
		      				<div class="col-md-4">
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
															  <option value="{{$emp->employee_id}}" p_salary="{{$emp->salary}}" p_allowances="{{$emp->allowance}}">{{$emp->lastname}}, {{$emp->firstname}} {{$emp->middle_name}}</option>
														  	@endforeach
														</select>
													</form>
									     		</div>
											</div>
											<div class="col-lg-6">
												<h3 style="margin-top: 0px;" id="txt_p_name"></h3>
												<h6 style="margin-top: -20px;" id="txt_p_empid"></h6>
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

									  		<div class="form-group col-md-3">
									  			<label>Total Absences</label>
									   			<input type="text" name="p_total_absences" id="p_total_absences" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-3">
									  			<label>Unpaid Absences</label>
									    		<input type="text" name="p_unpaid_absences" id="p_unpaid_absences" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-3">
									  			<label>Charge to SIL</label>
									   			<input type="text" name="p_charge_to_SIL" id="p_charge_to_SIL" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-3">
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
									    		<input type="text" name="p_adjustment_incentive" id="p_adjustment_incentive" class="form-control" >
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

									  		<div class="form-group col-md-4">
									  			<label>No. Of Hours Undertime </label>
									   			<input type="text" name="p_no_undertime" id="p_no_undertime" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-4">
									  			<label>No. Of Hours Late</label>
									    		<input type="text" name="p_no_late" id="p_no_late" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-4">
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

									  		<div class="form-group col-md-4">
									  			<label>SSS </label>
									   			<input type="text" name="p_sss_loan" id="p_sss_loan" class="form-control" value="">
									  		</div>
									  		<div class="form-group col-md-4">
									  			<label>Company Loan / Advances</label>
									    		<input type="text" name="p_company_loan" id="p_company_loan" class="form-control" value="">
									  		</div>
									  		<div class="form-group col-md-4">
									  			<label>HDMF </label>
									   			<input type="text" name="p_hdmf_loan" id="p_hdmf_loan" class="form-control" value="">
									  		</div>
										</div>
										<div class="form-row">

									  		<div class="form-group col-md-6">
									  			<label>Uniform </label>
									   			<input type="text" name="p_uniform" id="p_uniform" class="form-control" value="">
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

	<script>
		$(document).ready(function() {
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
				console.log(data);

				$.ajax({
				        url: '/ajaxPayroll' ,
				        type: "POST",
				        data: data,
				        success: function( response ) {
				        	console.log(response);

				        	var rate_hour = $('#p_rate_hour').val();
				        	var daily = $('#p_daily_rate').val();
				        	var hourly = $('#p_rate_hour').val();
				        	var night_differential = response.night_differential;
				        	var night_differential_rate = rate_hour * .10 * 8;
				        	var amount_night_differential = night_differential * night_differential_rate;
				        	var overtime = response.overtimes;
				        	var overtime_amount = overtime * rate_hour * 0.25;
				        	var basic_pay = response.daysWorked * daily;
				        	var amount = response.absents - response.unpaid;
				        	var paid_absents = amount * daily;
				        	var unpaid_absences = response.unpaid * daily;
				        	var allowance = response.allowances.allowance;
				           	console.log(night_differential_rate);
				        	var holiday = response.holidays * daily;

				        	var undertime = response.total_undertime;
				        	var late = response.total_late;
				        	var amount_undertime = undertime * rate_hour;
				        	var amount_late = late * rate_hour;


				        	var total_amount_late_undertime = amount_late + amount_undertime;
				        	var gross_pay_pr = basic_pay + paid_absents + allowance - total_amount_late_undertime + holiday;

				        	
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
				        	$('#p_amount_night').val(amount_night_differential);
				        	$('#p_reg_OT_amount').val(overtime_amount.toFixed(2));

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

				        		var gross = gross_pay_pr + new_incentives;
				        		$('#p_gross_pay').val(gross.toFixed(2));
				        		$('#p_net_pay').val(net + new_incentives);
				        		$('#p_net_pay2').val(net + new_incentives);
				        		
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

								 $('#p_net_pay').val(net_loan - val5);
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