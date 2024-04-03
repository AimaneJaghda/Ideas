<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){

        $idea = Idea::orderBy('created_at', 'DESC');

        if($request->has('search')){
            $idea = $idea->where('content', 'like', "%$request->search%");
        }

        return view("dashboard", [
            'ideas' => $idea->paginate(5)
        ]);
    }
}
