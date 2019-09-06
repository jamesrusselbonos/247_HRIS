<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Employee Dashboard | 247 HRIS </title>

	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://use.fontawesome.com/4c6c819f60.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

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
					<h6 style="color: #000; padding-left: 20px; padding-right: 20px;">Navigation</h6>
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
						<li>
							<div class="row nav_link">
								<div class="col-lg-2">
									<i style="color: #fff;" class="fa fa-file-text-o" aria-hidden="true"></i>
								</div>
								<div class="col-lg-10">
									<a href="/employee_memo" style="font-size: 15px;" href="#">Memo</a>
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
						<h4>EMPLOYEE DASHBOARD</h4>

					</div>
					<div class="col-lg-6">
						<ul style="list-style: none;">
							<li style="float: right;">
								<a href="#" class="notification-trigger">
								  <span><i class="fa fa-bell-o" aria-hidden="true"></i></span>
								  @if(auth()->user()->unreadNotifications->count())
								  <span class="badge" id="bell_badge">{{auth()->user()->unreadNotifications->count()}}</span>
								  @endif
								</a>
							</li>
							<li style="float: right; margin-top: 15px; font-size: 16px;" class="nav-item dropdown">
                                <a style="color: #000;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     <span>{{ Auth::user()->name }} <i class="fa fa-caret-down" aria-hidden="true"></i></span>
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
			<div class="panel">
			     <div class="title">Notifications</div>
				      <ul class="notification-bar" id="not">
				      	<input id="hdn-token" class="hdn-token" type="hidden" name="_token" value="{{ csrf_token() }}">
				      	@foreach(auth()->user()->unreadNotifications as $notification)
				          <li class="unread" id="unread" test="teest">
				              <a style="cursor: pointer;" data-toggle="modal" data-target="#view_memo" class="memo_notif_id" id="{{ $notification->id }}" notif_id="{{ $notification->id }}" notif_title="{{ $notification->data['title'] }}" notif_from="{{ $notification->data['from'] }}" notif_data="{{ $notification->data['date'] }}" notif_subject="{{ $notification->data['subject'] }}" notif_file="{{ $notification->data['file'] }}">
				              	<i class="ion-checkmark"></i>
				              	<div>
				              	
				              		<h6><strong>{{$notification->data['title']}}</strong></h6>
				              		<p style="margin-top: -18px; font-size: 13px;">From: {{$notification->data['from']}}</p>
				              		<p style="margin-top: -18px; font-size: 13px;">{{$notification->data['date']}}</p>
				              		<p class="memo_subj" style="margin-top: -12px; font-size: 13px;">{{$notification->data['subject']}}</p>
				              	</div>
				              </a>
				          </li>
				          @endforeach

				          @foreach(auth()->user()->readNotifications as $notification)
				          <li>
				              <a style="cursor: pointer;" data-toggle="modal" data-target="#view_memo_notif" class="memo_notif_id" id="{{ $notification->id }}"  notif_id="{{ $notification->id }}" notif_title="{{ $notification->data['title'] }}" notif_from="{{ $notification->data['from'] }}" notif_date="{{ $notification->data['date'] }}" notif_subject="{{ $notification->data['subject'] }}" notif_file="{{ $notification->data['file'] }}">
				              	<i class="ion-checkmark"></i>
				              	<div>

				              		<h6><strong>{{$notification->data['title']}}</strong></h6>
				              		<p style="margin-top: -18px; font-size: 13px;">From: {{$notification->data['from']}}</p>
				              		<p style="margin-top: -18px; font-size: 13px;">{{$notification->data['date']}}</p>
				              		<p class="memo_subj" style="margin-top: -12px; font-size: 13px;">{{$notification->data['subject']}}</p>
				              	</div>
				              </a>
				          </li>
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
			           							<a class="memo_download" href="" download=""><i class="fa fa-download" aria-hidden="true">&nbsp; Download</i></a>
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