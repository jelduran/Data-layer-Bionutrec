<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependiente extends Model
{
  public $timestamps = false;
  protected $table = 'dependientes';
  protected $primaryKey = 'id';
  protected $fillable = ['nombres', 'apellidos', 'farmacia', 'email', 'telefono', 'departamento', 'ciudad'];
}
