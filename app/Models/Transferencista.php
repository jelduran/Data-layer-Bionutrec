<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transferencista extends Model
{
  public $timestamps = false;
  protected $table = 'transferencistas';
  protected $primaryKey = 'id';
  protected $fillable = ['nombres', 'apellidos', 'zona', 'lider', 'email', 'telefono', 'departamento', 'ciudad'];
}
