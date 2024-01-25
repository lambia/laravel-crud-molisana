@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>{{ $pasta->title }}</h2>
        </div>
        <div class="row">
            <p>{{ $pasta->description }}</p>
        </div>
    </div>
@endsection
