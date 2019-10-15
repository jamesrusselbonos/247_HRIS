@extends('employee.employee')

@section('employee_content')
	<div class="col-lg-12">
		<div class="row">
			<div class="jumbotron">
			  	<h1 style="margin-top: 95px;" class="display-8">Welcome!<br> {{ucwords( Auth::user()->employee()->first()->firstname )}} {{ucwords( Auth::user()->employee()->first()->lastname) }}</h1>
			</div>
		</div>
		<div class="row">
			<div class="admin_index" data-simplebar style="height: 100vh; padding-bottom: 1px;">
				<div class="admin_cards">
					<div class="row">
				        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				            <div class="card bg-c-yellow order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Overall Attendance</h6>
				                    <h4 class="text-right"><i style="font-size: 0.9em;" class="fa fa-clock-o f-left"></i><span>{{$sum_of_time_duration}} hrs</span></h4>
				                    <a href="/timesheet" style="color: #fff;  font-size: 1em;"><p class="m-b-0"><span class="f-left"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View TimeSheet</span></p></a>
				                </div>
				            </div>
				        </div>

				        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				            <div class="card bg-c-yellow order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">No. Hours Late</h6>
				                    <h4 class="text-right"><i style="font-size: 0.9em;" class="fa fa-clock-o f-left"></i><span>0 hrs</span></h4>
				                    <a href="/timesheet" style="color: #fff;"><p class="m-b-0"><span class="f-left"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View TimeSheet</span></p></a>
				                </div>
				            </div>
				        </div>

				        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				            <div class="card bg-c-yellow order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">No. Days Absent</h6>
				                    <h4 class="text-right"><i style="font-size: 0.9em;" class="fa fa-calendar f-left"></i><span>{{$days_absent->count()}} Day/s</span></h4>
				                    <a href="/timesheet" style="color: #fff;"><p class="m-b-0"><span class="f-left"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View TimeSheet</span></p></a>
				                </div>
				            </div>
				        </div>

				        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				            <div class="card bg-c-yellow order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Leaves Remaining</h6>
				                    <h4 class="text-right"><i style="font-size: 0.9em;" class="fa fa-outdent f-left"></i><span>{{Auth::user()->employee()->first()->leave_credit }}</span></h4>
				                    <a href="/timesheet" style="color: #fff;"><p class="m-b-0"><span class="f-left"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View TimeSheet</span></p></a>
				                </div>
				            </div>
				        </div>
				        
				        <!-- <div class="col-md-4 col-xl-3">
				            <div class="card bg-c-pink order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Orders Received</h6>
				                    <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>486</span></h2>
				                    <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
				                </div>
				            </div>
				        </div> -->
					</div>
				</div>
				<div class="admin_index_wrapper">
					<div class="row">
						<div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-block">
									<div class="row">
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
											<h6 class="m-b-20"><strong>Attendance Report</strong></h6>
										</div>
										<div class="col-xl-8 col-lg-8 col-md-6 col-sm-6 color_desc" style="padding-top: 15px; text-align: right;">
											<p style="color: #008000;"><i class="fa fa-circle" aria-hidden="true" style="margin-top: 12px;"></i>&nbsp;Present</p>
											<p style="color: #FF0000;"><i class="fa fa-circle" aria-hidden="true" style="margin-top: 12px;"></i>&nbsp;Absent</p>
											<p style="color: #808080;"><i class="fa fa-circle" aria-hidden="true" style="margin-top: 12px;"></i>&nbsp;Holidays</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
											<div id="calendar"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="card" style="max-height: 300px;">
										<div class="card-block">
											<div class="row">
												<div class="col-md-12">
													<h6 class="m-b-20"><strong>Memos</strong></h6>
												</div>
											</div>
											<div class="row" style="max-height: 280px;" data-simplebar>
												<div class="col-md-12" style="padding-top: 15px;">
													@foreach(auth()->user()->Notifications as $notification)

						      						@if($notification->type == "App\Notifications\SendMemo")
								                   		<a id="" class="memo_view" data-toggle="modal" data-target="#view_memo"
								                   		>
				           			                   		<div class="row" style="margin-bottom: 30px; margin-top: -30px;">
				           			                   			<div class="col-md-9">
				           			                   				<h6>{{$notification->data['title']}}</h6>
				           				                   			<p style="margin-top: -15px;">{{$notification->data['date']}}</p>
				           				                   			<p style="margin-top: -15px; text-overflow: ellipsis; max-width: 500px; min-height: 10px; white-space: nowrap; overflow: hidden;">{{$notification->data['subject']}}</p>
				           			                   			</div>
				           			                   		</div>
								                   		</a>
								                   	@endif
						      						@endforeach  
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="card">
										<div class="card-block">
											<div class="row">
												<div class="col-md-12">
													<h6 class="m-b-20"><strong>Leaves</strong></h6>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div id="calendar2"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
		  
			// page is now ready, initialize the calendar...
			$('#calendar2').fullCalendar({
				plugins: [ 'interaction'],
	            selectable: true,
	            selectHelper: true,
	            editable: true,
	             events : [
	               
	                @foreach($leave as $leaves)
	                {
	                    title : '{{ $leaves->firstname . ' ' . $leaves->lastname . ', ' . $leaves->leave_type . ', ' . $leaves->leave_status }}',
	                    start : '{{ $leaves->date_from }}T00:00:00',
	                    textColor: 'white',
	                    @if ($leaves->date_to)
	                            end: '{{ $leaves->date_to }}T24:00:00',
	                    @endif
	                }
	                @endforeach
		        ],
	        });

	        $('#calendar').fullCalendar({
	            // put your options and callbacks here
	          	plugins: [ 'interaction'],
	            selectable: true,
	            selectHelper: true,
	            editable: true,
	             events : [
	                @foreach($timeSheets as $timeSheet)
	                {
	                    title : '{{ Auth::user()->employee()->first()->firstname . ' ' . Auth::user()->employee()->first()->lastname }}',
	                    start : '{{ $timeSheet->date }}',
	                    color : 'green',
	                    textColor: 'white',
	                    @if ($timeSheet->date)
	                            end: '{{ $timeSheet->date }}',
	                    @endif
	                },
	                @endforeach
	                @foreach($days_absent as $absent)
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
	                @foreach($holidays as $holiday)
	                {
	                	title : '{{ $holiday->holiday_name . ', ' . $holiday->holiday_type }} ',
	                	start : '{{ $holiday->date }}',
	                	color : 'gray',
	                	textColor: 'white',
	                    @if ($holiday->date)
	                            end: '{{ $holiday->date }}',
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

