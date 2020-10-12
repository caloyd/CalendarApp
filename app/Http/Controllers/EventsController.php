<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EventsController extends Controller
{
    public function create(Request $request)
    {
        $event = new Event([
            'event_name' => $request->input('event_name'),
            'date_from' => $request->input('date_from'),
            'date_to' => $request->input('date_to')
        ]);

        $event->save();

        return response()->json('Event added');
    }

    public function index()
    {
        $events = Event::all()->toArray();
        return array_reverse($events);
    }
}
