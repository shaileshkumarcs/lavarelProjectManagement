@extends('layouts.app')

@section('content')

<div class="col-md-6 col-lg-6">
  <div class="card bg-primary text-white">
    <div class="card-body"> Companies <a class="float-right btn btn-info" href="/companies/create">Create New </a></div>
    <ul class="list-group">
      @foreach($companies as $company)
        <li class="list-group-item"><a href="/companies/{{ $company->id }}" >{{ $company->name }}</a></li>
      @endforeach
    </ul>
  </div>
</div>




@endsection
