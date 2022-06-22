<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Dependiente') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="../dependientes">Dependientes</a></li>
    <li class="breadcrumb-item active">Ver Dependiente</li>
  </x-slot>
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Datos del Dependiente</div>
          <div class="card-body">
          
                <div class="card-body">
                <h2>{{ $dependientes->nombres }} {{ $dependientes->apellidos }}</h2>
                <p class="card-text">Farmacia : {{ $dependientes->farmacia }}</p>
                <p class="card-text">Email : {{ $dependientes->email }}</p>
                <p class="card-text">Telefono : {{ $dependientes->telefono }}</p>
                <p class="card-text">Departamento : {{ $dependientes->departamento }}</p>
                <p class="card-text">Ciudad : {{ $dependientes->ciudad }}</p>
          </div>
              
            </hr>
          
          </div>
        </div>
      </div>
    </div>
</x-app-layout>