@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">
                            {{ $comics->title }}
                        </h1>
                    </div>
                </div>

            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <div>
                            <div>
                                Descrizione:
                            </div>
                            <p>
                                {{ $comics->description }}
                            </p>
                        </div>
                        <div>
                            <span class="fw-bold">
                                Prezzo:
                            </span>
                            <span>
                                {{ $comics->price }}€
                            </span>
                        </div>
                        <div>
                            <span class="fw-bold">
                                Serie:
                            </span>
                            <span>
                                {{ $comics->series }}                           
                            </span>
                        </div>
                        <div>
                            <span class="fw-bold">
                                Data uscita:
                            </span>
                            <span>
                                {{ $comics->sale_date }}
                            </span>
                        </div>
                        <div>
                            <span class="fw-bold">
                                Tipo:
                            </span>
                            <span>
                                {{ $comics->type }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="text-center py-2">
                    <a href="{{ route('comics.index') }}">
                        <button type="button" class="btn btn-danger">
                            Return
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
