<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $title = 'upcomingEvent';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {$events = Event::all();

        return view('upcomingEvents.index', compact('events'))
            ->withTitle($this->title);
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
     * @param  \App\Event  $upcomingEvent
     * @return \Illuminate\Http\Response
     */
    public function show(Event $upcomingEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $upcomingEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $upcomingEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $upcomingEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $upcomingEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $upcomingEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $upcomingEvent)
    {
        //
    }



//    adding users choice of events in database
    public function add(Event $event)
    {
        if (\Request::ajax()) {
            echo "yess!!";
            echo $event->id;
        }
//        $event->addUser($event->id, auth()->id());

        return redirect(url()->previous());
    }
}
