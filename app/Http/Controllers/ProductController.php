<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
      //query per visualizzare tutti i prodotti
      $products = Product::all();

      //query per visualizzare tutti i prodotti in ordine d'inserimento
      $products = Product::orderBy('id', 'desc')->get();

      //var_dump del contunuto
      // dd($producs);

      // compact --> passa un elemento (nomesenza-->$)
      return view('products.index', compact('products'));
    }


    public function create()
    {
      return view('products.create');
    }


    public function store(Request $request)
    {
      // ritorna un array di dati
      $dati = $request->all();

      // dd($dati);
      $nuovo_prodotto = new Product();
      // $nuovo_prodotto->name = $dati['name'];
      // $nuovo_prodotto->description = $dati['description'];
      // $nuovo_prodotto->price = $dati['price'];

      // metodo per assegnare valori definiti
      $nuovo_prodotto->fill($dati);
      $nuovo_prodotto->save();

      return view('products.store');

      // reindirizza sulla pagina dei prodotti
      // return redirect()->route('products.index');

    }


    public function show($product_id)
    {
      // con il metodo find cerco il prodotto in base all'id
      $product = Product::find($product_id);
      // dd($product_id);

      // se il prodotto è NULL reindirizzo alla pagina 404
      if (empty($product)) {
        abort(404);
      }

      return view('products.show', compact('product'));
    }

    //se si organizzano bene i nomi lo fa lui da solo cosi:
    // public function show(Product $product)
    // {
    //
    //   return view('products.show', compact('product'));
    // }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
