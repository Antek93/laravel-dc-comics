@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>
                Crea un nuovo fumetto
            </h1>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="title"
                            aria-describedby="emailHelp" placeholder="Nome del fumetto" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input name="description" type="text" class="form-control" id="description" required
                            placeholder="Descrizione del fumetto">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumbnails</label>
                        <input name="thumb" type="text" class="form-control" id="thumb"E
                            placeholder="Inserisci link immagine">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo del prodotto</label>
                        <input name="price" type="text" class="form-control" id="price" required
                            placeholder="Inserisci prezzo del prodotto">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie del prodotto</label>
                        <input name="series" type="text" class="form-control" id="series" required
                            placeholder="Inserisci serie del prodotto">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input name="sale_date" type="text" class="form-control" id="sale_date" required
                            placeholder="Inserisci data di uscita del prodotto ">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Inserisci tipo prodotto</label>
                        <input name="type" type="text" class="form-control" id="type" required
                            placeholder="Inserisci tipo di prodotto">
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>
@endsection
