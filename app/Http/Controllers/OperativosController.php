<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operativo;

class OperativosController extends Controller
{
  public function index()
  {
      $operativos = Operativo::all();
      return view ('crud.operativos.index')->with('operativos', $operativos);
  }
  
  public function create()
  {
      return view('crud.operativos.create');
  }

  public function store(Request $request)
  {
      $input = $request->all();
      Operativo::create($input);
      return redirect('operativos')->with('flash_message', 'Operativo Addedd!');  
  }
  
  public function show($id)
  {
      $operativo = Operativo::find($id);
      return view('crud.operativos.show')->with('operativos', $operativo);
  }
  
  public function edit($id)
  {
      $operativo = Operativo::find($id);
      return view('crud.operativos.edit')->with('operativos', $operativo);
  }

  public function update(Request $request, $id)
  {
      $operativo = Operativo::find($id);
      $input = $request->all();
      $operativo->update($input);
      return redirect('operativos')->with('flash_message', 'operativo Updated!');  
  }

  public function destroy($id)
  {
      Operativo::destroy($id);
      return redirect('operativos')->with('flash_message', 'Operativo deleted!');  
  }
}
