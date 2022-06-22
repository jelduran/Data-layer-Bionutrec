<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
  public $timestamps = false;
  protected $table = 'representantes';
  protected $primaryKey = 'id';
  protected $fillable = ['nombres', 'apellidos', 'zona', 'lider', 'email', 'telefono', 'departamento', 'ciudad'];
}
