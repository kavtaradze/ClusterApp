<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;

class MainController extends Controller
{
    public function index(){
        $completed = Note::where(["completed" => true, 'archived' => false])->get();
        $current = Note::where(["completed" => false, 'archived' => false])->get();

        return view("index",compact("current"), compact('completed'));
    }

     public function create(Request $request){
         $note = new Note;
         $note->description = $request->get('description');
         $note->color = $request->get('color');
         $note->archived = false;
         $note->completed = false;
         $note->save();
         return back();
    }
    public function archives() {
      $completed = Note::where(["completed" => true, 'archived' => true])->get();
      $current = Note::where(["completed" => false, 'archived' => true])->get();

        return view("archives",compact("current"), compact('completed'));
    }
    public function archive(Note $note) {
        $note->archived = true;
        $note->save();
        return back();
    }
    public function present(Note $note) {
        $note->archived = false;
        $note->save();
        return back();
    }
    public function complete(Note $note) {
        $note->completed = true;
        $note->save();
        return back();
    }
    public function current(Note $note) {
        $note->completed = false;
        $note->save();
        return back();
    }

    public function delete(Note $note) {
        $note->delete();
        return back();
    }
}
