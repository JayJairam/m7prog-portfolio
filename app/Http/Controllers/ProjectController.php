<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        return 'Dit is de about pagina.';
        $projects = Project::all();
        
        return view(
            'projects.index',
            [
                'projects' => $projects,
            ]
);


    }

    public function add() {
            // Maak een model aan
    $model = new Model();
    // definieer de velden
    $model->field_one = 'mijn data';
    // sla het model op
    $model->save();
    }
}

