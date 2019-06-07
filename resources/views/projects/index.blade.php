@extends('layout')
@section('title','Projects')
@section("content")
<h1>Projects</h1>

@foreach($projects as $project)
<ul class="list-group">
<li class="list-group-item"> {{ $project->title }}</li>
@endforeach
@endsection
