@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">
                            Laravel DC-Comics
                        </h1>
                    </div>
                </div>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">
                    Vedi tutti i prodotti
                </a>

            </div>
        </div>
    </div>
@endsection
