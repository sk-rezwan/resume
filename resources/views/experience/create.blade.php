@extends('layouts.app')

@section('content')
    <div class="container">
        <div><h1>Experience</h1></div>
        @if(session()->has('errors'))
          @foreach($errors->all() as $e)
            <div class="alert alert-danger">
              {{ $e }}
            </div>
        @endforeach        
        @endif

        <form action="/experience" method="POST">
          @csrf
            <div class="form-group">
              <label>Job Title</label>
              <input type="text" name="job_title" id="job_title" class="form-control" placeholder="job_title">
            </div>
            <div class="form-group">
              <label>Employer</label>
              <input type="text" name="employer" id="employer" class="form-control" placeholder="employer">
            </div>
              <div class="form-group">
                <label>Location (City)</label>
                <textarea type="text" name="city" id="field_of_study" class="form-control" placeholder="city"></textarea>
              </div>
              <div class="form-group">
                <label>State</label>
                <input type="text" name="state" id="state" class="form-control" placeholder="state">
              </div>
              <div class="form-group">
                <label>Start Date</label>
                <input type="date" name="start_date" id="start_date" class="form-control" placeholder="start_date">
              </div>
              <div class="form-group">
                <label>End Date</label>
                <input type="date" name="end_date" id="end_date" class="form-control" placeholder="end_date">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>    
@endsection