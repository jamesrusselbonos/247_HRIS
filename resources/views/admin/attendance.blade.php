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
						<div class="card-header">
							<h5>Mark as absent</h5>
						</div>
						<div class="card-body">

						</div>
					</div>
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
	                    title : '{{ $leaves->firstname . ' ' . $leaves->lastname . ', ' . $leaves->leave_status }}',
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