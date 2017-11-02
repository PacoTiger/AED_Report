<?php

namespace App\Http\Controllers;

use App\Tracker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class TrackerController extends Controller
{
    public function import() 
    {
    
    	DB::table('trackers')->truncate();

        Excel::load('database/SLCTDB170720.csv', function($reader) {
            foreach ($reader->get() as $tracker) {
                Tracker::create([
                    'day' =>$tracker->day,
                    'time' =>$tracker->time,
                    'agent' =>$tracker->agent,
                    'speaker' =>$tracker->speaker,
                    'segmentation' =>$tracker->s,
                    'lead' =>$tracker->l,
                    'call' =>$tracker->c,
                    'tMinute' =>$tracker->t,
                    'deal' =>$tracker->d,
                    'iSegundos' =>$tracker->ts,
                    'tAvg' =>$tracker->avg,
                    'iSecondsAvg' =>$tracker->avgs
                    ]);
            }
        });
    }

    public function index($day) 
    {
        $trackers = Tracker::all()->where('day', '=', $day);
        //dd($trackers);

        return view('indexTracker', ['trackers' => $trackers]);
    }
}