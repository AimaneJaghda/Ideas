<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store(Request $request){
        // dump(request()->get('idea', ''));
        // dump($request->idea);

        $request->validate([
            'content' => 'required|min:3|max:250'
        ]);

        $idea = Idea::create(
            [
                'content' => $request->content,
            ]
        );

        return redirect()->route('dashboard')->with('success', 'Idea created successfully!');
    }


    public function show(Idea $idea){

        return view('ideas.show', compact('idea'));
    }


    public function edit(Idea $idea){

        $editing = true;

        return view('ideas.show', compact('idea', 'editing'));
    }
    
    public function update(Idea $idea, Request $request){
        $request->validate([
            'content' => 'required|min:3|max:250'
        ]);

        $idea->content = $request->content;
        $idea->save();
        
        return redirect()->route('ideas.show', $idea->id)->with('success', 'Idea upfated successfully!');
    }



    // public function destroy(Request $request){
    //     $idea = Idea::where('id', $request->id)->firstOrFail();
        
    //     $idea->delete();

    //     return redirect()->route('dashboard')->with('success', 'Idea deleted successfully!');
    // }


    public function destroy(Idea $id){
        $id->delete();

        return redirect()->route('dashboard')->with('success', 'Idea deleted successfully!');
    }
}
