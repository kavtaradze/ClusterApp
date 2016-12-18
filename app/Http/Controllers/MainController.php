<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;

class MainController extends Controller
{
    public function index(){
        $completed = Note::where("completed", true)->get();
        $current = Note::where("completed", false)->get();

        return view("index",compact("current"), compact('completed'));
    }

     public function create(Request $request){
         $note = new Note;
         $note->description = $request->get('description');
         $note->color = $request->get('color');
         $note->archived = false;
         $note->completed = false;
         $note->save();
         //dd($note);
         return back();
    }
    public function archives() {
        $notes = Note::where("archived", true)->get();
        return view("archives",compact("notes"));
    }
    public function archive(Note $note) {
        $note->archived = true;
        $note->save();
    }
    public function complete(Note $note) {
        $note->completed = true;
        $note->save();
    }
    public function delete(Note $note) {
        $note->delete();
    }
}
