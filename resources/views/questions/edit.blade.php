
@extends('layouts.index')
@section('content')
    <div class="container">
        <div class="row">
        <div class="col md-6 m-auto">
            <form action="{{ route('questions.update', ['question' => $question->id]) }}" method="post" class="mt-4">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <input type="text" value="{{ $question->title }}" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title">
                  @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <input type="text" value="{{ $question->description }}" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description">
                  @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-dark btn-sm">Edit</button>
              </form>
              
        </div>
        </div>
    </div>
  @endsection