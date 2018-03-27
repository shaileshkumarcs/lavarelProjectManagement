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

            @include('partials.comments')
            <div class="col-md-12 col-lg-12 col-sm-12 pull-left">
            <form method="post" action="{{ route('comments.store') }}">{{ csrf_field() }}
            
              <input type="hidden" name="commentable_type" value="App\Project">
              <input type="hidden" name="commentable_id" value="{{$project->id}}">

            <div class="form-group">
              <label for="comment-content">Comment </label>
              <textarea placeholder="Enter comment" style="resize: vertical;" id="comment-content" name="body" rows="3" spellcheck="false" class="form-control autosize-target text-left"></textarea>
            </div>

            <div class="form-group">
              <label for="url-content">Proof of work done (Url/Photos) </label>
              <textarea placeholder="Enter url or screenshots " style="resize: vertical;" id="url-content" name="url" rows="2" spellcheck="false" class="form-control autosize-target text-left"></textarea>
            </div>


            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="submit">
            </div>
          </form>
        </div>

        



          </div>

          </div>
          <div class="col-sm-3 col-md-3 col-lg-3 pull-right">

          <div class="sidebar-module">
            <h4>Actions </h4>
            <ol class="list-unstyled">
              <li><a href="/projects/{{ $project->id }}/edit"><i class="fas fa-edit"></i> Edit </a></li>
              <li><a href="/projects/create"><i class="fas fa-plus-circle"></i> Create New Project </a></li>
              <li><a href="/projects"><i class="fas fa-briefcase"></i> My projects </a></li>
              <br/>
              @if($project->user_id == Auth::user()->id)
              <li><a href="#" 
                onclick="
                var result = confirm('Are you sure you wish to delete this project?'); 
              if(result){
                event.preventDefault();
                document.getElementById('delete-from').submit();
              }" 
              ><i class="fa fa-times-circle"></i> Delete </a>
              <form id="delete-from" action="{{ route('projects.destroy',[$project->id]) }}" method="POST" style="display: none;">
                <input type="hidden" name="_method" value="delete">{{ csrf_field() }}

              </form>
            </li> 
            @endif
            </ol>
            <hr/>
            <h4> Add members </h4>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-lg-12">
                <form id="add-user" action="{{ route('projects.adduser') }}" method="POST">{{ csrf_field() }}
                <input type="hidden" class="form-control" name="project_id" value="{{ $project->id }}">
                <div class="input-group">
                  <input type="text" class="form-control" name="email" placeholder="Email">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Add!</button>
                  </span>
                </div><!-- /input-group -->
              </form>
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
<br/>
            <h4>Team Member</h4>
            <ol class="list-unstyled">
              @foreach($project->users as $user)
              <li><a href="#">{{ $user->email }}</a></li>
              @endforeach
            </ol>





          </div>
       
      
    @endsection













