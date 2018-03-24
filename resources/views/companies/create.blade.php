@extends('layouts.app')

   @section('content')

    
        <!-- Example row of columns -->
        <div class="col-md-9 col-lg-19 col-sm-9 pull-left" style="background-color: #FFFFFF;border-radius: 5px;">
          <h1>Create New Company</h1>
          <form method="post" action="{{ route('companies.store') }}">{{ csrf_field() }}
            <div class="form-group">
              <label for="company-name">Name <span class="required">*</span></label>
              <input type="text" name="name" required id="company-name" placeholder="Enter name" spellcheck="false" class="form-control" value="">
            </div>
            <div class="form-group">
              <label for="company-content">Description </label>
              <textarea placeholder="Enter Description" style="resize: vertical;" id="company-content" name="description" rows="5" spellcheck="false" class="form-control autosize-target text-left"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="submit">
            </div>
          </form>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
          <div class="sidebar-module">
            <h4>Actions </h4>
            <ol class="list-unstyled">
            <li><a href="/companies">  My Companies </a></li>
            </ol>
          </div>
        </div>
    
      
    @endsection













