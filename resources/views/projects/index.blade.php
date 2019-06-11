@extends('layout')
@section('title','Projects')
@section("content")
<h1>Projects</h1>

@foreach($projects as $project)
<ul class="list-group">
<li class="list-group-item">
<a href="/projects/{{$project->id}}">
 {{ $project->title }} 
{{$project->description}}
</li>
@endforeach
@endsection
