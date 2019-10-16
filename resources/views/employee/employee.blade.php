<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Employee Dashboard | 247 HRIS</title>

	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/4c6c819f60.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.material.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.bootstrap4.min.css">
   <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.bootstrap4.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.colVis.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>

    <!-- Override CSS -->
    <link rel="stylesheet" type="text/css" href="/css/style2.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">

    <!-- FullCalendar -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css"/>
    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.js"></script>

    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">

    <!-- Pace JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/black/pace-theme-minimal.css">

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar2">
            <div class="sidebar-header">
            	<center><img class="company_logo" src="/img/icon2.png"></center>
                <h5 style="text-align: center;">24/7 Virtual Agent Philippines Inc.</h5>
            </div>

            <ul class="list-unstyled components">
                <p>Navigation</p>
                <li class="{{ (request()->segment(1) == 'employee') ? 'active' : '' }}">
                    <a href="/employee"><i class="fa fa-inbox" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Dashboard</a>
                </li>
                <li class="submenu_employee_attendance">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i style="color: #fff;" class="fa fa-calendar" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Attendance<i style="float: right; margin-top: 5px; margin-right: 5px;" class="fa fa-caret-down" aria-hidden="true"></i></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li class="link_in_out {{ (request()->segment(1) == 'punch_in_out') ? 'active' : '' }}">
                            <a href="/punch_in_out"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; Time In/Out</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (request()->segment(1) == 'employee_memo') ? 'active' : '' }}">
                    <a href="/employee_memo"><i style="color: #fff;" class="fa fa-file-text-o" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Memo</a>
                </li>
                <li class="{{ (request()->segment(1) == 'employee_leave') ? 'active' : '' }}">
                    <a href="/employee_leave"><i style="color: #fff;" class="fa fa-outdent" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Leave</a>
                </li>
                <li class="{{ (request()->segment(1) == 'employee_overtime') ? 'active' : '' }}">
                    <a href="/employee_overtime"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; Overtime</a>
                </li>
            </ul>

            <!-- <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul> -->
        </nav>

        <!-- Page Content  -->
        <div id="content">

        	<nav class="navbar navbar-expand-lg navbar-light">
				<button class="btn_toggle" id="sidebarCollapse" style="border: none; background-color: transparent; height: 40px; width: 30px; margin-right: 2px;"><i style="font-size: 20px;" class="fa fa-bars" aria-hidden="true"></i></button>

			  	<a class="navbar-brand mr-auto" href="/employee" >Employee Dashboard</a>

			  	<ul class="nav navbar-nav">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <li class="nav-item dropdown" style="position: absolute; margin-top: -6px; ">
                      			<a href="#" class="notification-trigger">
                    				  <i style="font-size: 25px; margin-left: -35px;" class="fa fa-bell-o" aria-hidden="true"></i>
                    				  @if(auth()->user()->unreadNotifications->count())
                    				  <span class="badge infinite animated heartBeat" id="bell_badge">{{auth()->user()->unreadNotifications->count()}}</span>
                    				  @endif
                    			</a>
                            </li>
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <li class="nav-item dropdown">
                                <a style="color: #000;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     <img style="height: 35px; width: 35px; border-radius: 100%;" src="{{ Auth::user()->employee()->first()->employee_img }}">&nbsp;&nbsp;{{ Auth::user()->employee()->first()->firstname }} <i style="font-size: 10px;" class="fa fa-chevron-down" aria-hidden="true"></i>
                                </a>

                                <div style="position: absolute;" class="dropdown-menu dropdown-menu-right animated bounceIn" aria-labelledby="navbarDropdown">
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
                        </div>
                    </div>
			    </ul>
			</nav>

			<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
				<button class="btn_toggle" id="sidebarCollapse" style="border: none; background-color: transparent; height: 40px; width: 40px; margin-right: 30px;"><i style="font-size: 20px;" class="fa fa-bars" aria-hidden="true"></i></button>

			  	<a class="navbar-brand" href="/employee" >Employee Dashboard</a>

			  	<ul class="nav navbar-nav ml-auto">
			  		<li class="nav-item">
			  			<a href="#" class="notification-trigger">
							  <span><i style="font-size: 20px;" class="fa fa-bell-o" aria-hidden="true"></i></span>
							  @if(auth()->user()->unreadNotifications->count())
							  <span class="badge" id="bell_badge">{{auth()->user()->unreadNotifications->count()}}</span>
							  @endif
						</a>
			  		</li>
			      	<li class="nav-item dropdown" style="padding-top: 10px;">
                        <a style="color: #000;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                             <span><img style="height: 35px; width: 35px; border-radius: 100%;" src="{{ Auth::user()->employee()->first()->employee_img }}"> &nbsp;&nbsp;&nbsp;{{ Auth::user()->employee()->first()->firstname }} <i style="font-size: 10px;" class="fa fa-chevron-down" aria-hidden="true"></i></span>
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
			</nav> -->
			<div class="panel animated bounceIn">
			    <div class="title">Notifications</div>
			     <ul class="notification-bar" id="not" data-simplebar>
			      	<input id="hdn-token" class="hdn-token" type="hidden" name="_token" value="{{ csrf_token() }}">
			      	@foreach(auth()->user()->unreadNotifications as $notification)
				      	@if($notification->type == "App\Notifications\SendMemo")
				          <li class="unread" id="unread" test="teest">
				              <a style="cursor: pointer;" data-toggle="modal" data-target="#view_memo_notif" class="memo_notif_id" id="{{ $notification->id }}" notif_id="{{ $notification->id }}" notif_title="{{ $notification->data['title'] }}" notif_from="{{ $notification->data['from'] }}" notif_data="{{ $notification->data['date'] }}" notif_subject="{{ $notification->data['subject'] }}" notif_file="{{ $notification->data['file'] }}">
				              	<i class="ion-checkmark"></i>
				              	<div>
				              	
				              		<h6 style="font-size: 13px;"><strong>{{$notification->data['title']}}</strong></h6>
				              		<p style="margin-top: -18px; font-size: 10px;">From: {{$notification->data['from']}} {{$notification->data['date']}}</p>
				              		
				              		<p class="memo_subj" style="margin-top: -12px; font-size: 10px;">{{$notification->data['subject']}}</p>
				              	</div>
				              </a>
				          </li>

				          @elseif($notification->type == "App\Notifications\RequestLeave")
				          <li class="unread" id="unread" test="teest">
				              <a style="cursor: pointer;" id="{{ $notification->id }}" >
				              	<i class="ion-checkmark"></i>
				              	<div>
			              			<h6 style="font-size: 13px;">Leave Request</h6>
			              			<p style="margin-top: 15px; font-size: 10px;">Your leave request {{$notification->data['leave_type']}} has been {{$notification->data['status']}} by {{ $notification->data['from'] }}</p>
				              		<p style="margin-top: -18px; font-size: 10px;">From: {{$notification->data['date_from']}} To: {{$notification->data['date_to']}}</p>
				              		<!-- <h6><strong>{{$notification->data['date_from']}}</strong></h6>
				              		<p style="margin-top: -18px; font-size: 13px;">{{$notification->data['date_to']}}</p>
				              		<p class="memo_subj" style="margin-top: -12px; font-size: 13px;">{{$notification->data['status']}}</p>
				              		<p class="memo_subj" style="margin-top: -12px; font-size: 13px;">{{$notification->data['leave_id']}}</p> -->
				              	</div>
				              </a>
				          </li>

				          @elseif($notification->type == "App\Notifications\AssignSchedule")
					          <li class="unread" id="unread" test="teest">
					             <a style="cursor: pointer;" id="{{ $notification->id }}" >
					              	<i class="ion-checkmark"></i>
					              	<div>
					              		<h6 style="font-size: 13px;">Schedule</h6>
				              			<p style="margin-top: 15px; font-size: 10px;">Your Schedule</p>
					              		<p style="margin-top: -18px; font-size: 10px;">From: {{$notification->data['date_from']}} To: {{$notification->data['date_to']}}</p>
					              		
					              	</div>
					              </a>
					          </li>
				          @endif
			          @endforeach

			          @foreach(auth()->user()->readNotifications as $notification)
			          	  @if($notification->type == "App\Notifications\SendMemo")
					          <li>
					              <a style="cursor: pointer;" data-toggle="modal" data-target="#view_memo_notif" class="memo_notif_id" id="{{ $notification->id }}" notif_id="{{ $notification->id }}" notif_title="{{ $notification->data['title'] }}" notif_from="{{ $notification->data['from'] }}" notif_data="{{ $notification->data['date'] }}" notif_subject="{{ $notification->data['subject'] }}" notif_file="{{ $notification->data['file'] }}">
					              	<i class="ion-checkmark"></i>
					              	<div>
					              	
					              		<h6 style="font-size: 13px;"><strong>{{$notification->data['title']}}</strong></h6>
					              		<p style="margin-top: -18px; font-size: 10px;">From: {{$notification->data['from']}} {{$notification->data['date']}}</p>
					              		
					              		<p class="memo_subj" style="margin-top: -12px; font-size: 10px;">{{$notification->data['subject']}}</p>
					              	</div>
					              </a>
					          </li>

				          @elseif($notification->type == "App\Notifications\RequestLeave")
					          <li>
					              <a style="cursor: pointer;" >
					              	<i class="ion-checkmark"></i>
					              	<div>
					              		<h6 style="font-size: 13px;">Leave Request</h6>
				              			<p style="margin-top: 15px; font-size: 10px;">Your leave request {{$notification->data['leave_type']}} has been {{$notification->data['status']}}</p>
					              		<p style="margin-top: -18px; font-size: 10px;">From: {{$notification->data['date_from']}} To: {{$notification->data['date_to']}}</p>
					              		<!-- <h6><strong>{{$notification->data['date_from']}}</strong></h6>
					              		<p style="margin-top: -18px; font-size: 13px;">{{$notification->data['date_to']}}</p>
					              		<p class="memo_subj" style="margin-top: -12px; font-size: 13px;">{{$notification->data['status']}}</p>
					              		<p class="memo_subj" style="margin-top: -12px; font-size: 13px;">{{$notification->data['leave_id']}}</p> -->
					              	</div>
					              </a>
					          </li>

					      @elseif($notification->type == "App\Notifications\AssignSchedule")
					          <li>
					              <a style="cursor: pointer;" >
					              	<i class="ion-checkmark"></i>
					              	<div>
					              		<h6 style="font-size: 13px; margin-top:10px">Schedule</h6>
				              			<p style="margin-top: 15px; font-size: 10px;">Your Schedule</p>
					              		<p style="margin-top: -18px; font-size: 10px;">From: {{$notification->data['date_from']}} To: {{$notification->data['date_to']}}</p>
					              	</div>
					              </a>
					          </li>

				          @endif
			          @endforeach

			      </ul>
			      <div class="notif_footer">
			      	<a href="{{ route('employee.memo.markAll') }}">Mark All as Read</a>
			      </div>
			    </div>
			    <div class="modal fade view_memo_notif" id="view_memo_notif" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			      <div class="modal-dialog modal-lg">
			        <div class="modal-content">
			          <div class="modal-header">
			              <!-- <h5 class="modal-title" id="exampleModalLabel">Add A Memo</h5> -->
			              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			           </div>
			           <div class="modal-body" style="padding: 30px 30px 30px 30px;">
			           		<div class="row">
			           			<div class="col-lg-12">
			           				<input type="hidden" name="vmodal_memoid" id="vmodal_memoid">
			           				<h3 style="margin: 0; margin-bottom: 30px;" id="vmodal_memo"></h3>
			           				<h6 style="margin: 0; margin-bottom: 10px;" id="vmodal_subject"></h6>
			           				<p id="vmodal_memodate"></p>
			           			</div>
			           		</div>
			           		<div class="row">
			           			<div class="col-lg-12">
			           				<div class="attach">
			           					<div class="row">
			           						<div class="col-lg-1" style="text-align: center;">
			           							<i class="fa fa-file-text-o" aria-hidden="true" style="font-size: 50px; color: #282828;"></i>
			           						</div>
			           						<div class="col-lg-11">
			           							<h6 id="vmodal_filename" style="margin: 0; margin-bottom: 10px; font-weight: bold;"></h6>
			           							<a class="memo_download" href="" download=""><i class="fa fa-download" aria-hidden="true"></i>&nbsp; Download</a>
			           						</div>
			           					</div>
			           				</div>
			           			</div>
			           		</div>	
			           </div>
			        </div>
			      </div>
			    </div>
			@yield('employee_content')
        </div>
    </div>

   <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.0.1/interaction/main.js" integrity="sha256-8M6FzVt1+EcYNYqAJqg0kameW+aOR5l7xAfksE2J+hI=" crossorigin="anonymous"></script>

   <script type="text/javascript">
		$(document).ready(function() {

			var pathname = window.location.pathname;

            if (pathname == "/punch_in_out") {
                $('#sidebar2').find('.link_in_out').closest('.submenu_employee_attendance').children('.dropdown-toggle').trigger('click');
            }

			 $("#sidebar2").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar2, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

			$('.btn_leave').click(function(e){
				const Toast = Swal.mixin({
				  toast: true,
				  position: 'top-end',
				  showConfirmButton: false,
				  timer: 3000
				})

				Toast.fire({
				  type: 'success',
				  title: 'Leave request has been sent'
				})
			});




			$('.btn_view_leave').on('click', function(){

			   var token = $('#hdn-token').val();
			   var id = $(this).attr('id');
			   var type = $(this).attr('leave_type');
			   

			   data = { 
			               _token: token,
			               id : id,
			               type : type
			              
			           };

			   $.ajax({
			           url: '/employee_leave/' + id,
			           type: "GET",
			           data: data,
			           success: function( response ) {

			               $('#v_leave_date').html('Date: ' + response.leave.date);
			               $('#v_leave_type').html('Leave Type: ' + response.leave_type.leave_type);
			               $('#v_leave_datefrom').html('From: ' + response.leave.date_from);
			               $('#v_leave_dateto').html('To: ' + response.leave.date_to);
			               $('#v_leave_reason').html('Reason: ' + response.leave.reason);
			             
			           }
			       });
			   

			    });    	



			$('.btn_edit_leave').on('click', function(){

			   var token = $('#hdn-token').val();
			   var id = $(this).attr('id');

			  

			   data = { 
			               _token: token,
			               id : id,
			               
			           };

			   $.ajax({
			           url: '/employee_leave/edit/' + id,
			           type: "GET",
			           data: data,
			           success: function( response ) {

			               $('#eleave_date').val(response.leave.date);
			               $('#eleave_type').val(response.leave.leave_id);
			               $('#eleave_datefrom').val(response.leave.date_from);
			               $('#eleave_dateto').val(response.leave.date_to);
			               $('#eleave_reason').val(response.leave.reason);
			               $('#hdn-id').val(response.leave.id);
			             
			           }
			       });
			   

			    });   


			$('.btn_update_leave').on('click', function(){

			   var token = $('#hdn-token').val();
			   var id = $('#hdn-id').val();
			   var date = $('#eleave_date').val();
			   var leave_type = $('#eleave_type').val();
			   var leave_from = $('#eleave_datefrom').val();
			   var leave_to = $('#eleave_dateto').val();
			   var leave_reason = $('#eleave_reason').val();

			   

			    data = { 
			               _token: token,
			               id : id,
			               date : date,
			               leave_type : leave_type,
			               leave_from : leave_from,
			               leave_to : leave_to,
			               leave_reason : leave_reason,
			           };


			   $.ajax({
			           url: '/employee_leave/update/' + id,
			           type: "POST",
			           data: data,
			           success: function( response ) {
			              
                        location.reload();
			              
			             
			           }
			       });


			});

            $('.btn_cancel_leave').on('click', function(){
                var id = $(this).attr('id');
                var token = $('#hdn-token').val();

               $.post('/employee_leave/cancel/' + id,

                {'id':id, '_token':token}, 
                function(data){

                location.reload();
                  
                });      
            });


			$('.btn_view_request_ot').on('click', function(){

			   var token = $('#hdn-token').val();
			   var id = $(this).attr('id');

			  

			   data = { 
			               _token: token,
			               id : id,
			               
			           };

			   $.ajax({
			           url: '/employee_overtime/' + id,
			           type: "GET",
			           data: data,
			           success: function( response ) {
			           	console.log(response);
			               $('#v_overtime_date').html(response.overtime.date);
			               $('#v_overtime_tfrom').html(response.overtime.time_from);
			               $('#v_overtime_tto').html(response.overtime.time_to);
			               $('#v_overtime_duration').html(response.overtime.duration);
			               $('#v_overtime_reason').html(response.overtime.reason);
			               $('#hdn-id').val(response.overtime.otime_id);
			             
			           }
			       });
			   

			    });    	



			$('.btn_edit_request_ot').on('click', function(){

			   var token = $('#hdn-token').val();
			   var id = $(this).attr('id');

			  

			   data = { 
			               _token: token,
			               id : id,
			               
			           };

			   $.ajax({
			           url: '/employee_overtime/edit/' + id,
			           type: "GET",
			           data: data,
			           success: function( response ) {
			           	console.log(response);
			               $('#eovertime_date').val(response.overtime.date);
			               $('#etime_from').val(response.overtime.time_from);
			               $('#etime_to').val(response.overtime.time_to);
			               $('#eduration').val(response.overtime.duration);
			               $('#eovertime_reason').val(response.overtime.reason);
			               $('#hdn-id').val(response.overtime.otime_id);
			             
			           }
			       });
			   

			    });   


			$('.btn_update_request_ot').on('click', function(){

			   var token = $('#hdn-token').val();
			   var id = $('#hdn-id').val();
			   var date = $('#eovertime_date').val();
			   var time_from = $('#etime_from').val();
			   var time_to = $('#etime_to').val();
			   var duration = $('#eduration').val();
			   var ot_reason = $('#eovertime_reason').val();
			 
			   

			    data = { 
			               _token: token,
			               id : id,
			               date : date,
			               time_from : time_from,
			               time_to : time_to,
			               duration : duration,
			               ot_reason : ot_reason,
			           };

			   $.ajax({
			           url: '/employee_overtime/update/' + id,
			           type: "POST",
			           data: data,
			           success: function( response ) {
			              
                        location.reload();
			             
			             
			           }
			       });


			});

            $('.btn_cancel_request_ot').on('click', function(){
                var id = $(this).attr('id');
                var token = $('#hdn-token').val();

                $.post('/employee_overtime/cancel/' + id,

                 {'id':id, '_token':token}, 
                 function(data){

                 location.reload();
                   
                 });      
            });

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

		            location.reload();
		              
		              $(".ic").attr('hidden');
		              $(".ic").removeClass('fa-spin');
		              $(".time").text('Time Out');
		              $(".time").removeClass('btn-primary').addClass('btn-danger').removeClass('disabled');
		           

		            });      
		       }
		       else{
		          
		           $.post('/timeOut/' + id,

		            {'id':id, 'testID':testID,'_token':token}, 
		            function(data){
		            	location.reload();
		               $
		               $(".ic").attr('hidden');
		               $(".ic").removeClass('fa-spin');
		               $(".time").text('Time In');
		               (".time").removeClass('btn-danger').addClass('btn-primary').removeClass('disabled');
		          

		            });      
		       }

		       
		   });

		   $('#addDataTable').DataTable({
		   	"scrollX": true,
            dom:
                      "<'row'<'col-sm-6 col-md-6'l><'col-sm-6 col-md-6'f>>" +
                      "<'row'<'col-sm-12'tr>>" +
                      "<'row'<'col-sm-12 col-md-6'i><'col-sm-12 col-md-6'p>>",
	      	columnDefs: [
	      	           {
	      	               targets: [ 0, 1, 2 ],
	      	               className: 'mdl-data-table__cell--non-numeric'
	      	           }
	      	       ]
	      });

		    $('.memo_notif_id').on('click',  function(event){

		    	var view_vm_id = $(this).attr('notif_id'); 
			  	var view_vm_title = $(this).attr('notif_title'); 
			  	var view_vm_subject = $(this).attr('notif_subject'); 
			  	var view_vm_attachment = $(this).attr('notif_file'); 
			  	var view_vm_date = $(this).attr('notif_date'); 

			  	console.log(view_vm_attachment);

			  	$('#vmodal_memoid').val(view_vm_id);
			  	$('#vmodal_memo').html(view_vm_title);
			  	$('#vmodal_subject').html(view_vm_subject);
			  	$('#vmodal_filename').html(view_vm_attachment);
			  	$('#vmodal_memodate').html(view_vm_date);
			  	$('.memo_download').attr('href', 'documents/' + view_vm_attachment);
			  	$('.memo_download').attr('download', view_vm_attachment); 

		    });

		     $('.memo_view').on('click',  function(event){

		    	var view_memo_id = $(this).attr('memo_id'); 
			  	var view_memo_title = $(this).attr('memo_title'); 
			  	var view_memo_subject = $(this).attr('memo_subj'); 
			  	var view_memo_attachment = $(this).attr('memo_file'); 
			  	var view_memo_date = $(this).attr('memo_date'); 

			  	console.log(view_memo_id);

			  	$('#v_vmodal_memoid').val(view_memo_id);
			  	$('#v_vmodal_memo').html(view_memo_title);
			  	$('#v_vmodal_subject').html(view_memo_subject);
			  	$('#v_modal_filename').html(view_memo_attachment);
			  	$('#v_modal_memodate').html(view_memo_date);
			  	$('.v_memo_download').attr('href', 'documents/' + view_memo_attachment);
			  	$('.v_memo_download').attr('download', view_memo_attachment); 
			  	
		    });

		});
	</script>
	<script type="text/javascript">
		$('document').ready(function(){
			$('#jjob_title').change(function(){
				var res = $('#jjob_title').val();

				alert('res');
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('.notification-trigger').click(function() {
		        $('.panel').toggleClass('visible');
		    });

		    $('.unread a').click(function(){
		    	var notif_id = $(this).attr('id');
		    	var token = $(".hdn-token").val();
		    	var count = $(".badge").text();
		    	$(this).parent().removeClass('unread').addClass('read');

		    	$.get('/markRead/',

		    	 {'notif_id':notif_id, '_token':token}, 
		    	 function(data){

		    	 	count--;
		    	 	if(count > 0){
		    	 		$(".badge").text(count);
		    	 		
		    	 	}

		    	 	else{
		    	 		$('#bell_badge').hide();
		    	 	
		    	 	}

		    	

		    	 });       
		    });
		})
	</script>
</body>

</html>