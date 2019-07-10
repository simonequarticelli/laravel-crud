@extends('app')

@section('page_title', 'edit')

@section('content')
  <div class="container mt-4">
    <h3 class="mb-3">Modifica prodotto: #{{ $product->id }}</h3>

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

    {{-- definisco la rotta per la modifica dei dati --}}
    <form method="post" action="{{ route('products.update', $product->id) }}">
      {{-- specifico il metodo PUT --}}
      @method('PUT')
      {{-- @csrf --> controllo validità form --}}
      @csrf
    <div class="form-group">
      <label for="name">Nome prodotto</label>
      {{-- usare nel name="" il nome delle colonne della tabella --}}
      {{-- assegnare a value old permette di mantenere l'inserimento nel campo dall'utente e se non c'è inserisco il nome --}}
      <input type="text" class="form-control" name="name" placeholder="inserisci prodotto" value="{{ old('name', $product->name) }}">

      {{-- @error con il nome dell'attributo html - visualizzo messaggio di errore  --}}
      @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>
    <div class="form-group">
      <label for="description">Descrizione</label>
      {{-- nella texarea no value ma inserimento dentro al tag --}}
      <textarea type="text" class="form-control" name="description" placeholder="inserisci la descrizione">{{ old('description', $product->description) }}</textarea>

      @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>
    <div class="form-group">
      <label for="price">Prezzo</label>
      <input type="text" class="form-control" name="price" placeholder="inserisci il prezzo" value="{{ old('price', $product->price) }}">

      @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>
    <button type="submit" class="btn btn-primary">Modifica prodotto</button>
  </form>
  </div>
@endsection
