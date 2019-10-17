<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Dashboard | 247 HRIS</title>

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
                <li class="{{ (request()->segment(1) == 'admin') ? 'active' : '' }}">
                    <a href="/admin"><i class="fa fa-inbox" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Dashboard</a>
                </li>
                <li class="submenu_employee">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i style="color: #fff;" class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Employee<i style="float: right; margin-top: 5px; margin-right: 5px;" class="fa fa-caret-down" aria-hidden="true"></i></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li class="link_add_employee {{ (request()->segment(1) == 'add_employee') ? 'active' : '' }}">
                            <a href="/add_employee"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; Add Employee</a>
                        </li>
                        <li class="{{ (request()->segment(1) == 'manage_employee') ? 'active' : '' }}">
                            <a href="/manage_employee"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; Manage Employees</a>
                        </li>
                        <li class="{{ (request()->segment(1) == 'leave') ? 'active' : '' }}">
                            <a href="/leave"><i class="fa fa-outdent" aria-hidden="true"></i>&nbsp; Employee Leaves</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu_attendance">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i style="color: #fff;" class="fa fa-calendar" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Attendance<i style="float: right; margin-top: 5px; margin-right: 5px;" class="fa fa-caret-down" aria-hidden="true"></i></a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li class="link_attendance {{ (request()->segment(1) == 'attendance') ? 'active' : '' }}">
                            <a href="/attendance"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; Attendance</a>
                        </li>
                        <li class="{{ (request()->segment(1) == 'timesheet') ? 'active' : '' }}">
                            <a href="/timesheet"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; Timesheets</a>
                        </li>
                        <li class="{{ (request()->segment(1) == 'overtime') ? 'active' : '' }}">
                            <a href="/overtime"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; Overtime</a>
                        </li>
                        <li class="{{ (request()->segment(1) == 'schedule') ? 'active' : '' }}">
                            <a href="/schedule"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; Schedule</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (request()->segment(1) == 'memo') ? 'active' : '' }}">
                    <a href="/memo"><i style="color: #fff;" class="fa fa-file-text-o" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Memo</a>
                </li>
                <li class="{{ (request()->segment(1) == 'payroll') ? 'active' : '' }}">
                    <a href="/payroll"><i style="color: #fff;" class="fa fa-usd" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Payroll</a>
                </li>
                <p>Configurations</p>
                <li class="submenu_accounts">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i style="color: #fff;" class="fa fa-users" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>User Accounts<i style="float: right; margin-top: 5px; margin-right: 5px;" class="fa fa-caret-down" aria-hidden="true"></i></a>
                    <ul class="collapse list-unstyled" id="pageSubmenu2">
                        <li class="link_accounts {{ (request()->segment(1) == 'manage_user') ? 'active' : '' }}">
                            <a href="/manage_user"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; Manage Users</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu_add">
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i style="color: #fff;" class="fa fa-plus" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Add<i style="float: right; margin-top: 5px; margin-right: 5px;" class="fa fa-caret-down" aria-hidden="true"></i></a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li class="link_add_job {{ (request()->segment(1) == 'job_title') ? 'active' : '' }}">
                            <a href="/job_title"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Job</a>
                        </li>
                        <li class="{{ (request()->segment(1) == 'department') ? 'active' : '' }}">
                            <a href="/department"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Department</a>
                        </li>
                        <li class="{{ (request()->segment(1) == 'job_status') ? 'active' : '' }}">
                            <a href="/job_status"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Job Status</a>
                        </li>
                        <li class="{{ (request()->segment(1) == 'job_level') ? 'active' : '' }}">
                            <a href="/job_level"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Job Level</a>
                        </li>
                        <li class="{{ (request()->segment(1) == 'job_position') ? 'active' : '' }}">
                            <a href="/job_position"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Job Position</a>
                        </li>
                        <li class="{{ (request()->segment(1) == 'leave_types') ? 'active' : '' }}">
                            <a href="/leave_types"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Leave Types</a>
                        </li>
                        <li class="{{ (request()->segment(1) == 'holidays') ? 'active' : '' }}">
                            <a href="/holidays"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Holidays</a>
                        </li>
                        <li class="{{ (request()->segment(1) == 'shift') ? 'active' : '' }}">
                            <a href="/shift"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Add Shifts</a>
                        </li>
                    </ul>
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
                <button class="btn_toggle" id="sidebarCollapse" style="border: none; background-color: transparent; height: 40px; width: 40px; margin-right: 30px;"><i style="font-size: 20px;" class="fa fa-bars" aria-hidden="true"></i></button>

                <a class="navbar-brand mr-auto" href="/admin" >Admin Dashboard</a>

                <ul class="nav navbar-nav">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <li class="nav-item dropdown" style="position: absolute; margin-left: -50px; margin-top: -6px;">
                                <a href="#" class="notification-trigger">
                                      <i style="font-size: 25px;" class="fa fa-bell-o" aria-hidden="true"></i>
                                      @if(auth()->user()->unreadNotifications->count())
                                      <span class="badge infinite animated heartBeat" id="bell_badge">{{auth()->user()->unreadNotifications->count()}}</span>
                                      @endif
                                </a>
                            </li>
                            <li class="nav-item dropdown" style="padding-top: 8px; margin-top:-5px">
                                <a style="color: #000;" id="navbarDropdown2" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     <span><i style="font-size: 25px;" class="fa fa-cogs" aria-hidden="true"></i></span>
                                         Quick Access
                                          <span class="badge" id="bell_badge"></span>
                                        
                                </a>

                                <div class="dropdown-menu dropdown-menu-right quick_access animated bounceIn" aria-labelledby="navbarDropdown2" style="position: absolute;">
                                    <a href="/add_employee" style="cursor: pointer; color: #000;">
                                        <div class="row quick_wrapper">
                                            <i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Employee</i>
                                        </div>
                                    </a>
                                    <a data-toggle="modal" data-target="#add_schedule" style="cursor: pointer;">
                                        <div class="row quick_wrapper">
                                            <i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Schedule</i>
                                        </div>
                                    </a>
                                    <a data-toggle="modal" data-target="#add_memo" style="cursor: pointer;">
                                        <div class="row quick_wrapper">
                                            <i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Memo</i>
                                        </div>
                                    </a>
                                    <a data-toggle="modal" data-target="#add_job" style="cursor: pointer;">
                                        <div class="row quick_wrapper">
                                            <i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Job</i>
                                        </div>
                                    </a>
                                    <a data-toggle="modal" data-target="#add_job_status" style="cursor: pointer;">
                                        <div class="row quick_wrapper">
                                            <i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Status</i>
                                        </div>
                                    </a>
                                    <a data-toggle="modal" data-target="#add_department" style="cursor: pointer;">
                                        <div class="row quick_wrapper">
                                            <i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Department</i>
                                        </div>
                                    </a>
                                    <a data-toggle="modal" data-target="#Add_Job_level" style="cursor: pointer;">
                                        <div class="row quick_wrapper">
                                            <i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Level</i>
                                        </div>
                                    </a>
                                    <a data-toggle="modal" data-target="#add_position" style="cursor: pointer;">
                                        <div class="row quick_wrapper">
                                            <i class="fa fa-plus-circle" aria-hidden="true">&nbsp; Add Position</i>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <li class="nav-item dropdown"  style="padding-top: 7px;">
                                <a style="color: #000;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <i style="font-size: 15px;" class="fa fa-chevron-down" aria-hidden="true"></i>
                                </a>

                                <div style="position:absolute;" class="dropdown-menu dropdown-menu-right animated bounceIn" aria-labelledby="navbarDropdown">
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
            <div class="panel animated bounceIn">
                <div class="title">Notifications</div>
                <ul class="notification-bar" id="not">
                    <input id="hdn-token" class="hdn-token" type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                    @foreach(auth()->user()->unreadNotifications as $notification)

                          @if($notification->type == "App\Notifications\RequestLeaveAdmin")
                          <li class="unread" id="unread" test="teest">
                              <a style="cursor: pointer;" id="{{ $notification->id }}" >
                                <i class="ion-checkmark"></i>
                                <div>
                                    <h6 style="font-size: 13px;">Leave Request</h6>
                                    @if($notification->data['status'] != 'Cancelled')
                                        <p style="margin-top: 15px; font-size: 10px;">{{$notification->data['from']}} is requesting a {{$notification->data['leave_type']}}</p>
                                    @else
                                        <p style="margin-top: 15px; font-size: 10px;">{{$notification->data['from']}} cancelled {{$notification->data['leave_type']}} Request</p>
                                    @endif
                                    <p style="margin-top: -18px; font-size: 10px;">From: {{$notification->data['date_from']}} To: {{$notification->data['date_to']}}</p>
                                   
                                </div>
                              </a>
                          </li>


                          @elseif($notification->type == "App\Notifications\RequestOvertimeAdmin")
                              <li class="unread" id="unread" test="teest">
                                 <a style="cursor: pointer;" id="{{ $notification->id }}" >
                                    <i class="ion-checkmark"></i>
                                    <div>
                                        <h6 style="font-size: 13px;">Overtime Request</h6>
                                        @if($notification->data['status'] != 'Cancelled')
                                            <p style="margin-top: 15px; font-size: 10px;">{{$notification->data['from']}} is requesting an Overtime on {{ $notification->data['date'] }}</p>
                                        @else
                                            <p style="margin-top: 15px; font-size: 10px;">{{$notification->data['from']}} cancelled an Overtime Request on {{$notification->data['date']}}</p>
                                        @endif
                                        <p style="margin-top: -18px; font-size: 10px;">From: {{$notification->data['time_from']}} To: {{$notification->data['time_to']}}</p>
                                        
                                    </div>
                                  </a>
                              </li>
                          @endif
                      @endforeach

                      @foreach(auth()->user()->readNotifications as $notification)


                          @if($notification->type == "App\Notifications\RequestLeaveAdmin")
                              <li>
                                  <a style="cursor: pointer;" >
                                    <i class="ion-checkmark"></i>
                                    <div>
                                        <h6 style="font-size: 13px;">Leave Request</h6>
                                        @if($notification->data['status'] != 'Cancelled')
                                            <p style="margin-top: 15px; font-size: 10px;">{{$notification->data['from']}} is requesting a {{$notification->data['leave_type']}}</p>
                                        @else
                                            <p style="margin-top: 15px; font-size: 10px;">{{$notification->data['from']}} cancelled {{$notification->data['leave_type']}} Request</p>
                                        @endif
                                        <p style="margin-top: -18px; font-size: 10px;">From: {{$notification->data['date_from']}} To: {{$notification->data['date_to']}}</p>
                                   
                                    </div>
                                  </a>
                              </li>

                          @elseif($notification->type == "App\Notifications\RequestOvertimeAdmin")
                              <li>
                                  <a style="cursor: pointer;" >
                                    <i class="ion-checkmark"></i>
                                    <div>
                                        <h6 style="font-size: 13px; margin-top:10px">Overtime Request</h6>
                                        @if($notification->data['status'] != 'Cancelled')
                                            <p style="margin-top: 15px; font-size: 10px;">{{$notification->data['from']}} is requesting an Overtime on {{ $notification->data['date'] }}</p>
                                        @else
                                            <p style="margin-top: 15px; font-size: 10px;">{{$notification->data['from']}} cancelled an Overtime Request on {{$notification->data['date']}}</p>
                                        @endif
                                        <p style="margin-top: -18px; font-size: 10px;">From: {{$notification->data['time_from']}} To: {{$notification->data['time_to']}}</p>
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
            @yield('content')
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

        $( document ).ready(function() {

            var pathname = window.location.pathname;

            if (pathname == "/add_employee") {
                $('#sidebar2').find('.link_add_employee').closest('.submenu_employee').children('.dropdown-toggle').trigger('click');
            }
            if (pathname == "/manage_employee") {
                $('#sidebar2').find('.link_add_employee').closest('.submenu_employee').children('.dropdown-toggle').trigger('click');
            }
            if (pathname == "/leave") {
                $('#sidebar2').find('.link_add_employee').closest('.submenu_employee').children('.dropdown-toggle').trigger('click');
            }

            if (pathname == "/attendance") {
                $('#sidebar2').find('.link_attendance').closest('.submenu_attendance').children('.dropdown-toggle').trigger('click');
            }
            if (pathname == "/timesheet") {
                $('#sidebar2').find('.link_attendance').closest('.submenu_attendance').children('.dropdown-toggle').trigger('click');
            }
            if (pathname == "/overtime") {
                $('#sidebar2').find('.link_attendance').closest('.submenu_attendance').children('.dropdown-toggle').trigger('click');
            }
            if (pathname == "/schedule") {
                $('#sidebar2').find('.link_attendance').closest('.submenu_attendance').children('.dropdown-toggle').trigger('click');
            }

            if (pathname == "/job_title") {
                $('#sidebar2').find('.link_add_job').closest('.submenu_add').children('.dropdown-toggle').trigger('click');
            }
            if (pathname == "/department") {
                $('#sidebar2').find('.link_add_job').closest('.submenu_add').children('.dropdown-toggle').trigger('click');
            }
            if (pathname == "/job_status") {
                $('#sidebar2').find('.link_add_job').closest('.submenu_add').children('.dropdown-toggle').trigger('click');
            }
            if (pathname == "/job_level") {
                $('#sidebar2').find('.link_add_job').closest('.submenu_add').children('.dropdown-toggle').trigger('click');
            }
            if (pathname == "/job_position") {
                $('#sidebar2').find('.link_add_job').closest('.submenu_add').children('.dropdown-toggle').trigger('click');
            }
            if (pathname == "/leave_types") {
                $('#sidebar2').find('.link_add_job').closest('.submenu_add').children('.dropdown-toggle').trigger('click');
            }
            if (pathname == "/holidays") {
                $('#sidebar2').find('.link_add_job').closest('.submenu_add').children('.dropdown-toggle').trigger('click');
            }
            if (pathname == "/shift") {
                $('#sidebar2').find('.link_add_job').closest('.submenu_add').children('.dropdown-toggle').trigger('click');
            }

            if (pathname == "/manage_user") {
                $('#sidebar2').find('.link_accounts').closest('.submenu_accounts').children('.dropdown-toggle').trigger('click');
            }

            $("#sidebar2").mCustomScrollbar({
                theme: "minimal"
            });

            $("#notification-bar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar2, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

            $('.btn_create').click(function(e){
                const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
                })

                Toast.fire({
                  type: 'success',
                  title: 'Employee created successfull'
                })
            });

            $('.btn_absent').click(function(e){
                const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
                })

                Toast.fire({
                  type: 'success',
                  title: 'Employee marked as absent'
                })
            });

            $('.btn_sent').click(function(e){
                const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
                })

                Toast.fire({
                  type: 'success',
                  title: 'Memo sent'
                })
            });

            $('.btn_edit').click(function(e){
                const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
                })

                Toast.fire({
                  type: 'success',
                  title: 'Data edit was successfull'
                })
            });

            $('.btn_delete').click(function(e){
                const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
                })

                Toast.fire({
                  type: 'success',
                  title: 'Deletion on data was successfull'
                })
            });

            $('.btn_save').click(function(e){
                const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
                })

                Toast.fire({
                  type: 'success',
                  title: 'Data saved successfully'
                })
            });

            $('.btn_payroll').click(function(e){
                const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
                })

                Toast.fire({
                  type: 'success',
                  title: 'Payroll Generated'
                })
            });

            $('.edit-dept').on('click', function(event){
                var dept_name = $(this).attr('dep_name');
                var dept_desc = $(this).attr('dep_desc')
                var id = $(this).attr('id');

                $('.mj_title').val(dept_name);
                $('.mj_desc').val(dept_desc);
                $('.mj_id').val(id);
            });

            $('.edit-job').on('click', function(event){
                var job_name = $(this).attr('job_name');
                var job_desc = $(this).attr('job_desc')
                var job_id = $(this).attr('job_id');

                console.log(job_name);
                $('#mjob_title').val(job_name);
                $('#mjob_desc').val(job_desc);
                $('.mjob_id').val(job_id);
            });

             $('.edit-status').on('click', function(event){
                var status_name = $(this).attr('status_name');
                var status_desc = $(this).attr('status_desc')
                var status_id = $(this).attr('status_id');
                console.log(status_name);

                $('#mstatus_title').val(status_name);
                $('#mstatus_desc').val(status_desc);
                $('.mstatus_id').val(status_id);
            });

             $('.edit-level').on('click', function(event){
                var level_name = $(this).attr('level_name');
                var level_desc = $(this).attr('level_desc')
                var level_id = $(this).attr('level_id');
                console.log(level_name);
                
                $('#mlevel_title').val(level_name);
                $('#mlevel_desc').val(level_desc);
                $('.mlevel_id').val(level_id);
            });

             $('.edit-position').on('click', function(event){
                var position_name = $(this).attr('position_name');
                var position_desc = $(this).attr('position_desc')
                var position_id = $(this).attr('position_id');
                console.log(position_name);
                
                $('#mp_title').val(position_name);
                $('#mp_desc').val(position_desc);
                $('.mp_id').val(position_id);
            });

              $('#DataTable').DataTable({
                columnDefs: [
                           {
                               targets: [ 0, 1, 2 ],
                               className: 'mdl-data-table__cell--non-numeric'
                           }
                       ]
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
                       ],

              });

              $('#payroll_table').DataTable( {
                    "scrollX": true,
                    responsive: true,
                    dom:
                      "<'row'<'col-sm-6 col-md-2'l><'col-sm-12 col-md-7'B><'col-sm-6 col-md-3'f>>" +
                      "<'row'<'col-sm-12'tr>>" +
                      "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        {
                            extend:    'copyHtml5',
                            text:      '<i class="fa fa-files-o"></i> Copy',
                            titleAttr: 'Copy'
                        },
                        {
                            extend:    'excelHtml5',
                            text:      '<i class="fa fa-file-excel-o"></i> Excel',
                            titleAttr: 'Excel'
                        },
                        {
                            extend:    'csvHtml5',
                            text:      '<i class="fa fa-file-text-o"></i> CSV',
                            titleAttr: 'CSV'
                        },
                        'colvis'
                    ]
                 } );


                $('input[name="edit_memo_file"]').change(function(e){
                    var fileName = e.target.files[0].name;
                    $('#hidden_edit_attachment').val(fileName);
                });  

                $('input[name="edit_ediploma"]').change(function(e){
                    var fileName = e.target.files[0].name;
                    $('#hidden_edit_ediploma').val(fileName);
                });     

                $('input[name="edit_emedical"]').change(function(e){
                    var fileName = e.target.files[0].name;
                    $('#hidden_edit_emedical').val(fileName);
                });                

                $('input[name="edit_etor"]').change(function(e){
                    var fileName = e.target.files[0].name;
                    $('#hidden_edit_etor').val(fileName);
                });        

                $('input[name="edit_ebirth"]').change(function(e){
                    var fileName = e.target.files[0].name;
                    $('#hidden_edit_ebirth').val(fileName);
                });                

                $('input[name="edit_bclearance"]').change(function(e){
                    var fileName = e.target.files[0].name;
                    $('#hidden_edit_bclearance').val(fileName);
                });               

                $('input[name="edit_ecedula"]').change(function(e){
                    var fileName = e.target.files[0].name;
                    $('#hidden_edit_ecedula').val(fileName);
                });


              $('.view_emp').on('click',  function(event){
                var id = $(this).attr('p_id');
                var employee_id = $(this).attr('p_employeeid');
                var employee_gender = $(this).attr('p_gender');
                var employee_fname = $(this).attr('p_fname');
                var employee_mname = $(this).attr('p_mname');
                var employee_lname = $(this).attr('p_lname');
                var employee_department = $(this).attr('p_department');
                var employee_status = $(this).attr('p_status');
                var employee_picture = $(this).attr('p_picture');
                var employee_address = $(this).attr('p_address');
                var employee_city = $(this).attr('p_city');
                var employee_province = $(this).attr('p_province');
                var employee_country = $(this).attr('p_country');
                var employee_zip = $(this).attr('p_zip');
                var employee_hnumber = $(this).attr('p_hnumber');
                var employee_mnumber = $(this).attr('p_mnumber');
                var employee_wemail = $(this).attr('p_wemail');
                var employee_pemail = $(this).attr('p_pemail');
                var employee_bday = $(this).attr('p_bday');
                var employee_ssnsin = $(this).attr('p_ssnsin');
                var employee_ename = $(this).attr('p_ename');
                var employee_relationship = $(this).attr('p_relationship');
                var employee_eaddress = $(this).attr('p_eaddress');
                var employee_enumber = $(this).attr('p_enumber');
                var employee_jobtitle = $(this).attr('p_jobtitle');
                var employee_jobdesc = $(this).attr('p_jobdesc');
                var employee_joblevel = $(this).attr('p_joblevel');
                var employee_jobposition = $(this).attr('p_jobposition');
                var employee_datehired = $(this).attr('p_datehired');
                var employee_dateterminated = $(this).attr('p_dateterminated');
                var employee_sss = $(this).attr('p_sss');
                var employee_pagibig = $(this).attr('p_pagibig');
                var employee_philhealth = $(this).attr('p_philhealth');
                var employee_tin = $(this).attr('p_tin');
                var employee_nbinumber = $(this).attr('p_nbinumber');
                var employee_diploma = $(this).attr('p_diploma');
                var employee_medical = $(this).attr('p_medical');
                var employee_tor = $(this).attr('p_tor');
                var employee_birthcert = $(this).attr('p_birthcert');
                var employee_bclearance = $(this).attr('p_bclearance');
                var employee_cedula = $(this).attr('p_cedula');
                
                console.log(employee_gender);
                
                $('#e_id').html(id);
                $('#elist_id').html(employee_id);
                $('#elist_gender').html(employee_gender);
                $('#elist_fname').html(employee_fname);
                $('#elist_mname').html(employee_mname);
                $('#elist_lname').html(employee_lname);
                $('#elist_department').html(employee_department);
                $('#elist_status').html(employee_status);
                $('.profile_photo').attr('src',employee_picture);
                $('#elist_address').html(employee_address);
                $('#elist_city').html(employee_city);
                $('#elist_province').html(employee_province);
                $('#elist_country').html(employee_country);
                $('#elist_zip').html(employee_zip);
                $('#elist_hnumber').html(employee_hnumber);
                $('#elist_pnumber').html(employee_mnumber);
                $('#elist_wemail').html(employee_wemail);
                $('#elist_pemail').html(employee_pemail);
                $('#elist_bday').html(employee_bday);
                $('#elist_ssn_sin').html(employee_ssnsin);
                $('#elist_ename').html(employee_ename);
                $('#elist_relationship').html(employee_relationship);
                $('#elist_eaddress').html(employee_eaddress);
                $('#elist_enumber').html(employee_enumber);
                $('#elist_job').html(employee_jobtitle);
                $('#elist_jdesc').html(employee_jobdesc);
                $('#elist_staff').html(employee_joblevel);
                $('#elist_position').html(employee_jobposition);
                $('#elist_hired').html(employee_datehired);
                $('#elist_terminated').html(employee_dateterminated);
                $('#elist_sss').html(employee_sss);
                $('#elist_pagibig').html(employee_pagibig);
                $('#elist_philhealth').html(employee_tin);
                $('#elist_NBI').html(employee_nbinumber);
                $('#elist_TIN').html(employee_tin);
                $('#elist_diploma').html(employee_diploma);
                $('#elist_medical').html(employee_medical);
                $('#elist_TOR').html(employee_tor);
                $('#elist_bcert').html(employee_birthcert);
                $('#elist_bclearance').html(employee_bclearance);
                $('#elist_cedula').html(employee_cedula);
                
              });

              $('.edit_emp').on('click',  function(event){
                var edit_id = $(this).attr('ep_id');
                var edit_employee_id = $(this).attr('ep_employeeid');
                var edit_employee_gender = $(this).attr('ep_gender');
                var edit_employee_fname = $(this).attr('ep_fname');
                var edit_employee_mname = $(this).attr('ep_mname');
                var edit_employee_lname = $(this).attr('ep_lname');
                var edit_employee_department = $(this).attr('ep_department');
                var edit_employee_status = $(this).attr('ep_status');
                var edit_employee_picture = $(this).attr('ep_picture');
                var edit_employee_address = $(this).attr('ep_address');
                var edit_employee_city = $(this).attr('ep_city');
                var edit_employee_province = $(this).attr('ep_province');
                var edit_employee_country = $(this).attr('ep_country');
                var edit_employee_zip = $(this).attr('ep_zip');
                var edit_employee_hnumber = $(this).attr('ep_hnumber');
                var edit_employee_mnumber = $(this).attr('ep_mnumber');
                var edit_employee_wemail = $(this).attr('ep_wemail');
                var edit_employee_pemail = $(this).attr('ep_pemail');
                var edit_employee_bday = $(this).attr('ep_bday');
                var edit_employee_ssnsin = $(this).attr('ep_ssnsin');
                var edit_employee_ename = $(this).attr('ep_ename');
                var edit_employee_relationship = $(this).attr('ep_relationship');
                var edit_employee_eaddress = $(this).attr('ep_eaddress');
                var edit_employee_enumber = $(this).attr('ep_enumber');
                var edit_employee_jobtitle = $(this).attr('ep_jobtitle');
                var edit_employee_jobdesc = $(this).attr('ep_jobdesc');
                var edit_employee_joblevel = $(this).attr('ep_joblevel');
                var edit_employee_jobposition = $(this).attr('ep_jobposition');
                var edit_employee_datehired = $(this).attr('ep_datehired');
                var edit_employee_dateterminated = $(this).attr('ep_dateterminated');
                var edit_employee_sss = $(this).attr('ep_sss');
                var edit_employee_pagibig = $(this).attr('ep_pagibig');
                var edit_employee_philhealth = $(this).attr('ep_philhealth');
                var edit_employee_tin = $(this).attr('ep_tin');
                var edit_employee_nbinumber = $(this).attr('ep_nbinumber');
                var edit_employee_diploma = $(this).attr('ep_diploma');
                var edit_employee_medical = $(this).attr('ep_medical');
                var edit_employee_tor = $(this).attr('ep_tor');
                var edit_employee_birthcert = $(this).attr('ep_birthcert');
                var edit_employee_bclearance = $(this).attr('ep_bclearance');
                var edit_employee_cedula = $(this).attr('ep_cedula');
                
                console.log(edit_employee_gender);
                
                $('#edit_id').val(edit_id);
                $('#edit_employee_id').val(edit_employee_id);
                $('#edit_egender').val(edit_employee_gender);
                $('#edit_fname').val(edit_employee_fname);
                $('#edit_emname').val(edit_employee_mname);
                $('#edit_elname').val(edit_employee_lname);
                $('#edit_edepartmant').val(edit_employee_department);
                $('#edit_estatus').val(edit_employee_status);
                $('.profile_photo').attr('src',edit_employee_picture);
                $('#display_img_modal').val(edit_employee_picture);
                $('#edit_eaddress').val(edit_employee_address);
                $('#edit_ecity').val(edit_employee_city);
                $('#edit_eprovince').val(edit_employee_province);
                $('#edit_ecountry').val(edit_employee_country);
                $('#edit_ezip').val(edit_employee_zip);
                $('#edit_ehnumber').val(edit_employee_hnumber);
                $('#edit_emnumber').val(edit_employee_mnumber);
                $('#edit_ewemail').val(edit_employee_wemail);
                $('#edit_epemail').val(edit_employee_pemail);
                $('#edit_ebday').val(edit_employee_bday);
                $('#edit_essnsin').val(edit_employee_ssnsin);
                $('#edit_emgname').val(edit_employee_ename);
                $('#edit_emgrelationship').val(edit_employee_relationship);
                $('#edit_emgaddress').val(edit_employee_eaddress);
                $('#edit_emgnumber').val(edit_employee_enumber);
                $('#edit_ejobtitle').val(edit_employee_jobtitle);
                $('#edit_ejobdesc').val(edit_employee_jobdesc);
                $('#edit_ejoblevel').val(edit_employee_joblevel);
                $('#edit_ejobposition').val(edit_employee_jobposition);
                $('#edit_edatehired').val(edit_employee_datehired);
                $('#edit_edateterminated').val(edit_employee_dateterminated);
                $('#edit_esss').val(edit_employee_sss);
                $('#edit_ephilhealth').val(edit_employee_philhealth);
                $('#edit_epagibig').val(edit_employee_pagibig);
                $('#edit_etin').val(edit_employee_tin);
                $('#edit_enbi').val(edit_employee_nbinumber);
                $('#elist_TIN').val(edit_employee_tin);
                if(edit_employee_diploma == "Passed"){
                    $( "#diploma_passed" ).prop( "checked", true );
                }
                else{
                    $( "#diploma_none" ).prop( "checked", true );
                }
                
                // $('#edit_ediploma').prop('checked' , true);
                // $('#edit_emedical').val(edit_employee_medical);
                if(edit_employee_medical == "Passed"){
                    $( "#medical_passed" ).prop( "checked", true );
                }
                else{
                    $( "#medical_none" ).prop( "checked", true );
                }
                // $('#edit_etor').val(edit_employee_tor);
                if(edit_employee_tor == "Passed"){
                    $( "#tor_passed" ).prop( "checked", true );
                }
                else{
                    $( "#tor_none" ).prop( "checked", true );
                }
                // $('#edit_ebirth').val(edit_employee_birthcert);
                if(edit_employee_birthcert == "Passed"){
                    $( "#birth_cert_passed" ).prop( "checked", true );
                }
                else{
                    $( "#birth_cert_none" ).prop( "checked", true );
                }
                // $('#edit_eclearance').val(edit_employee_bclearance);
                if(edit_employee_bclearance == "Passed"){
                    $( "#clearance_passed" ).prop( "checked", true );
                }
                else{
                    $( "#clearance_none" ).prop( "checked", true );
                }
                // $('#edit_ecedula').val(edit_employee_cedula);
                if(edit_employee_cedula == "Passed"){
                    $( "#cedula_passed" ).prop( "checked", true );
                }
                else{
                    $( "#cedula_none" ).prop( "checked", true );
                }
                
              });

             $('.editemp_btn').on('click', function(){
                $('#editemp_img').css("display", "block");
                $('.display_img').css("display", "none");
             });
                
              $('.memo_view').on('click',  function(event){
                var view_vm_id = $(this).attr('v_memoid'); 
                var view_vm_title = $(this).attr('v_memo'); 
                var view_vm_subject = $(this).attr('v_subject'); 
                var view_vm_attachment = $(this).attr('v_attachment'); 
                var view_vm_date = $(this).attr('v_memodate'); 

                console.log(view_vm_attachment);

                $('#vmodal_memoid').val(view_vm_id);
                $('#vmodal_memo').html(view_vm_title);
                $('#vmodal_subject').html(view_vm_subject);
                $('#vmodal_filename').html(view_vm_attachment);
                $('#vmodal_memodate').html(view_vm_date);
                $('.memo_download').attr('href', 'documents/' + view_vm_attachment);
                $('.memo_download').attr('download', view_vm_attachment);

              });
              
               $('.send_memo').on('click',  function(event){
                var send_m_id = $(this).attr('s_memoid'); 
                var send_m_title = $(this).attr('s_memo'); 
                var send_m_subject = $(this).attr('s_subject'); 
                var send_m_attachment = $(this).attr('s_attachment'); 
                var send_m_date = $(this).attr('s_memodate'); 

                console.log(send_m_attachment);

                $('#smodal_memoid').val(send_m_id);
                $('#smodal_memo').html(send_m_title);
                $('#smodal_subject').html(send_m_subject);
                $('#smodal_filename').html(send_m_attachment);
                $('#smodal_memodate').html(send_m_date);
                // $('.memo_download').attr('href', 'documents/' + view_vm_attachment);
                // $('.memo_download').attr('download', view_vm_attachment);

              });

               $('.edit_memo').on('click',  function(event){
                var edit_m_id = $(this).attr('e_memoid'); 
                var edit_m_title = $(this).attr('e_memo'); 
                var edit_m_subject = $(this).attr('e_subject'); 
                var edit_m_attachment = $(this).attr('e_attachment'); 
                var edit_m_date = $(this).attr('e_memodate'); 

                console.log(edit_m_attachment);

                $('#edit_memo_id').val(edit_m_id);
                $('#edit_memo_title').val(edit_m_title);
                $('#edit_memo_subject').val(edit_m_subject);
                $('#edit_memo_file').val(edit_m_attachment);
                $('#hidden_edit_attachment').val(edit_m_attachment);
                $('#edit_memo_date').val(edit_m_date);
                // $('.memo_download').attr('href', 'documents/' + view_vm_attachment);
                // $('.memo_download').attr('download', view_vm_attachment);

              });

               $('.sched_view_button').on('click',  function(event){
                var view_schedid = $(this).attr('v_schedid'); 
                var view_sched_empid = $(this).attr('v_sched_empid'); 
                var view_sched_fname = $(this).attr('v_sched_fname'); 
                var view_sched_lname = $(this).attr('v_sched_lname'); 
                var view_sched_mname = $(this).attr('v_sched_mname'); 
                var view_sched_dayfrom = $(this).attr('v_sched_dayfrom'); 
                var view_sched_dayto = $(this).attr('v_sched_dayto'); 
                var view_sched_restday = $(this).attr('v_sched_restday'); 
                var view_sched_task = $(this).attr('v_sched_task'); 
                var view_sched_comment = $(this).attr('v_sched_comment'); 
                var view_sched_other = $(this).attr('v_sched_other'); 

                console.log(view_sched_empid);

                $('#v_schedid').val(view_schedid);
                $('#v_sched_lname').html(view_sched_lname);
                $('#v_sched_fname').html(view_sched_fname);
                $('#v_sched_mname').html(view_sched_mname);
                $('#v_sched_empid').html(view_sched_empid);
                $('#v_sched_dayfrom').html(view_sched_dayfrom);
                $('#v_sched_dayto').html(view_sched_dayto);
                $('#v_sched_restday').html(view_sched_restday);
                $('#v_sched_task').html(view_sched_task);
                $('#v_sched_comment').html(view_sched_comment);
                $('#v_sched_other').html(view_sched_other);
                // $('#v_sched_duration').html(view_sched_duration);
                

              });


            $('.edit-sched').on('click',  function(event){

                var token = $('#hdn-token').val();
                var edit_schedid = $(this).attr('e_schedid'); 
                var edit_shift_id = $(this).attr('e_sched_shift_name'); 
                var edit_sched_empid = $(this).attr('e_sched_empid'); 
             

                data = { 
                            _token: token,
                            edit_schedid : edit_schedid,
                            edit_shift_id : edit_shift_id,
                            edit_sched_empid : edit_sched_empid
                        };
         

                $.ajax({
                        url: '/ajaxScheduleEdit' ,
                        type: "POST",
                        data: data,
                        success: function( response ) {
                            

                            // $('#e_schedid').val(edit_schedid);
                            $('#e_sched_lname').html(response.employee.lastname);
                            $('#e_sched_fname').html(response.employee.firstname);
                            $('#e_sched_mname').html(response.employee.middle_name);
                            $('.shift_sel').val(response.shift.id);
                            $('#e_txt_sstart').html(response.shift.shift_start);
                            $('#e_txt_send').html(response.shift.shift_end);
                         // var a =   document.getElementById('txt_sstart').innerHTML = response.shift.shift_start;
                         //    document.getElementById('txt_send').innerHTML = response.shift.shift_end;

                         //    console.log(a);
                         //    // $('#e_sched_empid').html(edit_sched_empid);
                            $('#e_sched_dayfrom').val(response.schedule.day_from);
                            $('#e_sched_dayto').val(response.schedule.day_to);
                            $('#e_sched_restday').val(response.schedule.restday);
                            $('#e_sched_task').html(response.schedule.task);
                            $('#e_sched_comment').html(response.schedule.comment);
                            $('#e_sched_other').html(response.schedule.other);

                            $('.btn_sched_update').attr('id', response.schedule.id);
                            // $('#v_sched_duration').html(view_sched_duration);
                        }
                    });
                

              });

            
                $('.btn_sched_update').on('click', function(){

                    var token = $('#hdn-token').val();
                    var id = $(this).attr('id');
                    var shift_id = $('#e_shift_sel').val();
                    var sched_dayfrom = $('#e_sched_dayfrom').val(); 
                    var sched_dayto = $('#e_sched_dayto').val(); 
                    var sched_restday = $('#e_sched_restday').val(); 
                    var sched_task = document.getElementById("e_sched_task").value;
                    var sched_comment = document.getElementById("e_sched_comment").value; 
                    var sched_other = document.getElementById("e_sched_other").value;

                    $.post('/schedule/update/' + id,
                    {'sched_dayfrom':sched_dayfrom, 'shift_id':shift_id, 'sched_dayto':sched_dayto,'sched_restday':sched_restday, 
                    'sched_task':sched_task, 'sched_comment':sched_comment, 'sched_other':sched_other,  '_token':token}, 
                    function(data){

                    location.reload();

                     }); 

                });
            

               $('.btn_view_leave').on('click',  function(event){
                var view_leaveid = $(this).attr('v_leave_id'); 
                var view_leave_lname = $(this).attr('v_leave_lname'); 
                var view_leave_fname = $(this).attr('v_leave_fname'); 
                var view_leave_mname = $(this).attr('v_leave_mname'); 
                var view_leave_date = $(this).attr('v_leave_date'); 
                var view_leave_type = $(this).attr('v_leave_leave_type'); 
                var view_leave_datefrom = $(this).attr('v_leave_datefrom'); 
                var view_leave_dateto = $(this).attr('v_leave_dateto'); 
                var view_leave_reason = $(this).attr('v_leave_reason'); 
                var view_leave_status = $(this).attr('v_leave_status'); 
                var view_leave_empid = $(this).attr('v_leave_empid');
                var view_leave_type_id = $(this).attr('v_leave_leave_type_id'); 

                console.log(view_leave_empid);

                $('#vl_id').val(view_leaveid);
                $('#vl_lname').html(view_leave_lname);
                $('#vl_fname').html(view_leave_fname);
                $('#vl_mname').html(view_leave_mname);
                $('#txt_vl_lname').val(view_leave_lname);
                $('#txt_vl_fname').val(view_leave_fname);
                $('#txt_vl_mname').val(view_leave_mname);
                $('#vl_empid').html(view_leave_empid);
                $('#txt_vl_empid').val(view_leave_empid);
                $('#vl_date').html(view_leave_date);
                $('#txt_vl_date').val(view_leave_date);
                $('#vl_datefrom').html(view_leave_datefrom);
                $('#txt_vl_datefrom').val(view_leave_datefrom);
                $('#vl_dateto').html(view_leave_dateto);
                $('#txt_vl_dateto').val(view_leave_dateto);
                $('#vl_reason').html(view_leave_reason);
                $('#txt_vl_reason').val(view_leave_reason);
                $('#vl_status').val(view_leave_status);
                $('#vl_leave_type').html(view_leave_type);
                $('#hdn_leave_type').val(view_leave_type);
                $('#txt_vl_leave_type').val(view_leave_type_id);
                

              });

           

              $('#btn_send').on('click', function(event){
                var mem_id = $('#smodal_memoid').val();
                var from = $('#hdn-name').val();
                var filename = document.getElementById("smodal_filename").innerHTML;
                var mem_tit = document.getElementById("smodal_memo").innerHTML;
                var mem_sub = document.getElementById("smodal_subject").innerHTML;
                var memoemp_search = $('.memoemp_search').val();
                var memo_date = document.getElementById("smodal_memodate").innerHTML;
                var token = $("#send_memo .hdn-token").val();
                console.log(memoemp_search);

                    $.post('memo_send',
                    {'mem_id':mem_id, 'from':from,'filename':filename, 'mem_tit':mem_tit, 'memo_date':memo_date, 
                    'mem_sub':mem_sub, 'memoemp_search':memoemp_search, '_token':token}, 
                    function(data){

                    location.reload();

                     }); 
              });

            $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
            });

            $('.btn-file :file').on('fileselect', function(event, label) {
                
                var input = $(this).parents('.input-group').find(':text'),
                    log = label;
                
                if( input.length ) {
                    input.val(log);
                } else {
                   
                }

            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    
                    reader.onload = function (e) {
                        $('.profile_photo').attr('src', e.target.result);
                    }
                    
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#edi_imgInp").change(function(){
                readURL(this);
            }); 

            $('.memoemp_search').select2({

            });

            $('.btn_add_sched').on('click', function(event){
                var from = $('#hdn-name').val();
                var memoemp_search = $('.memoemp_search').val();
                var asigned_to = $('.memoemp_search').val();
                var sched_day_from = $('#sched_day_from').val();
                var sched_day_to = $('#sched_day_to').val();
                var sched_rest_day = $('#sched_rest_day').val();
                var shift_sel = $('#shift_sel').val();
                var sched_task = $('#sched_task').val();
                var sched_comment = $('#sched_comment').val();
                var sched_other = $('#sched_other').val();
                var token = $("#mod_sched .hdn-token").val();
                console.log(shift_sel);

                    $.post('/schedule',
                    {'from':from, 'memoemp_search':memoemp_search,'asigned_to':asigned_to, 'sched_day_from':sched_day_from, 'sched_day_to':sched_day_to,
                    'sched_rest_day':sched_rest_day,'shift_sel':shift_sel, 'sched_task':sched_task, 'sched_comment':sched_comment, 
                     'sched_other':sched_other, '_token':token}, 
                    function(data){

                    location.reload();

                     }); 
            });

            $('.overtime_view_edit').on('click', function(){

                var id = $(this).attr('id');
                var token = $(".hdn-token").val();

                data = { 
                            _token: token,
                            id : id
                        };
                console.log(data);

                $.ajax({
                        url: '/ajaxShowOvertime' ,
                        type: "POST",
                        data: data,
                        success: function( response ) {
                            console.log(response.overtimes);
                            $('#hdn_id').val(response.overtimes.otime_id);
                            $('#txt_vo_empid').val(response.overtimes.employee_id);
                            $('#vo_lname').html(response.overtimes.lastname);
                            $('#vo_fname').html(response.overtimes.firstname);
                            $('#vo_mname').html(response.overtimes.middle_name);
                            $('#vo_date').html(response.overtimes.date);
                            $('#vo_timefrom').html(response.overtimes.time_from);
                            $('#vo_timeto').html(response.overtimes.time_to);
                            $('#vo_duration').html(response.overtimes.duration);
                            $('#vo_reason').html(response.overtimes.reason);
                            $('#vo_status').html(response.overtimes.status);                            
                            $('#eo_lname').html(response.overtimes.lastname);
                            $('#eo_fname').html(response.overtimes.firstname);
                            $('#eo_mname').html(response.overtimes.middle_name);
                            $('#eo_date').html(response.overtimes.date);
                            $('#eo_timefrom').html(response.overtimes.time_from);
                            $('#eo_timeto').html(response.overtimes.time_to);
                            $('#eo_duration').html(response.overtimes.duration);
                            $('#eo_reason').html(response.overtimes.reason);
                            $('#eo_status').val(response.overtimes.status);
                            $('#hdn_tfrom').val(response.overtimes.time_from);
                            $('#hdn_tto').val(response.overtimes.time_to);
                            $('#hdn_date').val(response.overtimes.date);
                            $('#hdn_empid').val(response.overtimes.employee_id);
                        }
                    });
            });

        $('.edit-holiday').on('click', function(){
            var id = $(this).attr('hol_id');
            var hol_name = $(this).attr('hol_name');
            var date = $(this).attr('hol_date');
            var type = $(this).attr('hol_type_id');
            $('#edit_holiday').val(hol_name);
            $('#edit_holiday_date').val(date);
            $('#edit_holiday_type').val(type);
            $('#hdn-id').val(id);
            $('#hdn-name').val(hol_name);
            document.getElementById("edit_holiday_type").value = type;
        })

        $('.btn_update_holiday').on('click', function(){

            var token = $('#hdn-token').val();
            var id = $('#hdn-id').val();
            var name = $('#hdn-name').val();
            var date = $('#edit_holiday_date').val();
            var type = $('#edit_holiday_type').val();


            $.post('/editHoliday',
            {'id':id, 'name':name, 'date':date, 'type':type, '_token':token}, 
            function(data){

            location.reload();

             }); 
        }) 

        $('.edit-shift').on('click', function(){
            var id = $(this).attr('shift_id');
            var shift_name = $(this).attr('shift_name');
            var shift_start = $(this).attr('shift_start');
            var shift_end = $(this).attr('shift_end');
            var shift_night_diff = $(this).attr('shift_night_diff');
            var shift_break_start = $(this).attr('shift_break_start');
            var shift__break_end = $(this).attr('shift_break_end');

            $('#eshift_name').val(shift_name);
            $('#eshift_start').val(shift_start);
            $('#eshift_end').val(shift_end);
            if(shift_night_diff == 1){
                $( ".enight_diff" ).prop( "checked", true );
                $( "#enight_diff" ).val(1);
            }
            else{
                 $( ".enight_diff" ).prop( "checked", false );
                $( "#enight_diff" ).val(0);
            }
            
            $('#elunch_rest_start').val(shift_break_start);
             $('#elunch_rest_end').val(shift__break_end);
             $('#hdn-shift-id').val(id);
        });        

        $('.btn_save_edit_shift').on('click', function(){

            var token = $('#hdn-token').val();
            var id = $('#hdn-shift-id').val();
            var shift_name = $('#eshift_name').val();
            var shift_start = $('#eshift_start').val();
            var shift_end = $('#eshift_end').val();
            var shift_night_diff = $('#enight_diff').val();
            var shift_break_start = $('#elunch_rest_start').val();
            var shift_break_end = $('#elunch_rest_end').val();

            if($('.enight_diff').prop("checked") == true){
                shift_night_diff = 1;
            }
            else if($('.enight_diff'). prop("checked") == false){
                shift_night_diff = 0;
            }


            $.post('/shift/update/' + id,
            {'id':id, 'shift_name':shift_name, 'shift_start':shift_start, 'shift_end':shift_end, 
            'shift_night_diff':shift_night_diff, 'shift_break_start':shift_break_start, 'shift_break_end':shift_break_end, '_token':token}, 
            function(data){

            location.reload();

             }); 

           
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