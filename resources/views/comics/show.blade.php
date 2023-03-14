@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">
                            Comic:
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
                        <p>
                            {{ $comic->description }}
                        </p>
                    </div>
                  </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
