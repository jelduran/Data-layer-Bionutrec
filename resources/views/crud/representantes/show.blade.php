<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Representante') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="/representantes">Representantes</a></li>
    <li class="breadcrumb-item active">Ver Representante</li>
  </x-slot>
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Datos del Representante</div>
          <div class="card-body">
          
                <div class="card-body">
                <h2>{{ $representantes->nombres }} {{ $representantes->apellidos }}</h2>
                <p class="card-text">Zona : {{ $representantes->zona }}</p>
                <p class="card-text">Lider : {{ $representantes->lider }}</p>
                <p class="card-text">Email : {{ $representantes->email }}</p>
                <p class="card-text">Telefono : {{ $representantes->telefono }}</p>
                <p class="card-text">Departamento : {{ $representantes->departamento }}</p>
                <p class="card-text">Ciudad : {{ $representantes->ciudad }}</p>
          </div>
              
            </hr>
          
          </div>
        </div>
      </div>
    </div>
</x-app-layout>