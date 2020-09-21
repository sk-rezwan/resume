@extends('layouts.app')

@section('content')
    <div class="container">
        <div><h1>Education Edit</h1></div>
        @if(session()->has('errors'))
          @foreach($errors->all() as $e)
            <div class="alert alert-danger">
              {{ $e }}
            </div>
          @endforeach        
        @endif

        <form action="{{route('experience.update', $experience)}}" method="POST">
          @csrf
          @method('PUT')      
              <div class="form-group">
                <label>Job Title</label>
                <input type="text" name="job_title" id="job_title" class="form-control" placeholder="job_title" value="{{$experience->job_title}}">
              </div>
              <div class="form-group">
                <label>Employer</label>
                <input type="text" name="employer" id="employer" class="form-control" placeholder="employer" value="{{$experience->employer}}">
              </div>
                <div class="form-group">
                  <label>Location (City)</label>
                  <input type="text" name="city" id="field_of_study" class="form-control" placeholder="city" value="{{$experience->city}}">
                </div>
                <div class="form-group">
                  <label>State</label>
                  <input type="text" name="state" id="state" class="form-control" placeholder="state" value="{{$experience->state}}">
                </div>
                <div class="form-group">
                  <label>Start Date</label>
                  <input type="date" name="start_date" id="start_date" class="form-control" placeholder="start_date" value="{{$experience->start_date}}">
                </div>
                <div class="form-group">
                  <label>End Date</label>
                  <input type="date" name="end_date" id="end_date" class="form-control" placeholder="end_date" value="{{$experience->end_date}}">
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>    
@endsection