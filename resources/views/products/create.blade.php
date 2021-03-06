@extends('app')

@section('page_title', 'create')

@section('content')
  <div class="container mt-4">
    <h3 class="mb-3">Inserisci un nuovo prodotto</h3>

    {{-- visualizzo errori di validazione --}}
    {{-- @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif --}}

    {{-- definisco la rotta per l'invio dei dati --}}
    <form method="post" action="{{ route('products.store') }}">
      {{-- @csrf --> controllo validità form --}}
      @csrf
    <div class="form-group">
      <label for="name">Nome prodotto</label>
      {{-- usare nel name="" il nome delle colonne della tabella --}}
      {{-- assegnare a value old permette di mantenere l'inserimento nel campo dall'utente --}}
      <input type="text" class="form-control" name="name" placeholder="inserisci prodotto" value="{{ old('name') }}">

      {{-- @error con il nome dell'attributo html - visualizzo messaggio di errore  --}}
      @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>
    <div class="form-group">
      <label for="description">Descrizione</label>
      {{-- nella texarea no value ma inserimento dentro al tag --}}
      <textarea type="text" class="form-control" name="description" placeholder="inserisci la descrizione">{{ old('description') }}</textarea>

      @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>
    <div class="form-group">
      <label for="price">Prezzo</label>
      <input type="text" class="form-control" name="price" placeholder="inserisci il prezzo" value="{{ old('price') }}">

      @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>
    <button type="submit" class="btn btn-primary">Aggiungi prodotto</button>
  </form>
  </div>
@endsection
