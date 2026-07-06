@extends('layouts.app')

@section('title', 'Modifica transazione')

@section('content')
    <div class="transaction-update-form">
        <h1>Edit Transaction</h1>
        <form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ $transaction->name }}" required>
            </div>
            <div>
                <label for="date">Date:</label>
                <input type="date" name="date" id="date" value="{{ $transaction->date }}" required>
            </div>
            <div>
                <label for="amount">Amount:</label>
                <input type="number" name="amount" id="amount" step="0.01" value="{{ $transaction->amount }}" required>
            </div>
            <div>
                <label for="category">Category:</label>
                <input type="text" name="category" id="category" value="{{ $transaction->category }}" required>
            </div>
            <div>
                <label for="description">Description:</label>
                <textarea name="description" id="description" required>{{ $transaction->description }}</textarea>
            </div>
            <button type="submit">Update Transaction</button>
        </form>
    </div>
@endsection