<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view(
            'project.index',
            [
                'projects' => $projects,
            ]
        );
    }
    

    public function add() {
        // Maak een model aan
        $model = new Project();
        // definieer de velden
        $model->field_one = 'mijn data';
        // sla het model op
        $model->save();

        
    }
}
