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
										<div class="col-md-5">
											<select class="js-example-basic-single" id="emp_sel" style="width: 100%;" name="emp_sel"  onchange="this.form.submit()">
												<option selected disabled>Search Employee</option>
												@foreach($employees as $emp)
												  <option value="{{$emp->employee_id}}">{{$emp->lastname}} {{$emp->firstname}} {{$emp->middle_name}}</option>
											  	@endforeach
											</select>
										</div>
										<div class="col-md-2">
											<a href="{{ route('attendance.index') }}" class="btn btn-primary">Show All</a>
										</div>
										<div class="col-md-5">
											<div class="row">
												<div class="col-sm-12 color_desc">
													<p style="color: #008000;"><i class="fa fa-circle" aria-hidden="true" style="margin-top: 12px;"></i>&nbsp;Present</p>
													<p style="color: #3A87AD;"><i class="fa fa-circle" aria-hidden="true" style="margin-top: 12px;"></i>&nbsp;Leave</p>
													<p style="color: #FF0000;"><i class="fa fa-circle" aria-hidden="true" style="margin-top: 12px;"></i>&nbsp;Absent</p>
													<p style="color: #808080;"><i class="fa fa-circle" aria-hidden="true" style="margin-top: 12px;"></i>&nbsp;Holidays</p>
												</div>
											</div>
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
							<form method="POST" action="{{ route('attendance.absent') }}">
								{{ csrf_field() }}
								@if(isset($emp_name))
									@foreach($emp_name as $name)
										<div class="row">
											<input type="hidden" name="txt_a_id" id="txt_a_id">
											<h5 id="a_lname">{{$name->lastname}}</h5><h5 id="a_fname">&nbsp;{{$name->firstname}}&nbsp;</h5><h5 id="a_mname">{{$name->middle_name}}</h5>
										</div>
										<div class="row">
											<p style="margin-top: -8px;" id="txt_a_emp_id">{{$name->employee_id}}</p>
											<input type="hidden" name="a_emp_id" id="a_emp_id" value="{{$name->employee_id}}">
										</div>
									@endforeach

								@else
									<div class="row">
										<h5 id="">Select an Employee</h5>
										<input type="hidden" name="txt_a_id" id="txt_a_id">
										<h5 id="txt_a_lname"></h5><h5 id="txt_a_fname">&nbsp;&nbsp;</h5><h5 id="txt_a_mname"></h5>
									</div>
									<div class="row">
										<p style="margin-top: -8px;" id="txt_a_emp_id"></p>
									</div>
								@endif
								<div class="row">
									<input type="hidden" name="txt_a_date" id="txt_a_date">
									<p>Date: &nbsp;</p><p id="a_date"></p>
								</div>
								<div class="row">
									<div class="form-check">
									  	<input class="form-check-input" type="checkbox" value="Yes" name="unpaid_absent" id="unpaid_absent">
									  	<label class="form-check-label" for="defaultCheck1">
									    	Unpaid Absent
									  	</label>
									</div>
								</div>
								<div class="row">
									<div class="form-check">
									  	<input class="form-check-input" type="checkbox" value="1" name="charge_to_SIL" id="charge_to_SIL">
									  	<label class="form-check-label" for="defaultCheck1">
									    	Charge to SIL
									  	</label>
									</div>
								</div>
								<div class="row" style="float: right;">
									<button type="submit" class="btn btn-danger btn_add_sched" style="margin-top: 20px;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Mark as absent</button>
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
	                    textColor: 'white',
	                    @if ($timesheets->date)
	                            end: '{{ $timesheets->date }}',
	                    @endif
	                },
	                @endforeach
	                @foreach($leave as $leaves)
	                {
	                    title : '{{ $leaves->firstname . ' ' . $leaves->lastname . ', ' . $leaves->leave_type . ', ' . $leaves->leave_status }}',
	                    start : '{{ $leaves->date_from }}T00:00:00',
	                    textColor: 'white',
	                    @if ($leaves->date_to)
	                            end: '{{ $leaves->date_to }}T24:00:00',
	                    @endif
	                },
	                @endforeach
	                @foreach($holidays as $holiday)
	                {
	                	title : '{{ $holiday->holiday_name . ' ' . $holiday->holiday_type }} ',
	                	start : '{{ $holiday->date }}',
	                	color : 'gray',
	                	textColor: 'white',
	                    @if ($holiday->date)
	                            end: '{{ $holiday->date }}',
	                    @endif

	                }
	                @endforeach
	               @foreach($absents as $absent)
	                {
	                    title : '{{ $absent->firstname . ' ' . $absent->lastname }}',
	                    start : '{{ $absent->date }}',
	                    color : 'red',
	                    textColor: 'white',
	                    @if ($absent->date)
	                            end: '{{ $absent->date }}',
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