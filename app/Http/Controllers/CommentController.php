<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store($id, Request $request)
    {
        Comment::create([
            'content' => $request->content,
            'idea_id' => $id,
        ]);

        return redirect()->route('ideas.show', $id)->with('success', 'Comment posted successfully!');
    }
}
