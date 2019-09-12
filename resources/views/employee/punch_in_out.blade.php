@extends('employee.employee')

@section('employee_content')
	<div class="col-lg-12">
		<div class="timesheet_report">
			<div class="container">
				<div class="card">
                <div class="card-header">
                  <div style="margin-top: 20px;">
                    @if(Auth::user()->status == 0)

                        <!-- <a href="{{url('/punch_in_out')}}" class ="btn btn-primary time" name="{{ Auth::user()->name }}" testId="" style="margin-bottom: 10px; margin-top:-10px;" id = "{{Auth::user()->id}}">Time In<i class="fas fa-sync ic" style="margin-left:5px;" hidden></i></a> -->
                        <button type="button" class ="btn btn-primary time" name="{{ Auth::user()->name }}" testId="" style="margin-bottom: 10px; margin-top:-10px;" id = "{{Auth::user()->employee_id}}">Time In<i class="fas fa-sync ic" style="margin-left:5px;" hidden></i></button>
                          <!-- <button class ="btn btn-primary time" name="{{ Auth::user()->name }}" testId="" style="margin-bottom: 10px; margin-top:-10px;" id = "{{Auth::user()->id}}" >Time In</button> -->
                    @else
                    @foreach($timeSheets as $timeSheet)
                        @if($timeSheet->time_to == null)
                            <!-- <a href="{{url('/punch_in_out')}}" class ="btn btn-danger time" testId="{{ $timeSheet->id }}" style="margin-bottom: 10px; margin-top:-10px;" id = "{{ Auth::user()->id }}">Time Out<i class="fas fa-sync ic"style="margin-left:5px;" hidden></i></a> -->
                            <button type="button" class ="btn btn-danger time" testId="{{ $timeSheet->id }}" style="margin-bottom: 10px; margin-top:-10px;" id = "{{ Auth::user()->employee_id }}">Time Out<i class="fas fa-sync ic"style="margin-left:5px;" hidden></i></button>
                            <!-- <button class ="btn btn-danger time" testId="{{ $timeSheet->id }}" style="margin-bottom: 10px; margin-top:-10px;" id = "{{ Auth::user()->id }}">Time Out</button> -->
                        @else

                        @endif
                    @endforeach
                    @endif
                  </div>

                </div>

                <div class="card-body">
                  
                    <table class="table table-bordered" id="addDataTable">
                      <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Date</th>
                          <th scope="col">Time In</th>
                          <th scope="col">Time Out</th>
                          <th scope="col">Time Duration</th>
                        </tr>
                      </thead>
                      <tbody>
                  @foreach($timeSheets as $timeSheet)
                        <tr>

                          <th scope="row">{{Auth::user()->employee()->first()->firstname}} {{Auth::user()->employee()->first()->lastname}}</th>
                          <td>{{$timeSheet->date}}</td>
                          <td>{{date('h:i:s a', strtotime($timeSheet->time_from))}}</td>
                          @if($timeSheet->time_to != null || $timeSheet->time_to != "")
                         <td>{{date('h:i:s a', strtotime($timeSheet->time_to))}}</td>
                         @else
                         <td></td>
                          @endif
                          <td>{{ $timeSheet->time_duration }}</td>
                        </tr>
                              
                  @endforeach
                      </tbody>
                    </table>
                    <input id="hdn-token" class="hdn-token" type="hidden" name="_token" value="{{ csrf_token() }}">
                    @csrf

                   
                  
                </div>
            </div>
			</div>
		</div>
	</div>

@endsection