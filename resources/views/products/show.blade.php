@extends('app')
@section('page_title', 'show')
@section('content')
  <div class="container mt-4">
    <h2>Prodotto #{{ $product->id }} </h2>
    <ul>
      <li><strong>Nome: </strong>{{ $product->name }}</li>
      <li><strong>Descrizione: </strong>{{ $product->description }}</li>
      <li><strong>Prezzo: </strong>{{ $product->price }}</li>
    </ul>
    <a class="btn btn-primary" href="{{ route('products.index') }}">Ritorna ai prodotti</a>
  </div>
@endsection
