<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Editar Dependiente') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="/dependientes">Dependientes</a></li>
    <li class="breadcrumb-item active">Editar Dependiente</li>
  </x-slot>
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Datos del Dependiente</div>
          <div class="card-body">
              
              <form action="{{ url('dependientes/' .$dependientes->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <label>Nombres</label></br>
                <input type="text" name="nombres" id="nombres" value="{{$dependientes->nombres}}" class="form-control"></br>
                <label>Apellidos</label></br>
                <input type="text" name="apellidos" id="apellidos" value="{{$dependientes->apellidos}}" class="form-control"></br>
                <label>Farmacia</label></br>
                <input type="text" name="Farmacia" id="farmacia" value="{{$dependientes->farmacia}}" class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email" id="email" value="{{$dependientes->email}}" class="form-control"></br>
                <label>Telefono</label></br>
                <input type="text" name="telefono" id="telefono" value="{{$dependientes->telefono}}" class="form-control"></br>
                <label>Departamento</label></br>
                <input type="text" name="departamento" id="departamento" value="{{$dependientes->departamento}}" class="form-control"></br>
                <label>Ciudad</label></br>
                <input type="text" name="ciudad" id="ciudad" value="{{$dependientes->ciudad}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
          
          </div>
        </div>
      </div>
    </div>
</x-app-layout>