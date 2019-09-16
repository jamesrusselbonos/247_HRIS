@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="sched_page">
			<div class="row">
				<div class="col-lg-8">
					<div class="card">
						<div class="card-header">
							
						</div>
						<div class="card-body">
							<div id='calendar'></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body" style="padding-left: 40px; padding-right: 40px;">
							<div class="row">
								<input type="hidden" name="txt_a_id" id="txt_a_id">
								<h5 id="a_lname">Bonos,</h5><h5 id="a_fname">&nbsp;James Russel&nbsp;</h5><h5 id="a_mname">Grefaldo</h5>
							</div>
							<div class="row">
								<p style="margin-top: -8px;" id="a_emp_id">247-OPM-0003</p>
							</div>
							<div class="row">
								<input type="hidden" name="txt_a_date" id="txt_a_date">
								<p>Date: &nbsp;</p><p id="a_date">September 11, 2019</p>
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="absent_modal" tabindex="-1" role="dialog">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title">Modal title</h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">&times;</span>
	        		</button>
	      		</div>
	      		<div class="modal-body">
	        		<p>Modal body text goes here.</p>
	      		</div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-primary">Save changes</button>
	        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      		</div>
	    	</div>
	  	</div>
	</div>

	<script>
		$(document).ready(function() {
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
	        });
	    });
	</script>
@endsection