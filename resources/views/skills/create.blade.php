@extends('layouts.app')

@section('content')
    <div class="container">
        <div><h1>Skills</h1></div>
        @if(session()->has('errors'))
          @foreach($errors->all() as $e)
            <div class="alert alert-danger">
              {{ $e }}
            </div>
        @endforeach        
        @endif

        <form action="/skills" method="POST">
          @csrf
            <div class="form-group">
              <label>Job Title</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="name">
            </div>
            <div class="form-group">
              <label>Employer</label>
              <input type="text" name="rating" id="rating" class="form-control" placeholder="rating">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>    
@endsection