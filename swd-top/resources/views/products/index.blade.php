@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1>Products</h1>
    <p>Welcome to our product page! Here you can find a variety of products that we offer. Browse through our selection and
        find the perfect item for your needs.</p>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }} - {{ $product->description }} - {{ $product->price }}</li>
        @endforeach
    </ul>


@endsection()
