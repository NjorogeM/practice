@extends('layout')

@section('content')
  <h1>Edit project</h1>

  <form class="" method="POST" style="margin-bottom:1em;"action="/projects/{{$project->id }}">
  {{ method_field('PATCH') }}
  {{ csrf_field()}}
    <div class="feild">
      <label class="label" for="Title">Title</label>

      <div class="control">
        <input type="text" class= "input" name="title" value="{{ $project->title}}">

      </div>
    </div>
    <div class="feild">
      <label class="label"for="description"></label>
      <div class="control">
        <textarea name="description" class="textarea" rows="8" cols="80">{{ $project->description }}</textarea>

      </div>
    </div>
    <div class="field">
      <div class="control">
        <button type="submit" class="btn-primary button is-link"name="button">Update project</button>

      </div>

    </div>
  </form>

  <form method ="POST" action="/projects/{{ $project->id }}">
   <div class="control">
      {{ method_field('DELETE') }}
     {{@csrf_field()}}
       <div class="control">
          <button type="submit" class="btn-secondary">Delete Project</button>
      </div>
  </div>
  </form>
@endsection
