@extends('layout')
@section('title','Project Maker')
@section('content')
<h1>Create your very own damn projects today baby</h1>

<form method="POST" action="/projects">
  {{ csrf_field() }}
  <div>
    <input type="text" name="title" placeholder="Project title">

  </div>

  <div >
    <textarea name="description" placeholder="Project description"></textarea>

  </div>

  <div>
    <button type="submit" >Submit project</button>

  </div>
</form>
@endsection
