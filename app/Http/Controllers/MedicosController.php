<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;

class MedicosController extends Controller
{
  public function index()
  {
      $medicos = Medico::all();
      return view ('crud.medicos.index')->with('medicos', $medicos);
  }
  
  public function create()
  {
      return view('crud.medicos.create');
  }

  public function store(Request $request)
  {
      $input = $request->all();
      Medico::create($input);
      return redirect('medicos')->with('flash_message', 'Medico Addedd!');  
  }
  
  public function show($id)
  {
      $medico = Medico::find($id);
      return view('crud.medicos.show')->with('medicos', $medico);
  }
  
  public function edit($id)
  {
      $medico = Medico::find($id);
      return view('crud.medicos.edit')->with('medicos', $medico);
  }

  public function update(Request $request, $id)
  {
      $medico = Medico::find($id);
      $input = $request->all();
      $medico->update($input);
      return redirect('medicos')->with('flash_message', 'medico Updated!');  
  }

  public function destroy($id)
  {
      Medico::destroy($id);
      return redirect('medicos')->with('flash_message', 'Medico deleted!');  
  }
}
