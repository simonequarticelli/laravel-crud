<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  // imposto le colonne create_at e update_at a false
  // public $timestamps = false;

  // definisco i nomi delle colonne della mia tabella
  // per essere popolate automaticamente con il metodo ->fill
  protected $fillable = ['name', 'description', 'price'];



}
