@extends('layouts.app')

@section('main')
    <div class="comics-section">

        <div class="container py-5">

            <div>
                <a href="{{ route('comics.create') }}">Create Comic</a>
            </div>

            <div class=" d-flex flex-wrap">

                @foreach ($comics as $elem)
                    <div class="card-container">
                        <div class="card-image">

                            <img class="card-img" class="comic-image" src="{{ $elem['thumb'] }}" alt="Card image cap">

                        </div>

                        <div class="card-body">
                            <h5 class="card-title fs-6 text-white">

                                <a href="{{ route('comics.show', $elem->id) }}">

                                    {{ $elem['title'] }}

                                </a>


                            </h5>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </div>

    {{ $comics->links() }}
@endsection
