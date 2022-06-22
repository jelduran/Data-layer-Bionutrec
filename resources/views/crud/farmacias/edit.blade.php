<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Editar Farmacia') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="/farmacias">Farmacias</a></li>
    <li class="breadcrumb-item active">Editar Farmacia</li>
  </x-slot>
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Datos de la Farmacia</div>
          <div class="card-body">
              
              <form action="{{ url('farmacias/' .$farmacias->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <label>Nombre</label></br>
                <input type="text" name="nombre" id="nombre" value="{{$farmacias->nombre}}" class="form-control"></br>
                <label>Sede</label></br>
                <input type="text" name="sede" id="sede" value="{{$farmacias->sede}}" class="form-control"></br>
                <label>Dirección</label></br>
                <input type="text" name="direccion" id="direccion" value="{{$farmacias->direccion}}" class="form-control"></br>
                <label>Sitio Web</label></br>
                <input type="text" name="sitioweb" id="sitioweb" value="{{$farmacias->sitioweb}}" class="form-control"></br>
                <label>Teléfono</label></br>
                <input type="text" name="telefono" id="telefono" value="{{$farmacias->telefono}}" class="form-control"></br>
                <label>Departamento</label></br>
                <input type="text" name="departamento" id="departamento" value="{{$farmacias->departamento}}" class="form-control"></br>
                <label>Ciudad</label></br>
                <input type="text" name="ciudad" id="ciudad" value="{{$farmacias->ciudad}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
          
          </div>
        </div>
      </div>
    </div>
</x-app-layout>