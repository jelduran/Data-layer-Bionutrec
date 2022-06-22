<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Editar Médico') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="/medicos">Médicos</a></li>
    <li class="breadcrumb-item active">Editar Médico</li>
  </x-slot>
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Datos del Médico</div>
          <div class="card-body">
              
              <form action="{{ url('medicos/' .$medicos->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <label>Nombres</label></br>
                <input type="text" name="nombres" id="nombres" value="{{$medicos->nombres}}" class="form-control"></br>
                <label>Apellidos</label></br>
                <input type="text" name="apellidos" id="apellidos" value="{{$medicos->apellidos}}" class="form-control"></br>
                <label>Especialidad</label></br>
                <input type="text" name="especialidad" id="especialidad" value="{{$medicos->especialidad}}" class="form-control"></br>
                <label>Institución</label></br>
                <input type="text" name="institucion" id="institucion" value="{{$medicos->institucion}}" class="form-control"></br>
                <label>Panel</label></br>
                <input type="text" name="panel" id="panel" value="{{$medicos->panel}}" class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email" id="email" value="{{$medicos->email}}" class="form-control"></br>
                <label>Teléfono</label></br>
                <input type="text" name="telefono" id="telefono" value="{{$medicos->telefono}}" class="form-control"></br>
                <label>Departamento</label></br>
                <input type="text" name="departamento" id="departamento" value="{{$medicos->departamento}}" class="form-control"></br>
                <label>Ciudad</label></br>
                <input type="text" name="ciudad" id="ciudad" value="{{$medicos->ciudad}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
          
          </div>
        </div>
      </div>
    </div>
</x-app-layout>