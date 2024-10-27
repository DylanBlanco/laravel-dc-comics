@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<h1>
    {{ $comic->title }}
</h1>

<div class="row">
    <div class="col-5 mb-3 mb-sm-0">
        <div class="card">
            <div class="card-body">
                <img src="{{ $comic->thumb }}" alt="$comic->$title" class="figure-img img-fluid rounded">
                <ul>
                    <li>
                        Serie: {{ $comic->series }}
                    </li>
                    <li>
                        Tipo: {{ $comic->type }}
                    </li>
                    <li>
                        Prezzo: {{ number_format($comic->price, 2, ',', '.') }}€
                    </li>
                    <li>
                        Data Vendita: {{ $comic->sale_date }}
                    </li>
                    <li>
                        Artisti:
                        <ul>
                            @foreach (json_decode($comic->artists, true) as $artist)
                                <li>
                                    {{ $artist }}    
                                </li>                                
                            @endforeach
                        </ul>
                    <li>
                        Scrittori:
                        <ul>
                            @foreach (json_decode($comic->writers, true) as $writer)
                                <li>
                                    {{ $writer }}    
                                </li>                                
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <p class="card-text">
                    {{ $comic->description }}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
