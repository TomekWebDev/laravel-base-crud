@extends('layouts.app')

@section('main-content')

    @if ($errors->any())
        <div class="alert alert-danger my-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form method="POST" action="{{ route('comics.store') }}">

        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="">
            {{-- Errori inline --}}
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" id=""></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Thumb</label>
            <input name="thumb" type="text" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input name="price" type="text" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label class="form-label">Series</label>
            <input name="series" type="text" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label class="form-label">Sale date</label>
            <input name="sale_date" type="text" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label class="form-label">Type</label>
            <input name="type" type="text" class="form-control" id="">
        </div>

        <button type="submit" class="btn btn-primary">Create record</button>
    </form>
@endsection
