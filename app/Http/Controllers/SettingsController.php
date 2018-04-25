<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
       return view("settings");
    }

    public static function generateTeetimes(){

        $today=getdate();
        $course=DB::table("course")->get();
        if ($course!=null){
            $timeshift=$course->get("flighttime");
            $firstteetime=$course->get("firstTeeTime");
            $lastteetime=$course->get("lastTeeTime");
            $numTeeTime=null;
            if ($timeshift != 0)$numTeeTime=($lastteetime-$firstteetime)*60/$timeshift;

            echo $course;
            echo $numTeeTime;
        }


    }
}
