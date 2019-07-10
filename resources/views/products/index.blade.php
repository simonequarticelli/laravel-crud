@extends('app')

{{-- altro modo di scrivere titolo section
@section('page_title', 'prodotti') --}}
@section('page_title')
  prodotti
@endsection

@section('content')
  <div class="container mt-4">
    <h3 class="float-left mb-3">LISTA PRODOTTI</h3>
    <a href="{{ route('products.create')}}" class="btn btn-primary float-right mb-3">Aggiungi un prodotto</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NAME</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">PRICE</th>
        <th scope="col" class="text-center">ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      {{-- eseguo ciclo forelse per scorrere dati --}}
      @forelse ($products as $product)
        <tr>
          <th>{{ $product->id }}</th>
          <td>{{ $product->name }}</td>
          <td>{{ $product->description }}</td>
          <td>{{ $product->price }}</td>
          {{-- con route nell'href imposto pagina da visualizzare e identifico con id --}}
          <td class="text-center">
            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Visualizza</a>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-secondary">Modifica</a>
            <form class="delete_product_form d-inline" action="{{ route('products.destroy', $product->id) }}" method="post">
              {{-- specifico il metodo PUT --}}
              @method('DELETE')
              {{-- @csrf --> controllo validità form --}}
              @csrf
              <input class="btn btn-danger" type="submit" value="Cancella">
            </form>
          </td>
        </tr>
      @empty
        <tr>
          {{-- colspan --> definisce quante colonne occupare --}}
          <td colspan="5">Non ci sono prodotti</td>
        </tr>
      @endforelse
    @endsection
    </tbody>
  </table>
  </div>
