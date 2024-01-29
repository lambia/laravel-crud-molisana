@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Modifica pasta</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <form action="{{ route('pastas.update', $pasta->id) }}" method="POST">
                @csrf
                @method('PUT')
                {{-- title description type image cooking_time weight --}}
                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" value="{{ old('title') ?? $pasta->title }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <textarea type="text" class="form-control" id="description" name="description">{{ old('description') ?? $pasta->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">type</label>
                    <select class="form-select" id="type" name="type">
                        <option value="lunga" @selected(old('type', $pasta->type) == 'lunga')>Pasta lunga</option>
                        <option value="corta" @selected(old('type', $pasta->type) == 'corta')>Pasta corta</option>
                        <option value="cortissima" @selected(old('type', $pasta->type) == 'cortissima')>Pasta cortissima</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">image</label>
                    <input type="text" class="form-control" id="image" name="image" value="{{ $pasta->image }}">
                </div>
                <div class="mb-3">
                    <label for="cooking_time" class="form-label">cooking_time</label>
                    <input type="text" class="form-control" id="cooking_time" name="cooking_time"
                        value="{{ $pasta->cooking_time }}">
                </div>
                <div class="mb-3">
                    <label for="weight" class="form-label">weight</label>
                    <input type="text" class="form-control" id="weight" name="weight" value="{{ $pasta->weight }}">
                </div>
                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </div>
@endsection
