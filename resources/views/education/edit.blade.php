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

        <form action="{{route('education.update', $education)}}" method="POST">
          @csrf
          @method('PUT')
            <div class="form-group">
              <label>School Name</label>
            <input type="text" name="school" id="school" class="form-control" value="{{$education->school}}">
            </div>
            <div class="form-group">
              <label>School Location</label>
              <input type="text" name="school_location" id="school_location" class="form-control" value="{{$education->school_location}}">
            </div>
            <div class="form-group">
                <label>Last Degree</label>
                <input type="text" name="degree" id="degree" class="form-control" value="{{$education->degree}}">
            </div>
              <div class="form-group">
                <label>Field of Education</label>
                <textarea type="text" name="field_of_study" id="field_of_study" class="form-control" value="{{$education->field_of_study}}"></textarea>
              </div>
              <div class="form-group">
                <label>Graduation Start Date</label>
                <input type="date" name="graduation_start_date" id="graduation_start_date" class="form-control" value="{{$education->graduation_start_date}}">
              </div>
              <div class="form-group">
                <label>Graduation Start Date</label>
                <input type="date" name="graduation_end_date" id="graduation_end_date" class="form-control" value="{{$education->graduation_end_date}}">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>    
@endsection