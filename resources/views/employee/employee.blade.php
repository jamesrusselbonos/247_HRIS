<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Employee Dashboard | 247 HRIS </title>

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/4c6c819f60.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Override CSS -->
    <link rel="stylesheet" type="text/css" href="/css/styles.css">

</head>
<body>
	<!--Main-->
	<div class="row">
		<div class="col-lg-2 sidebar">
			<div class="row">
				<div style="text-align: center;" class="col-lg-12">
					<img class="company_logo" src="/img/icon.png">
					<h6 style="margin-top: 10px;">24/7 Virtual Agent Philippines Inc.</h6>
				</div>
			</div>
			<!-- Navigation-->
			<div class="row navigation">
				<div class="col-lg-12">
					<h6 style="color: #fff; padding-left: 20px; padding-right: 20px;">Navigation</h6>
					<ul>
						<li>
							<div class="row nav_link active_nav">
								<div class="col-lg-2">
									<i style="color: #fff;" class="fa fa-calendar" aria-hidden="true"></i>
								</div>
								<div class="col-lg-10">
									<a style="font-size: 15px;" href="#attendanceSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Attendance</a>
									<ul class="collapse" id="attendanceSubmenu">
										<li style="padding-top: 10px;">
											<a style="font-size: 14px;" href="/punch_in_out"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; Time In/Out</a>
										</li>
										<!-- <li style="padding-top: 10px;">
											<a style="font-size: 16px;" href="/employee_list"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; Manage Timesheets</a>
										</li> -->
									</ul>
								</div>
							</div>
						</li>
					</ul>	
				</div>
			</div>
		</div>
		<div class="col-lg-10 main">
			<div class="dashboard_banner">
				<div class="row">
					<div class="col-lg-6">
						<h2>EMPLOYEE DASHBOARD</h2>
					</div>
					<div class="col-lg-6">
						<ul style="list-style: none;">
							<li style="float: right;" class="nav-item dropdown">
                                <a style="color: #000;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     <span>Employee <i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        	</li>
						</ul>
					</div>
				</div>
			</div>
			@yield('employee_content')
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {

		    $(".time").click(function(){

		        var text = $('.time').text();
		        var id = $(this).attr('id');
		        var token = $(".card-body .hdn-token").val();
		        var testID = $(this).attr('testID');
		        var randd = Math.floor(Math.random() * 10000);
		        var name = $(this).attr('name');
		        $(".time").addClass('disabled');
		       $(".ic").removeAttr('hidden').addClass('fa-spin');
		        
		        var randId = randd;
		        if( text == "Time In")
		        {
		            var rand1 = $(".time").attr('testId', randd);
		            console.log(id);
		           
		            
		            $.post('/timeIn/' + id,

		             {'id':id, 'randId':randId, '_token':token}, 
		             function(data){

		             console.log(id);

		               $(".time").removeClass('btn-primary').addClass('btn-danger').removeClass('disabled');
		               $(".ic").addAttr('hidden').removeClass('fa-spin');
		               $(".time").text('Time Out');
		            

		             });      
		        }
		        else{
		           
		            $.post('/timeOut/' + id,

		             {'id':id, 'testID':testID,'_token':token}, 
		             function(data){
		                $(".time").removeClass('btn-danger').addClass('btn-primary').removeClass('disabled');
		                $(".ic").addAttr('hidden').removeClass('fa-spin');
		                $(".time").text('Time In');
		            

		             });      
		        }

		        
		    });


		});
	</script>
</body>
</html>