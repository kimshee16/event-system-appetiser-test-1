<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CalendarResources as CalendarResources;
use App\Events;
use DB;

class CalendarController extends Controller
{
    public function index()
    {
        return CalendarResources::collection(CalendarModel::all());
    }

    public function getEvents(){

        $event = DB::table('events')->select(DB::raw('event,datefrom,dateto,day(datefrom) as dayfrom,day(dateto) as dayto,mon,tue,wed,thu,fri,sat,sun'))->where('active', 1)->get(); 
        // Fetch all records
        $eventData['data'] = $event;
        echo json_encode($eventData);
        exit;
    }

    public function updateEvents()
    {
        //$post = Events::all();
        //$post->active = 0;
        $updateEvent = DB::table('events')->update(array('active' => 0));
        return response()->json([
            'data' => 'Events-updated'
        ]);
    }

    public function storeEvents($event, $datefrom, $dateto, $mon, $tue, $wed, $thu, $fri, $sat, $sun)
    {
    	$this->updateEvents();

        $insertEvent = DB::table('events')->insert(
            [
                'event' => $event, 
                'datefrom' => $datefrom,
                'dateto' => $dateto,
                'mon' => $mon,
                'tue' => $tue,
                'wed' => $wed,
                'thu' => $thu,
                'fri' => $fri,
                'sat' => $sat,
                'sun' => $sun,
                'active' => 1
            ]
        );

        return response()->json([
            'data' => 'Events-added'
        ]);
    }

}