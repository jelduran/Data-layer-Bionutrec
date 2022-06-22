<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transferencista;
use Illuminate\Support\Facades\DB;

class TransferencistasController extends Controller
{
  public function index()
  {
      $transferencistas = Transferencista::all();
      return view ('crud.transferencistas.index')->with('transferencistas', $transferencistas);
  }
  
  public function create()
  {
      return view('crud.transferencistas.create');
  }

  public function store(Request $request)
  {
      $input = $request->all();
      Transferencista::create($input);
      return redirect('transferencistas')->with('flash_message', 'Transferencista Addedd!');  
  }
  
  public function show($id)
  {
      $transferencista = Transferencista::find($id);
      return view('crud.transferencistas.show')->with('transferencistas', $transferencista);
  }
  
  public function edit($id)
  {
      $transferencista = Transferencista::find($id);
      return view('crud.transferencistas.edit')->with('transferencistas', $transferencista);
  }

  public function update(Request $request, $id)
  {
      $transferencista = Transferencista::find($id);
      $input = $request->all();
      $transferencista->update($input);
      return redirect('transferencistas')->with('flash_message', 'transferencista Updated!');  
  }

  public function destroy($id)
  {
      Transferencista::destroy($id);
      return redirect('transferencistas')->with('flash_message', 'Transferencista deleted!');  
  }
  
  public function index_visitas_dependientes()
  {
      $visitas_dependientes = DB::table('visitas_dependiente')
                          ->join('transferencistas','transferencista','=','transferencistas.id')
                          ->join('dependientes','dependiente','=','dependientes.id')
                          ->select(
                            'transferencistas.nombres as transfer_nombres',
                            'transferencistas.apellidos as transfer_apellidos',
                            'dependientes.nombres as dep_nombres',
                            'dependientes.apellidos as dep_apellidos',
                            'visitas_dependiente.material',
                            'visitas_dependiente.invitacion',
                            'visitas_dependiente.fecha_hora')
                          ->get();
      
      return view ('crud.transferencistas.index_visitas')->with('visitas_dependientes', $visitas_dependientes);
  }
}
