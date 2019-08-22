@extends('admin.admin')

@section('content')
	<div class="col-lg-12">
		<div class="manage_employee">
			<div class="container">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-xl-3">
				            <div class="card bg-c-blue order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Employees</h6>
				                    <h2 class="text-right"><i style="padding-top: 10px;" class="fa fa-users f-left"></i><span>{{ $emp_count->count() }}</span></h2>
				                    <a href="/add_employee" style="color: #fff;"><p><span class="f-left"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Employee</span></p></a>
				                </div>
				            </div>
				        </div>
				        
				        <div class="col-md-4 col-xl-3">
				            <div class="card bg-c-green order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Departments</h6>
				                    <h2 class="text-right"><i style="padding-top: 10px;" class="fa fa-folder-open f-left"></i><span>{{ $dept_count->count() }}</span></h2>
				                    <a href="/department" style="color: #fff;"><p class="m-b-0"><span class="f-left"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Department</span></p></a>
				                </div>
				            </div>
				        </div>
				        
				        <div class="col-md-4 col-xl-3">
				            <div class="card bg-c-yellow order-card">
				                <div class="card-block">
				                    <h6 class="m-b-20">Overall Attendance</h6>
				                    <h2 class="text-right"><i style="padding-top: 10px;" class="fa fa-clock-o f-left"></i><span>486 Hours</span></h2>
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

