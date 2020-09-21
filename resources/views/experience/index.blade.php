@extends('layouts.app')

@section('content')


    @foreach ($experience as $e)

        <div class="card" style="">
            <div class="card-body">
            <h5 class="card-title"> {{$e->job_title}} - {{$e->employer}} - {{$e->city}} -{{$e->state}} {{$e->start_date}} to {{$e->end_date}} </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="{{route('experience.edit', $e)}}" class="btn btn-primary">Edit</a>
                <form action="{{route('experience.destroy', $e)}}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>

            </div>
        </div>
         
    @endforeach

    <a type="button" href="{{route('experience.create')}}" class="btn btn-primary mt-3">Add Another Experience</a>


@endsection