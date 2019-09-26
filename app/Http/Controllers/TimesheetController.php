<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\TimeSheet;
use Auth;
use DB;
use Carbon\Carbon;
use App\Overtime;

class TimesheetController extends Controller
{

    public function __construct()
        {
            $this->middleware('auth');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $userId = Auth::user()->employee_id;
       $timeSheets =  DB::table('timesheets')
                     ->select('*')
                     ->where('employee_id', $userId)
                     ->get();
         
        // $timeSheets = TimeSheet::where('employee_id' , $userId);

        return view('employee.punch_in_out', compact('timeSheets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }


    public function timeIn(Request $request, $id)
    {
        
        $userId = Auth::user()->id;
        
        $users = User::find($userId);

        // if($users->status == "0")
        // {
            $timeSheets = new TimeSheet;
            $timeSheets->employee_id = $id;
            $timeSheets->date = date('Y-m-d');
            $users->status = "1";
            $timeSheets->time_from = date('H:i:s');
            $timeSheets->id = $request->randId;
            
        // }
        // else{
        //    $timeSheets = TimeSheet::find($id);
        //    if($timeSheets->time_to != null){

           
        //    }
        //    else{
        //     $users->status = "0";
        //     $timeSheets->time_to = date('H:i:s');
        //    }
       
        // }

        
     
        $timeSheets->save();
       
        $users->save();

        return redirect()->back();

        // return redirect()->route('home');
    }
    /*    public function timeIn(Request $request, $id)
    {
    
        $users = User::find($id);
        

        if($users->status == "0")
        {
            $timeSheets = new TimeSheet;
            $timeSheets->employee_id = $id;
            $timeSheets->date = date('Y-m-d');
        $users->status = "1";
        $timeSheets->time_from = date('H:i:s');
            $timeSheets->randId = $request->randId;
            $timeSheets->save();
        }
        else{
            $timeSheets = TimeSheet::findOrFail($request->randId);
        $users->status = "0";
        $timeSheets->time_to = date('H:i:s');
            $timeSheets->save();
        }

        
     
        
       
        $users->save();
        // return view('home');

        return redirect()->route('home');
    }*/

    public function timeOut(Request $request, $id)
    {   


        $userId = Auth::user()->id;
        $user_emp = Auth::user()->employee_id;
        $users = User::find($userId);
        $dur = TimeSheet::where('id', $request->testID)->get('time_from');


       $to = Carbon::now();
       $from = $dur['0']['time_from'];
       $duration = new Carbon;
       $duration = $to->diff(Carbon::parse($from))->format('%h:%I');
       $xplode = explode(":", $duration);
       $decDuration = $xplode[0] + ($xplode[1]/60);

   
        $overtime = Overtime::where('employee_id', $user_emp)
                            ->where('date', date('Y-m-d'))
                            ->first();

        $time_duration = "0.00";
        $ot_duration = "0.00";

        if (!$overtime){
            if($decDuration >= 4.00){
                $time_duration = 4.02;
            }

            else if($decDuration < 4.00){
                $time_duration = $decDuration;
            }
        } 
            
        else{
            if($decDuration >= $overtime->duration + 4.00){
                $ot_duration = $overtime->duration;
                $time_duration = 4.00;
            }
                
            else if($decDuration < $overtime->duration + 4.00){
                $ot_duration = $decDuration - 4.00;
                if($decDuration < 4.00){
                    $time_duration = $decDuration;
                }
                else{
                    $time_duration = 4.00;
                }
 
            }
        }

        // $time_duration = $ot_duration;
        DB::table('timesheets')
                    ->where('id', $request->testID)
                    ->update(['time_to' => date('H:i:s'),
                        'time_duration' => $time_duration,
                        'overtime_duration' => $ot_duration ]);
        // (new Carbon($timeSheet->time_to))->diff(new Carbon($timeSheet->time_from))->format('%h:%I') 
        // $to = new Carbon;
        // $to = $timeSheet->time_to;
        // $from = new Carbon;
        // $from = $timeSheet->time_from;
        // // $duration = new Carbon;
        // $duration = $to->diff($from)->format('%h:%I');
        // $timeSheets = TimeSheet::find(2222);
        // // $timeSheets = TimeSheet::find($request->randId);
       
                $users->status = "0";
        //        $timeSheets->time_to = date('H:i:s');
        //         // $timeSheets->time_to = date('H:i:s');
        //         $timeSheets->save();
                $users->save();
                return redirect()->back();
        // return redirect('employee.punch_in_out');
    }

}
    