<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consumidor;

class ConsumidoresController extends Controller
{
  public function index()
  {
      $consumidores = Consumidor::all();
      return view ('crud.consumidores.index')->with('consumidores', $consumidores);
  }
  
  public function create()
  {
      return view('crud.consumidores.create');
  }

  public function store(Request $request)
  {
      $input = $request->all();
      Consumidor::create($input);
      return redirect('consumidores')->with('flash_message', 'Consumidor Addedd!');  
  }
  
  public function show($id)
  {
      $consumidor = Consumidor::find($id);
      return view('crud.consumidores.show')->with('consumidores', $consumidor);
  }
  
  public function edit($id)
  {
      $consumidor = Consumidor::find($id);
      return view('crud.consumidores.edit')->with('consumidores', $consumidor);
  }

  public function update(Request $request, $id)
  {
      $consumidor = Consumidor::find($id);
      $input = $request->all();
      $consumidor->update($input);
      return redirect('consumidores')->with('flash_message', 'consumidor Updated!');  
  }

  public function destroy($id)
  {
      Consumidor::destroy($id);
      return redirect('consumidores')->with('flash_message', 'Consumidor deleted!');  
  }
}
