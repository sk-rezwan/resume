@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to Resume Builder</h1>
        <a href="{{route('user-detail.create')}}" class="btn btn-primary" role="button">Build Your Resume Now</a>
    </div>    
@endsection