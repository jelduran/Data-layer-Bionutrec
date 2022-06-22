<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
  public $timestamps = false;
  protected $table = 'farmacias';
  protected $primaryKey = 'id';
  protected $fillable = ['nombre', 'sede', 'direccion', 'sitioweb', 'telefono', 'departamento', 'ciudad'];
}
