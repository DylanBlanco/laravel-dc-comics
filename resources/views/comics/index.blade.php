@extends('layouts.app')

@section('page-title', 'comics')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Laravel Comics
            </h1>
        </div>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Tipo</th>
                <th scope="col">Prezzo</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row"> {{ $comic->id }} </th>
                        <td> {{ $comic->title }} </td>
                        <td> {{ $comic->series }} </td>
                        <td> {{ $comic->type }} </td>
                        <td> {{ number_format($comic->price, 2, ',', '.') }} €</td>
                        <td>
                            <a 
                            href="{{ route('comics.show', ['comic' => $comic->id]) }}"
                            class="btn btn-primary"> Vedi</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
