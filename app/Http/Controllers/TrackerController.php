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
                    'outcall' =>$tracker->c,
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
        $trackers = Tracker::all()
                            ->where('day', $day)
                            ->sortby('time')
                            ->sortby('speaker')
                            ->GroupBy('speaker');

        $spLists = $trackers->keys()->sort();
        $spLists = $spLists->nth(1);
        



        //dd($spLists, $trackers);
        return view('table', ['trackers' => $trackers, 
                              'spLists' => $spLists]);

        /*$trackers = Tracker::all()
                    ->where('day', '=', $day)
                    ->sortBy('speaker');


        
        //$speakerLists = $trackers->pluck('speaker')->unique();
        $speakerLists = DB::table('trackers')
                                        ->orderBy('speaker')
                                        ->get()
                                        ->unique('speaker');
        
       
        $at9s = $trackers->where('time', '=', '09:00:00');
        $at10s = $trackers->where('time', '=', '10:00:00');
        $at11s = $trackers->where('time', '=', '11:00:00');
        $at12s = $trackers->where('time', '=', '12:00:00');
        $at13s = $trackers->where('time', '=', '13:00:00');
        $at14s = $trackers->where('time', '=', '14:00:00');
        $at15s = $trackers->where('time', '=', '15:00:00');
        $at16s = $trackers->where('time', '=', '16:00:00');

        //$bySP1s = $trackers->where('speaker', '=', )
        

        $grouped = $trackers->mapToGroups(function ($item, $key) {
                return [$item['speaker'] => $item['call']];
            });*/
        //dd($grouped, $at9s);

        
        //dd($trackers, $grouped, $speakersInTrackers, $at9s);
        /*for($i = 0; $i < count($speakerLists); ++$i){
            
        };*/
        //dd($at14andJordan);
        //$prueba = $speakerLists->push($at9s);
        
        
    /*    return view('table', ['trackers' => $trackers,
                              'at9s' => $at9s,
                              'at10s' => $at10s,
                              'at11s' => $at11s,
                              'at12s' => $at12s,
                              'at13s' => $at13s,
                              'at14s' => $at14s,
                              'at15s' => $at15s,
                              'at16s' => $at16s,
                              'speakerLists' => $speakerLists,
                          ]);*/
    }
}