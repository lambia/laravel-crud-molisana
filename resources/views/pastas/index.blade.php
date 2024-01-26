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
                        @if ($item->image)
                            <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->title }}">
                        @else
                            <img src="https://upload.wikimedia.org/wikipedia/it/4/41/Logo_PASTA_LA_MOLISANA.png"
                                class="card-img-top" alt="{{ $item->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            {{-- <p class="card-text">{{ $item->description }}</p> --}}
                            <p class="card-text">
                                Tempo di cottura: {{ $item->cooking_time }}<br>
                                Pasta {{ $item->type }}
                            </p>
                            <a href="{{ route('pastas.show', $item->id) }}" class="btn btn-primary">Dettagli</a>
                            <a href="{{ route('pastas.edit', $item->id) }}" class="btn btn-warning">Modifica</a>


                            <form action="{{ route('pastas.destroy', $item->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Cancella" class="btn btn-danger">
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
