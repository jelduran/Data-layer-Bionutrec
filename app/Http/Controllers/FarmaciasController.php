<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmacia;

class FarmaciasController extends Controller
{
  public function index()
  {
      $farmacias = Farmacia::all();
      return view ('crud.farmacias.index')->with('farmacias', $farmacias);
  }
  
  public function create()
  {
      return view('crud.farmacias.create');
  }

  public function store(Request $request)
  {
      $input = $request->all();
      Farmacia::create($input);
      return redirect('farmacias')->with('flash_message', 'Farmacia Addedd!');  
  }
  
  public function show($id)
  {
      $dependiente = Farmacia::find($id);
      return view('crud.farmacias.show')->with('farmacias', $dependiente);
  }
  
  public function edit($id)
  {
      $dependiente = Farmacia::find($id);
      return view('crud.farmacias.edit')->with('farmacias', $dependiente);
  }

  public function update(Request $request, $id)
  {
      $dependiente = Farmacia::find($id);
      $input = $request->all();
      $dependiente->update($input);
      return redirect('farmacias')->with('flash_message', 'dependiente Updated!');  
  }

  public function destroy($id)
  {
      Farmacia::destroy($id);
      return redirect('farmacias')->with('flash_message', 'Farmacia deleted!');  
  }
}
