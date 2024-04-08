@extends('layouts.index')
@section('content')
<div class="container">
  <div class="row">
    <div class="col md-6 m-auto">
           <form action="{{route('questions.store') }}" method="post" class="mt-4">
            @csrf 
            <div class="mb-3">
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" name="description" class="form-control @error('descirption') is-invalid @enderror" placeholder="description">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>    
                @enderror
            </div>
            <button type="submit" class="btn btn-dark btn-sm">Save</button>
        </form>
    </div>
  </div>
</div>
@endsection