<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operativo extends Model
{
  public $timestamps = false;
  protected $table = 'operativos';
  protected $primaryKey = 'id';
  protected $fillable = ['nombres', 'apellidos', 'cargo', 'jefe', 'email', 'telefono', 'departamento', 'ciudad'];
}
