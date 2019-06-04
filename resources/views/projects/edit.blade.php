@extends('layout')

@section('content')
  <h1>Edit project</h1>

  <form class="" action="index.html" method="post">
    <div class="feild">
      <label class="label" for="Title"></label>

      <div class="control">
        <input type="text" name="title" value="Title">

      </div>
    </div>
    <div class="feild">
      <label class="label"for="description">Description</label>
      <div class="control">
        <textarea name="description" class="textarea" rows="8" cols="80"></textarea>

      </div>
    </div>
    <div class="field">
      <div class="control">
        <button type="submit" class="button is-link"name="button">Update project</button>

      </div>

    </div>
  </form>
@endsection
