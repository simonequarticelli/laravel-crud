@extends('app')

@section('page_title', 'create')

@section('content')
  <div class="container mt-4">
    <h3 class="mb-3">Inserisci un nuovo prodotto</h3>
    {{-- definisco la rotta per l'invio dei dati --}}
    <form method="post" action="{{ route('products.store') }}">
      {{-- @csrf --> controllo validità form --}}
      @csrf
    <div class="form-group">
      <label for="name">Nome prodotto</label>
      {{-- usare nel name="" il nome delle colonne della tabella --}}
      <input type="text" class="form-control" name="name" placeholder="inserisci prodotto">
    </div>
    <div class="form-group">
      <label for="description">Descrizione</label>
      <textarea type="text" class="form-control" name="description" placeholder="inserisci la descrizione"></textarea>
    </div>
    <div class="form-group">
      <label for="price">Prezzo</label>
      <input type="text" class="form-control" name="price" placeholder="inserisci il prezzo">
    </div>
    <button type="submit" class="btn btn-primary">Aggiungi prodotto</button>
  </form>
  </div>
@endsection
