@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>
                Modifica un fumetto
            </h1>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('comics.update', $comics->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="title"
                            aria-describedby="emailHelp" placeholder="Nome del fumetto" required
                            value="{{ $comics->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input name="description" type="text" class="form-control" id="description" required
                            placeholder="Descrizione del fumetto"
                            value="{{ $comics->description }}">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumbnails</label>
                        <input name="thumb" type="text" class="form-control" id="thumb"
                            placeholder="Inserisci link immagine"
                            value="{{ $comics->thumb }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo del prodotto</label>
                        <input name="price" type="text" class="form-control" id="price" required
                            placeholder="Inserisci prezzo del prodotto"
                            value="{{ $comics->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie del prodotto</label>
                        <input name="series" type="text" class="form-control" id="series" required
                            placeholder="Inserisci serie del prodotto"
                            value="{{ $comics->series }}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input name="sale_date" type="text" class="form-control" id="sale_date" required
                            placeholder="Inserisci data di uscita del prodotto "
                            value="{{ $comics->sale_date }}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Inserisci tipo prodotto</label>
                        <input name="type" type="text" class="form-control" id="type" required
                            placeholder="Inserisci tipo di prodotto"
                            value="{{ $comics->type }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifica</button>
                </form>
            </div>
        </div>
    </div>
@endsection
