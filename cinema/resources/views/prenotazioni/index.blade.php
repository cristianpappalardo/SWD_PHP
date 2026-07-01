@extends('layouts.app')
@section('content')
    <h1>Lista delle Prenotazioni</h1>
    <ul>
        @foreach ($prenotazioni as $prenotazione)
            <li>{{ $prenotazione->nome }} - Posti: {{ $prenotazione->posti_prenotati }}</li>
        @endforeach
    </ul>
@endsection
