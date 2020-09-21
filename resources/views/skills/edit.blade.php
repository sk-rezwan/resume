@extends('layouts.app')

@section('content')
    <div class="container">
        <div><h1>Skills Edit</h1></div>
        @if(session()->has('errors'))
          @foreach($errors->all() as $e)
            <div class="alert alert-danger">
              {{ $e }}
            </div>
          @endforeach        
        @endif

        <form action="{{route('skills.update', $skill)}}" method="POST">
          @csrf
          @method('PUT')      
              <div class="form-group">
                <label>Job Title</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="name" value="{{$skill->name}}">
              </div>
              <div class="form-group">
                <label>Employer</label>
                <input type="text" name="rating" id="rating" class="form-control" placeholder="rating" value="{{$skill->rating}}">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <a type="button" href="{{route('skills.index')}}" class="btn btn-primary mt-3">Skills</a>
         </form>
    </div>    
@endsection