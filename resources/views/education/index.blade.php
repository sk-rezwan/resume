@extends('layouts.app')

@section('content')


    @foreach ($education as $e)

        <div class="card" style="">
            <div class="card-body">
            <h5 class="card-title">{{$e->school}}, {{$e->school_location}} - {{$e->degree}} - {{$e->field_of_study}} ( {{$e->graduation_start_date}} {{$e->graduation_end_date}} )</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="{{route('education.edit', $e)}}" class="btn btn-primary">Edit</a>
              {{-- <a href="{{route('education.index', $e)}}" class="btn btn-danger">Delete</a> --}}
                <form action="{{route('education.destroy', $e)}}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>

            </div>
        </div>
         
    @endforeach

    <a type="button" href="{{route('education.create')}}" class="btn btn-primary mt-3">Add Another Education</a>


@endsection