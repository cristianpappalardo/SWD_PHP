@extends('layouts.app')

@section('title', 'Crea transazione')

@section('content')
    <div class="transaction-create-form">
        <h1>Create Transaction</h1>
        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="date">Date:</label>
                <input type="date" name="date" id="date" required>
            </div>
            <div>
                <label for="amount">Amount:</label>
                <input type="number" name="amount" id="amount" step="0.01" required>
            </div>
            <div>
                <label for="category">Category:</label>
                <input type="text" name="category" id="category" required>
            </div>
            <div>
                <label for="description">Description:</label>
                <textarea name="description" id="description" required></textarea>
            </div>
            <button type="submit">Create Transaction</button>
        </form>
    </div>
@endsection