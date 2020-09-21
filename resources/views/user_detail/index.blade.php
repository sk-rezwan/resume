@extends('layouts.app')

@section('content')

<h3 class="">User Details</h3>
@foreach($details as $detail)
        <div class="card" style="">
            <div class="card-body">
            <h5 class="card-title">{{$detail->name}} - {{$detail->email}} - {{$detail->phone}}</h5>
              <p class="card-text"><b>Address:</b> {{$detail->address}}</p>
              

            </div>
        </div>
@endforeach

<a type="button" href="{{route('education.index')}}" class="btn btn-primary mt-3">See Education</a>

@endsection