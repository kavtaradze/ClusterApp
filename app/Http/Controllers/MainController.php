<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;

class MainController extends Controller
{
    public function index(){
        $notes = Note::where("archived", false)->get();
        return view("index",compact("notes"));
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
}
