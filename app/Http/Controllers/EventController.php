<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        $search = request('search');

        if($search) {
            $events = Event::where([
                [
                    'title',
                    'like',
                    '%'. $search . '%'
                ]
            ])->get();
        } else {
            $events = Event::all();
        }
        return view('welcome', ['events' => $events, 'search' => $search]);
    }

    public function show($id) {
        $event = Event::findOrFail($id);
        return view('events.show', ['event' => $event]);
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
        $event->date = $request->date;
        $event->items = $request->items;

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
