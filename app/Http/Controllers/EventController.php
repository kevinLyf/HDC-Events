<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        $events = Event::all();
        return view('welcome', ['events' => $events]);
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {
        $event = new Event;

        $event->title = $request->title;
        $event->description = $request->description;
        $event->private = $request->private;
        $event->city = $request->city;

        if($request->hasFile('image') ** $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/events'), $imageName);
    
            $event->image = $imageName;
        }

        $event->save();

        return redirect('/')->with('msg', 'Event created successfully!');
    }
}
