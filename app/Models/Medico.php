<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
  public $timestamps = false;
  protected $table = 'medicos';
  protected $primaryKey = 'id';
  protected $fillable = ['nombres', 'apellidos', 'especialidad', 'institucion', 'panel', 'email', 'telefono', 'departamento', 'ciudad','habeas_data'];
}
