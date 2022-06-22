<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Representante;
use Illuminate\Support\Facades\DB;

class RepresentantesController extends Controller
{
  public function index()
  {
      $representantes = Representante::all();
      return view ('crud.representantes.index')->with('representantes', $representantes);
  }
  
  public function create()
  {
      return view('crud.representantes.create');
  }

  public function store(Request $request)
  {
      $input = $request->all();
      Representante::create($input);
      return redirect('representantes')->with('flash_message', 'Representante Addedd!');  
  }
  
  public function show($id)
  {
      $representante = Representante::find($id);
      return view('crud.representantes.show')->with('representantes', $representante);
  }
  
  public function edit($id)
  {
      $representante = Representante::find($id);
      return view('crud.representantes.edit')->with('representantes', $representante);
  }

  public function update(Request $request, $id)
  {
      $representante = Representante::find($id);
      $input = $request->all();
      $representante->update($input);
      return redirect('representantes')->with('flash_message', 'representante Updated!');  
  }

  public function destroy($id)
  {
      Representante::destroy($id);
      return redirect('representantes')->with('flash_message', 'Representante deleted!');  
  }


  public function index_visitas_medicos()
  {
      $visitas_medicos =  DB::table('visitas_medico')
                          ->join('representantes','representante','=','representantes.id')
                          ->join('medicos','medico','=','medicos.id')
                          ->select(
                            'representantes.nombres as rep_nombres',
                            'representantes.apellidos as rep_apellidos',
                            'medicos.nombres as med_nombres',
                            'medicos.apellidos as med_apellidos',
                            'visitas_medico.registro',
                            'visitas_medico.mail',
                            'visitas_medico.muestra',
                            'visitas_medico.fecha_hora')
                          ->get();
      return view ('crud.representantes.index_visitas')->with('visitas_medicos', $visitas_medicos);
  }
}
