<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Crear Institución') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="/instituciones">Instituciones</a></li>
    <li class="breadcrumb-item active">Ver Institución</li>
  </x-slot>
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Datos de la Institución</div>
          <div class="card-body">
              
              <form action="{{ url('instituciones/' .$instituciones->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <label>Nombre</label></br>
                <input type="text" name="nombre" id="nombre" value="{{$instituciones->nombre}}" class="form-control"></br>
                <label>Tipo</label></br>
                <input type="text" name="tipo" id="tipo" value="{{$instituciones->tipo}}" class="form-control"></br>
                <label>Sede</label></br>
                <input type="text" name="sede" id="sede" value="{{$instituciones->sede}}" class="form-control"></br>
                <label>Dirección</label></br>
                <input type="text" name="direccion" id="direccion" value="{{$instituciones->direccion}}" class="form-control"></br>
                <label>Sitio Web</label></br>
                <input type="text" name="sitioweb" id="sitioweb" value="{{$instituciones->sitioweb}}" class="form-control"></br>
                <label>Teléfono</label></br>
                <input type="text" name="telefono" id="telefono" value="{{$instituciones->telefono}}" class="form-control"></br>
                <label>Departamento</label></br>
                <input type="text" name="departamento" id="departamento" value="{{$instituciones->departamento}}" class="form-control"></br>
                <label>Ciudad</label></br>
                <input type="text" name="ciudad" id="ciudad" value="{{$instituciones->ciudad}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
          
          </div>
        </div>
      </div>
    </div>
</x-app-layout>