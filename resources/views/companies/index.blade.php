@extends('layouts.app')

@section('content')

<div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
  <div class="panel panel-default" style="border: 1px solid green;">
    <div class="panel-heading" style="background-color: #007bff;padding: 10px;border-radius:5px;">Companies</div>
    <div class="panel-body" style="padding: 10px;">
      
      <ul class="list-group">
      @foreach($companies as $company)
        <li class="list-group-item"><a href="/companies/{{ $company->id }}" >{{ $company->name }}</a></li>
      @endforeach
    </ul>





    </div>
  </div>
</div>



@endsection
