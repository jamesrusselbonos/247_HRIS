@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="sched_page" data-simplebar>
			<div class="row">
				<div class="col-lg-8">
					<div class="card">
						<div class="card-header">
							<div class="col-lg-12">
								<form method="POST" action="{{route('attendance.load')}}">
									{{ csrf_field() }}
									<div class="row">
										<div class="col-md-7">
											<select class="js-example-basic-single" id="emp_sel" style="width: 100%;" name="emp_sel"  onchange="this.form.submit()">
												<option selected disabled>Search Employee</option>
												@foreach($employees as $emp)
												  <option value="{{$emp->employee_id}}">{{$emp->firstname}} {{$emp->lastname}}</option>
											  	@endforeach
											</select>
										</div>
										<div class="col-md-5">
											<a href="{{ route('attendance.index') }}" class="btn btn-primary">Show All</a>
										</div>
									</div>
									

								</form>
								<!-- <input type="search" name="" placeholder="Search Employees" style="padding-left: 10px; height: 40px; width: 100%;"> -->
							</div>
						</div>
						<div class="card-body">
							<div id='calendar'></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body" style="padding-left: 40px; padding-right: 40px;">
							<form>
								<div class="row">
									<input type="hidden" name="txt_a_id" id="txt_a_id">
									<h5 id="a_lname">Bonos,</h5><h5 id="a_fname">&nbsp;James Russel&nbsp;</h5><h5 id="a_mname">Grefaldo</h5>
								</div>
								<div class="row">
									<p style="margin-top: -8px;" id="a_emp_id">247-OPM-0003</p>
								</div>
								<div class="row">
									<input type="hidden" name="txt_a_date" id="txt_a_date">
									<p>Date: &nbsp;</p><p id="a_date"></p>
								</div>
								<div class="row">
									<div class="form-check">
									  	<input class="form-check-input" type="checkbox" value="" id="absent">
									  	<label class="form-check-label" for="defaultCheck1">
									    	Mark as Absent
									  	</label>
									</div>
								</div>
								<div class="row">
									<div class="form-check">
									  	<input class="form-check-input" type="checkbox" value="" id="unpaid_absent">
									  	<label class="form-check-label" for="defaultCheck1">
									    	Unpaid Absent
									  	</label>
									</div>
								</div>
								<div class="row">
									<div class="form-check">
									  	<input class="form-check-input" type="checkbox" value="" id="charge_to_SIL">
									  	<label class="form-check-label" for="defaultCheck1">
									    	Charge to SIL
									  	</label>
									</div>
								</div>
								<div class="row" style="float: right;">
									<button type="button" class="btn btn-danger btn_add_sched" style="margin-top: 20px;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {

			$('#emp_sel').select2({

			});
	        // page is now ready, initialize the calendar...
	        $('#calendar').fullCalendar({
	            // put your options and callbacks here
	          	plugins: [ 'interaction'],
	            selectable: true,
	            selectHelper: true,
	            editable: true,
	             events : [
	                @foreach($timesheet as $timesheets)
	                {
	                    title : '{{ $timesheets->firstname . ' ' . $timesheets->lastname . ', ' . $timesheets->employee_id }}',
	                    start : '{{ $timesheets->date }}',
	                    color : 'green',
	                    @if ($timesheets->date)
	                            end: '{{ $timesheets->date }}',
	                    @endif
	                },
	                @endforeach
	                @foreach($leave as $leaves)
	                {
	                    title : '{{ $leaves->firstname . ' ' . $leaves->lastname . ', ' . $leaves->leave_type . ', ' . $leaves->leave_status }}',
	                    start : '{{ $leaves->date_from }}T00:00:00',
	                    @if ($leaves->date_to)
	                            end: '{{ $leaves->date_to }}T24:00:00',
	                    @endif
	                },
	                @endforeach
		        ],

	            	
		        dayClick: function(date, jsEvent, view){
		        	var attendance_date = date.format();

		        	console.log(attendance_date);

		        	$('#a_date').html(attendance_date);
		        	$('#txt_a_date').val(attendance_date);
		        },
		        hiddenDays: '7',
	        });
	    });
	</script>
@endsection