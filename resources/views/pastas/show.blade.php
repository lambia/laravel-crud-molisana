@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 bg-white">
                @if ($pasta->image)
                    <img src="{{ $pasta->image }}" class="card-img-top" alt="{{ $pasta->title }}">
                @else
                    <img src="https://upload.wikimedia.org/wikipedia/it/4/41/Logo_PASTA_LA_MOLISANA.png" class="card-img-top"
                        alt="{{ $pasta->title }}">
                @endif
            </div>
            <div class="col-6">
                <h2>{{ $pasta->title }}</h2>
                <p>{{ $pasta->description }}</p>
            </div>
        </div>
    </div>
@endsection
