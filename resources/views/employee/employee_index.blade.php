@extends('employee.employee')

@section('employee_content')
	<div class="col-lg-12">
		<div class="admin_index" data-simplebar style="height: 100vh; padding-bottom: 30px;">
			<div class="">
				<div>
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
			</div>
		</div>
	</div>

@endsection

