@extends('layouts.app')

@section('content')


    @foreach ($skills as $e)

        <div class="card" style="">
            <div class="card-body">
            <h5 class="card-title"> {{$e->name}} - rating: ({{$e->rating}}) </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="{{route('skills.edit', $e)}}" class="btn btn-primary">Edit</a>
                <form action="{{route('skills.destroy', $e)}}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>

            </div>
        </div>
         
    @endforeach

    <a type="button" href="{{route('skills.create')}}" class="btn btn-primary mt-3">Add Another Skill</a>
    <a type="button" href="{{route('skills.index')}}" class="btn btn-primary mt-3">Skills</a>


@endsection