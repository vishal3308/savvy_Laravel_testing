<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Google_calendar;
// use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Meeting_transcript;
use Auth;

class CalendarApiController extends Controller
{
    public function calendar_event(Request $request){
        // if(is_null($request)){
            
        //     return response()->json(['status'=>'User Not found']);
        // }
        // else{
        $user_id=Auth::user()->id;
        $Events=Google_calendar::where('user_id', '=',$user_id)->where('Meeting_plateform','=','Google Meet')->get();
        return response()->json($Events);
        
    }
   

}
