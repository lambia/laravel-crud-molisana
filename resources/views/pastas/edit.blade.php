@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Modifica pasta</h2>
        </div>
        <div class="row">
            <form action="{{ route('pastas.update', $pasta->id) }}" method="POST">
                @csrf
                @method('PUT')
                {{-- title description type image cooking_time weight --}}
                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input disabled type="text" class="form-control" id="title" name="title"
                        value="{{ $pasta->title }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <input type="text" class="form-control" id="description" name="description"
                        value="{{ $pasta->description }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $pasta->type }}">
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
