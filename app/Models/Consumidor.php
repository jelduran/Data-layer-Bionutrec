<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumidor extends Model
{
  public $timestamps = false;
  protected $table = 'consumidores';
  protected $primaryKey = 'id';
  protected $fillable = ['nombres', 'apellidos', 'edad', 'genero', 'email', 'telefono', 'direccion', 'departamento', 'ciudad'];
}
