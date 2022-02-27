@extends('layout.Admin')
@section('section')
    <div class="h2">
        <h1 class="text-3xl text-bold uppercase">Fashion blogers</h1>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Table of Contents
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        @foreach ($blog as $blogs)
                            <a href="#{{ $blogs->id }}" class="h4 d-block">{{ $blogs->title }}</a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        @foreach ($blog as $blogs)
        <div>
                <h3 class="text mb-2" id="{{ $blogs->id }}">{{ $blogs->title }}</h3>
                <h2>
                    <img src="{{ asset('uploads/students/' . $blogs->image) }}" alt="...">
                </h2>
                <p>{{ $blogs->description }}</p>
                <div class="d-flex">
            </div>
        </div>
        @endforeach
    </div>
    <style>
        .accordion {
            padding: 30px 0;
        }

        .h2 {
            padding: 0 25%;
        }

        .h4 {
            color: blue;
        }

        h3 {
            font-size: 40px;
        }

        p {
            font-size: 20px;
            color: grey;
        }

        img {
            width: 100%;
        }

    </style>
@endsection
