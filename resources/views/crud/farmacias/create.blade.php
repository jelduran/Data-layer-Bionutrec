<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Crear Farmacia') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="../farmacias">Farmacias</a></li>
    <li class="breadcrumb-item active">Crear Farmacia</li>
  </x-slot>
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Datos del Farmacia</div>
          <div class="card-body">

            <form action="{{ url('farmacias') }}" method="post">
              {!! csrf_field() !!}
              <label>Nombre</label></br>
              <input type="text" name="nombre" id="nombre" class="form-control"></br>
              <label>Sede</label></br>
              <input type="text" name="sede" id="sede" class="form-control"></br>
              <label>Dirección</label></br>
              <input type="text" name="direccion" id="direccion" class="form-control"></br>
              <label>Sitio Web</label></br>
              <input type="text" name="sitioweb" id="sitioweb" class="form-control"></br>
              <label>Telefono</label></br>
              <input type="text" name="telefono" id="telefono" class="form-control"></br>
              <label>Departamento</label></br>
              <input type="text" name="departamento" id="departamento" class="form-control"></br>
              <label>Ciudad</label></br>
              <input type="text" name="ciudad" id="ciudad" class="form-control"></br>
              <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

          </div>
        </div>
      </div>
    </div>
</x-app-layout>