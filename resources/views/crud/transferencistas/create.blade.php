<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Crear Transferencista') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="/transferencistas">Transferencistas</a></li>
    <li class="breadcrumb-item active">Crear Transferencista</li>
  </x-slot>
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Datos del Transferencista</div>
          <div class="card-body">

            <form action="{{ url('transferencistas') }}" method="post">
              {!! csrf_field() !!}
              <label>Nombres</label></br>
              <input type="text" name="nombres" id="nombres" class="form-control"></br>
              <label>Apellidos</label></br>
              <input type="text" name="apellidos" id="apellidos" class="form-control"></br>
              <label>Zona</label></br>
              <input type="text" name="zona" id="zona" class="form-control"></br>
              <label>Lider</label></br>
              <input type="text" name="lider" id="lider" class="form-control"></br>
              <label>Email</label></br>
              <input type="text" name="email" id="email" class="form-control"></br>
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