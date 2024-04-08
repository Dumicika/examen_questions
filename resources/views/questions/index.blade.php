@extends('layouts.index')
@section('content')
<div class="container">
    <div class="row">
        <h4>Questions for you</h4>
        <div class="">
            @foreach ($questions as $key => $question)
              <ol style="--length: 5" role="list">
                <li id="question-{{ $loop->index }}" class="question-list" style="--i: {{ $loop->iteration }}">
                    <h2>{{$key+1}}</h2>
                  <h3>{{ $question->title }}</h3>
                  <p>{{ $question->description }}</p>
                  <div class="d-flex justify-content-between mt-2">
                    <a href="{{ route('questions.edit', ['question' => $question->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('questions.destroy', ['question' => $question->id]) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                  </div>
                </li>
              </ol>
            @endforeach
          </div>          
      </div>
    <a href="{{ route('questions.create') }}" class="btn btn-success">Add question</a>
  </div>
@endsection