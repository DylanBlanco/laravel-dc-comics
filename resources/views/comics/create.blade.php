@extends('layouts.app')

@section('page-title', 'Crea Comic')

@section('main-content')
<h1>
    Crea Comic
</h1>

<form action="{{ route('comics.store') }}" method="post">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" required id="title" name="title" placeholder="Inserisci il titolo...">
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Copertina</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci la copertina...">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" required id="price" name="price" step="0.01" placeholder="Inserisci il prezzo...">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci una serie...">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Data di Vendita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di vendita...">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <select class="form-select" id="type" name="type">
            <option selected>Selezione un tipo...</option>
            <option value="comic book">fumetto</option>
            <option value="graphic novel">graphic novel</option>
            <option value="3">Three</option>
        </select>
        <input type="date" class="form-control" id="type" name="type" placeholder="Inserisci il tipo...">
    </div>
    <div class="mb-3">
        <label for="artists" class="form-label">Artisti</label>
        <input type="text" class="form-control" required id="artists" name="artists" aria-describedby="artists-help" placeholder="Inserisci gli artisti...">
        <div id="artists-help" class="form-text">
            Inserisci i nomi degli artisti
        </div>
    </div>
    <div class="mb-3">
        <label for="writers" class="form-label">Scrittori</label>
        <input type="text" class="form-control" id="writers" name="writers" aria-describedby="writers-help" placeholder="Inserisci scrittori...">
        <div id="writers-help" class="form-text">
            Inserisci i nomi degli scrittori
        </div>
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Copertina</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci la copertina...">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-controll" id="description" name="description" cols="30" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success w-100">
            Aggiungi
        </button>
    </div>
</form>
@endsection
