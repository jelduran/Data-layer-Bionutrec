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
          <div class="card-header">Datos del Consumidor</div>
          <div class="card-body">
          
            <div class="card-body">
                <h2>{{ $consumidores->nombres }} {{ $consumidores->apellidos }}</h2>
                <p class="card-text">Edad : {{ $consumidores->edad }}</p>
                <p class="card-text">Genero : {{ $consumidores->genero }}</p>
                <p class="card-text">Email : {{ $consumidores->email }}</p>
                <p class="card-text">Telefono : {{ $consumidores->telefono }}</p>
                <p class="card-text">Direcci&oacute;n : {{ $consumidores->direccion }}</p>
                <p class="card-text">Departamento : {{ $consumidores->departamento }}</p>
                <p class="card-text">Ciudad : {{ $consumidores->ciudad }}</p>
            </div>
              
            </hr>
          
          </div>
        </div>
      </div>
    </div>
</x-app-layout>