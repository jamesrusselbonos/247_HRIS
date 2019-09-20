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

	<div class="modal fade bd-example-modal-lg" id="generate_payroll" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-xl">
	    	<div class="modal-content">
	      		<div class="modal-header">
	      			<h5 class="modal-title" id="exampleModalLabel">New Payroll</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
	      		</div>
	      		<form method="" action="">
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
														<select class="js-example-basic-single" id="search_emp" style="width: 100%;" name="search_emp">
															<option selected disabled>Search Employee</option>
															@foreach($employees as $emp)
															  <option value="{{$emp->employee_id}}" p_salary="{{$emp->salary}}">{{$emp->lastname}}, {{$emp->firstname}} {{$emp->middle_name}}</option>
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
									   			<input type="text" name="p_sss_loan" id="p_sss_loan" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-4">
									  			<label>Company Loan / Advances</label>
									    		<input type="text" name="p_company_loan" id="p_company_loan" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-4">
									  			<label>HDMF </label>
									   			<input type="text" name="p_hdmf_loan" id="p_hdmf_loan" class="form-control">
									  		</div>
										</div>
										<div class="form-row">

									  		<div class="form-group col-md-6">
									  			<label>Uniform </label>
									   			<input type="text" name="p_uniform" id="p_uniform" class="form-control" >
									  		</div>
									  		<div class="form-group col-md-6">
									  			<label>Total Deduction</label>
									    		<input type="text" name="p_total_deduction_loan" id="p_total_deduction_loan" class="form-control" readonly>
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
	      		        <button type="button" class="btn btn-success"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Generate Payroll</button>
	      		     </div>
	      		</form>
	    	</div>
	  	</div>
	</div>

	<script>
		$(document).ready(function() {

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
				        url: '/payroll' ,
				        type: "POST",
				        data: data,
				        success: function( response ) {
				        	console.log(response);
				        	// var resp = response/8;
				        	// var total = resp.toFixed(2);
				        	// $('#p_no_days_worked').val(total);
				        	var daily = $('#p_daily_rate').val();
				        	var hourly = $('#p_rate_hour').val();
				        	var basic_pay = response.timePayroll * daily;
				        	var amount = response.absents - response.unpaid;
				        	var paid_absents = amount * daily;
				        	var unpaid_absences = response.unpaid * daily;
				        	var allowance = response.allowances.allowance;
				        	// $('#p_basic_pay').val(basic_pay.toFixed(2));
				        	$('#p_no_days_worked').val(response.timePayroll);
				        	$('#p_basic_pay').val(basic_pay);
				        	$('#p_gross_pay').val(basic_pay + paid_absents + allowance);
				        	$('#p_net_pay').val(basic_pay + paid_absents + allowance);
				        	$('#p_total_absences').val(response.absents);
				        	$('#p_unpaid_absences').val(response.unpaid);
				        	$('#p_amount_absences').val(unpaid_absences);
				        	$('#p_allowance').val(allowance);

				        	


				        }
				      });
				}
			}


			$('#search_emp').select2({
				dropdownParent: $('#generate_payroll')
			});
			$('#search_emp').on('change', function() {
				var data = $('#search_emp option:selected').text();
				var data2 = $('#search_emp').val();

				var data_p_dept = $('#search_emp option:selected').attr('p_salary');
				var data_rate_hour = data_p_dept/8;

				$('#txt_p_name').html(data);
				$('#txt_p_empid').html(data2);
				$('#p_empid').val(data2);
				$('#p_daily_rate').val(data_p_dept);
				$('#p_rate_hour').val(data_rate_hour);
			});
	    });
	</script>

@endsection