<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institucion;

class InstitucionesController extends Controller
{
  public function index()
  {
      $instituciones = Institucion::all();
      return view ('crud.instituciones.index')->with('instituciones', $instituciones);
  }
  
  public function create()
  {
      return view('crud.instituciones.create');
  }

  public function store(Request $request)
  {
      $input = $request->all();
      Institucion::create($input);
      return redirect('instituciones')->with('flash_message', 'Institucion Addedd!');  
  }
  
  public function show($id)
  {
      $institucion = Institucion::find($id);
      return view('crud.instituciones.show')->with('instituciones', $institucion);
  }
  
  public function edit($id)
  {
      $institucion = Institucion::find($id);
      return view('crud.instituciones.edit')->with('instituciones', $institucion);
  }

  public function update(Request $request, $id)
  {
      $institucion = Institucion::find($id);
      $input = $request->all();
      $institucion->update($input);
      return redirect('instituciones')->with('flash_message', 'institucion Updated!');  
  }

  public function destroy($id)
  {
      Institucion::destroy($id);
      return redirect('instituciones')->with('flash_message', 'Institucion deleted!');  
  }
}

