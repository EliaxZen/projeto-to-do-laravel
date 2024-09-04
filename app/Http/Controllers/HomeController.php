<?php

namespace App\Http\Controllers;

use Carbon\Carbon;


use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $date = $request->input('date', Carbon::today()->toDateString());
        $tasks = Task::whereDate('due_date', $date)->get();

        $data['date'] = Carbon::parse($date)->locale('pt_BR'); // define a localidade para pt_BR
        $data['tasks'] = $tasks;
        $data['tasks_count'] = $tasks->count();
        $data['undone_tasks_count'] = $tasks->where('is_done', false)->count();
        $data['AuthUser'] = Auth::user();

        return view('home', $data);
    }

}
