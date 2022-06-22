<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Crear Consumidor') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="/consumidores">Consumidores</a></li>
    <li class="breadcrumb-item active">Ver Consumidor</li>
  </x-slot>
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Datos de {{ $consumidores->nombres }} {{ $consumidores->apellidos }}</div>
          <div class="card-body">
              
              <form action="{{ url('/consumidores/' .$consumidores->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <label>Nombres</label></br>
                <input type="text" name="nombres" id="nombres" value="{{$consumidores->nombres}}" class="form-control"></br>
                <label>Apellidos</label></br>
                <input type="text" name="apellidos" id="apellidos" value="{{$consumidores->apellidos}}" class="form-control"></br>
                <label>Edad</label></br>
                <input type="text" name="edad" id="edad" value="{{$consumidores->edad}}" class="form-control"></br>
                <label>Genero</label></br>
                <input type="text" name="genero" id="genero" value="{{$consumidores->genero}}" class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email" id="email" value="{{$consumidores->email}}" class="form-control"></br>
                <label>Teléfono</label></br>
                <input type="text" name="telefono" id="telefono" value="{{$consumidores->telefono}}" class="form-control"></br>
                <label>Direcci&oacute;n</label></br>
                <input type="text" name="direccion" id="direccion" value="{{$consumidores->direccion}}" class="form-control"></br>
                <label>Departamento</label></br>
                <input type="text" name="departamento" id="departamento" value="{{$consumidores->departamento}}" class="form-control"></br>
                <label>Ciudad</label></br>
                <input type="text" name="ciudad" id="ciudad" value="{{$consumidores->ciudad}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
          
          </div>
        </div>
      </div>
    </div>
</x-app-layout>