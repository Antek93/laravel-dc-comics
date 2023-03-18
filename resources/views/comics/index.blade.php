@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">
                           Tutti i prodotti
                        </h1>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col text-center my-3">
                <a href="{{ route('comics.create') }}" class="btn btn-success mx-2">
                    Crea nuovo prodotto
                </a>
            </div>
        </div>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-12">
                    <div class="card text-center">
                        <div class="card-body my-3">
                            <h3 class="card-title">{{ $comic->title }}</h3>
                            <div class="d-flex justify-content-center py-3">
                                <div>
                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">
                                        Vedi dettagli
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning mx-2">
                                        Modifica
                                    </a>
                                </div>
                                <div>
                                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Elimina
                                        </button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
