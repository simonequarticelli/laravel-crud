@extends('app')
@section('page_title', 'store')
@section('content')
  <div class="container mt-4">
    <h2>Prodotto aggiunto con successo.</h2>
    <a class="btn btn-primary" href="{{ route('products.index') }}">Ritorna ai prodotti</a>
  </div>
@endsection
