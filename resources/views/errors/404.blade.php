{{-- creare cartella "errors" in views e inserire pagina personalizzata di errore --}}
@extends('app')
@section('page_title', 'error 404')
@section('content')
  <div class="container mt-4 text-center">
    <h2>Error 404</h2>
  </div>
@endsection
