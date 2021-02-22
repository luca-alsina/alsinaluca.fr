<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $projects = Projects::all();
        return view('index', [
            'projects' => $projects
        ]);
    }

    public static function project($id) {
        $project = Projects::where('id', $id)->firstOrFail();
        return view('project', [
            'project' => $project
        ]);
    }
}
