@extends('layouts.app')

@section('main')
    <div class="blue-under-header bg-primary">
    </div>

    <div class="comic-container-positioned">
        <img src="{{ $single_comic['thumb'] }}" alt="">
        <div class="comic-book">
            COMIC BOOK
        </div>

        <div class="view-gallery">
            VIEW GALLERY
        </div>
    </div>

    <div class="show-card w-100 m-auto text-center py-5">

        <h2 class="">{{ $single_comic['title'] }}</h2>

        <div class="green-box p-2 m-auto bg-success text-white d-flex justify-content-around w-50">

            <div class="left-green d-flex justify-content-between w-75">
                <div>U.S. Price:{{ $single_comic['price'] }}</div>
                <div>AVAILABLE</div>
            </div>

            <div class="check-availability w-25">
                Check Availability
            </div>

        </div>

        <div class="p-2 m-auto d-flex justify-content-around w-50">
            <p>
                {{ $single_comic['description'] }}
            </p>
        </div>


    </div>


    <div class="w-100 bg-light">

        <div class="w-75 py-5 m-auto d-flex justify-content-between">

            {{-- <div class="talent">

                <h4>Talent</h4>

                <div class="separee w-100 bg-dark"></div>
                <div class="d-flex py-2">
                    <div class="w-25">Art by:</div>
                    <div class="w-75 text-primary">
                        @foreach ($single_comic['artists'] as $artist)
                            {{ $artist }},
                        @endforeach
                    </div>
                </div>
                <div class="separee w-100 bg-dark"></div>

                <div class="d-flex py-2">
                    <div class="w-25">Written by:</div>
                    <div class="w-75 text-primary">
                        @foreach ($single_comic['writers'] as $writer)
                            {{ $writer }},
                        @endforeach
                    </div>
                </div>
                <div class="separee w-100 bg-dark"></div>
            </div> --}}

            <div class="specs">

                <h4>Specs</h4>

                <div class="separee w-100 bg-dark"></div>
                <div class="d-flex py-2">
                    <div class="w-25">Series:</div>
                    <div class="w-75 text-primary">
                        {{ $single_comic['series'] }}
                    </div>
                </div>
                <div class="separee w-100 bg-dark"></div>

                <div class="d-flex py-2">
                    <div class="w-25">U.S. Price:</div>
                    <div class="w-75">
                        {{ $single_comic['price'] }}
                    </div>
                </div>
                <div class="separee w-100 bg-dark"></div>

                <div class="d-flex py-2">
                    <div class="w-25">On Sale Date:</div>
                    <div class="w-75">
                        {{ $single_comic['sale_date'] }}
                    </div>
                </div>
                <div class="separee w-100 bg-dark"></div>

                <div class="d-flex py-2">
                    <div class="w-25">Type:</div>
                    <div class="w-75">
                        {{ $single_comic['type'] }}
                    </div>
                </div>
                <div class="separee w-100 bg-dark"></div>

            </div>

        </div>

    </div>
@endsection
