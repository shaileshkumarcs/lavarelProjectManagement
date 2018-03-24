@extends('layouts.app')

@section('content')
      
        <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
          <!-- Jumbotron -->
          <div class="jumbotron">
            <h1>{{ $project->name }}</h1>
            <p class="lead">{{ $project->description }}</p>
            <!--<p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>-->
          </div>

          <!-- Example row of columns -->
          <div class="row" style="background-color: #FFFFFF;margin: 0px;border-radius: 5px;padding: 5px;">
             
            {{--@foreach($project->projects as $project)
            <div class="col-lg-4 col-md-4 col-sm-4">
              <h2>{{ $project->name }}</h2>
              <p class="text-danger">{{ $project->description }}</p>
              <p><a class="btn btn-primary" href="/projects/{{ $project->id }}" role="button">View Project »</a></p>
            </div>
            @endforeach--}}
          </div>

          </div>
          <div class="col-sm-3 col-md-3 col-lg-3 pull-right">

          <div class="sidebar-module">
            <h4>Actions </h4>
            <ol class="list-unstyled">
              <li><a href="/projects/{{ $project->id }}/edit"> Edit </a></li>
              <li><a href="/projects/create"> Create New Project </a></li>
              <li><a href="/projects"> My projects </a></li>
              <br/>
              @if($project->user_id == Auth::user()->id)
              <li><a href="#" 
                onclick="
                var result = confirm('Are you sure you wish to delete this project?'); 
              if(result){
                event.preventDefault();
                document.getElementById('delete-from').submit();
              }" 
              > Delete </a>
              <form id="delete-from" action="{{ route('projects.destroy',[$project->id]) }}" method="POST" style="display: none;">
                <input type="hidden" name="_method" value="delete">{{ csrf_field() }}

              </form>
            </li> 
            @endif
            </ol>
          </div>
       
      
    @endsection













