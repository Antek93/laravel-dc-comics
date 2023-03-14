@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">
                            Comic.Index -  Tutti i prodotti
                        </h1>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title">{{ $comic->title }}</h3>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">
                                Vedi dettagli
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
