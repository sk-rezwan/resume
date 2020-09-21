@extends('layouts.app')

@section('content')
    <div class="container">
        <div><h1>Education</h1></div>
        @if(session()->has('errors'))
          @foreach($errors->all() as $e)
            <div class="alert alert-danger">
              {{ $e }}
            </div>
        @endforeach        
        @endif

        <form action="/education" method="POST">
          @csrf
            <div class="form-group">
              <label>School Name</label>
              <input type="text" name="school" id="school" class="form-control" placeholder="School Name">
            </div>
            <div class="form-group">
              <label>School Location</label>
              <input type="text" name="school_location" id="school_location" class="form-control" placeholder="School Location">
            </div>
            <div class="form-group">
                <label>Last Degree</label>
                <input type="text" name="degree" id="degree" class="form-control" placeholder="last degree">
            </div>
              <div class="form-group">
                <label>Field of Education</label>
                <textarea type="text" name="field_of_study" id="field_of_study" class="form-control" placeholder="Field of Education"></textarea>
              </div>
              <div class="form-group">
                <label>Graduation Start Date</label>
                <input type="date" name="graduation_start_date" id="graduation_start_date" class="form-control" placeholder="Graduation Start Date">
              </div>
              <div class="form-group">
                <label>Graduation Start Date</label>
                <input type="date" name="graduation_end_date" id="graduation_end_date" class="form-control" placeholder="Graduation End Date">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>    
@endsection