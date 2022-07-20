<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Crear Medico') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="../medicos">Medicos</a></li>
    <li class="breadcrumb-item active">Crear Medico</li>
  </x-slot>
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Datos del Medico</div>
          <div class="card-body">

            <form action="{{ url('medicos') }}" method="post">
              {!! csrf_field() !!}
              <label>Nombres</label></br>
              <input type="text" name="nombres" id="nombres" class="form-control"></br>
              <label>Apellidos</label></br>
              <input type="text" name="apellidos" id="apellidos" class="form-control"></br>
              <label>Especialidad</label></br>
              <input type="text" name="especialidad" id="especialidad" class="form-control"></br>
              <label>Institucion</label></br>
              <input type="text" name="institucion" id="institucion" class="form-control"></br>
              <label>Panel</label></br>
              <input type="text" name="panel" id="panel" class="form-control"></br>
              <label>Email</label></br>
              <input type="text" name="email" id="email" class="form-control"></br>
              <label>Telefono</label></br>
              <input type="text" name="telefono" id="telefono" class="form-control"></br>
              <label>Departamento</label></br>
              <input type="text" name="departamento" id="departamento" class="form-control"></br>
              <label>Ciudad</label></br>
              <input type="text" name="ciudad" id="ciudad" class="form-control"></br>
              <input type="checkbox" name="habeas_data" id="autorizacion" value="si">
              <label for="autorizacion"> Autorizo a Bionutrec a conservar mis datos y a contactarme a través de correo electrónico.</label><br>
              <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

          </div>
        </div>
      </div>
    </div>
</x-app-layout>