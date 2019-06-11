<?php

namespace App\Http\Controllers;
use View;
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
    Project::create([
      'title'=>request('title'),
      'description'=>request('description')
    ]);
    // $project = new Project();

    // $project->title = request('title');
    // $project->description =request('description');

    //$project-> save();

    return redirect('/projects');


  }
 public function edit(Project $project)
 {

  //  $project = Project::find($id);
   return view ('projects.edit')->with(array('project'=>$project));
 }

  public function show(Project $project)
  {
  return view('projects.show',compact('project'));
  }
  public function update(Project $project)
    {
     
      $project->title = request('title');
      $project->description = request('description');
      $project->save();
      
      return redirect('/projects');
    }

    public function destroy(Project $project)
 {
   $project->delete();
   return redirect('projects');
 } 
}
