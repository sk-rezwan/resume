@extends('layouts.app')

@section('content')
    <div class="container">      
        @if(session()->has('errors'))
          @foreach($errors->all() as $e)
            <div class="alert alert-danger">
              {{ $e }}
            </div>
          @endforeach        
        @endif

        <form action="/user-detail" method="POST">
          @csrf
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="E-mail Address">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
              </div>
              <div class="form-group">
                <label>Address</label>
                <textarea type="text" name="address" id="address" class="form-control" placeholder="Full Address"></textarea>
              </div>
              <div class="form-group">
                <label>Summary</label>
                <textarea type="text" name="summary" id="summary" class="form-control" placeholder="Summary"></textarea>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>    
@endsection