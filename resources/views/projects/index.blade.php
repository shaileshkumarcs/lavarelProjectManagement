@extends('layouts.app')

@section('content')

<div class="col-md-6 col-lg-6">
  <div class="card bg-primary text-white">
    <div class="card-body"> Projects <a class="float-right btn btn-info" href="/projects/create">Create New </a></div>
    <ul class="list-group">
      @foreach($projects as $project)
        <li class="list-group-item"><a href="/projects/{{ $project->id }}" >{{ $project->name }}</a></li>
      @endforeach
    </ul>
  </div>
</div>




@endsection
