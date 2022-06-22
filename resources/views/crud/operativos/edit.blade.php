<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Editar Operativo') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('operativos.index')}}">Operativos</a></li>
    <li class="breadcrumb-item active">Ver Operativo</li>
  </x-slot>
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Datos de {{ $operativos->nombres }} {{ $operativos->apellidos }}</div>
          <div class="card-body">
              
              <form action="{{ url('/operativos/' .$operativos->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <label>Nombres</label></br>
                <input type="text" name="nombres" id="nombres" value="{{$operativos->nombres}}" class="form-control"></br>
                <label>Apellidos</label></br>
                <input type="text" name="apellidos" id="apellidos" value="{{$operativos->apellidos}}" class="form-control"></br>
                <label>Cargo</label></br>
                <input type="text" name="cargo" id="cargo" value="{{$operativos->cargo}}" class="form-control"></br>
                <label>Jefe</label></br>
                <input type="text" name="jefe" id="jefe" value="{{$operativos->jefe}}" class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email" id="email" value="{{$operativos->email}}" class="form-control"></br>
                <label>Teléfono</label></br>
                <input type="text" name="telefono" id="telefono" value="{{$operativos->telefono}}" class="form-control"></br>
                <label>Departamento</label></br>
                <input type="text" name="departamento" id="departamento" value="{{$operativos->departamento}}" class="form-control"></br>
                <label>Ciudad</label></br>
                <input type="text" name="ciudad" id="ciudad" value="{{$operativos->ciudad}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
          
          </div>
        </div>
      </div>
    </div>
</x-app-layout>