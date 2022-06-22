<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependiente;

class DependientesController extends Controller
{
  public function index()
  {
      $dependientes = Dependiente::all();
      return view ('crud.dependientes.index')->with('dependientes', $dependientes);
  }
  
  public function create()
  {
      return view('crud.dependientes.create');
  }

  public function store(Request $request)
  {
      $input = $request->all();
      Dependiente::create($input);
      return redirect('dependientes')->with('flash_message', 'Dependiente Addedd!');  
  }
  
  public function show($id)
  {
      $dependiente = Dependiente::find($id);
      return view('crud.dependientes.show')->with('dependientes', $dependiente);
  }
  
  public function edit($id)
  {
      $dependiente = Dependiente::find($id);
      return view('crud.dependientes.edit')->with('dependientes', $dependiente);
  }

  public function update(Request $request, $id)
  {
      $dependiente = Dependiente::find($id);
      $input = $request->all();
      $dependiente->update($input);
      return redirect('dependientes')->with('flash_message', 'dependiente Updated!');  
  }

  public function destroy($id)
  {
      Dependiente::destroy($id);
      return redirect('dependientes')->with('flash_message', 'Dependiente deleted!');  
  }
}
