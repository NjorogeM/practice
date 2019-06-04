<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;

class ProjectsController extends Controller
{
  public function index(){

    $projects=\App\project::all();


    return view('projects.index',compact('projects'));
  }

  public function create()
  {
    return view('projects.create');
  }

  public function store()
  {
    $project = new Project();

    $project->title = request('title');
    $project->description =request('description');

    $project-> save();

    return redirect('/projects');


  }
 public function edit()
 {
   $project = Project::find($id);
   return view('projects.edit');
 }
  public function show()
  {
    return view('projects.edit');
  }
}
