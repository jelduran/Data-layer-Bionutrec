<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
  public $timestamps = false;
  protected $table = 'instituciones';
  protected $primaryKey = 'id';
  protected $fillable = ['nombre', 'tipo', 'sede', 'direccion', 'sitioweb', 'telefono', 'departamento', 'ciudad'];
}
