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
        <div class="row">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <p>
                            {{ $comics->description }}
                        </p>
                        <div>
                            {{ $comics->price }}€
                        </div>
                        <div>
                            {{ $comics->series }}
                        </div>
                        <div>
                            {{ $comics->sale_date }}
                        </div>
                        <div>
                            {{ $comics->type }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
