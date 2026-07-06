@extends('layouts.app')

@section('title', 'Dettagli transazione')

@section('content')
    <div class="transaction-details">
        <h1>Dettagli transazione</h1>
        <p><strong>Name:</strong> {{ $transaction->name }}</p>
        <p><strong>Date:</strong> {{ $transaction->date }}</p>
        <p><strong>Amount:</strong> {{ $transaction->amount }}</p>
        <p><strong>Category:</strong> {{ $transaction->category }}</p>
        <p><strong>Description:</strong> {{ $transaction->description }}</p>
    </div>
@endsection
