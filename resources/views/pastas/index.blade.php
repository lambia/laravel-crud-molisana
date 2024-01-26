@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>La nostra pasta</h2>
        </div>
        <div class="row">
            @foreach ($products as $item)
                <div class="col-4 pb-4">
                    <div class="card" style="height: 100%;">
                        {{-- <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->title }}"> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            {{-- <p class="card-text">{{ $item->description }}</p> --}}
                            <p class="card-text">
                                Tempo di cottura: {{ $item->cooking_time }}<br>
                                Pasta {{ $item->type }}
                            </p>
                            <a href="{{ route('pastas.show', $item->id) }}" class="btn btn-primary">Mostra dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
