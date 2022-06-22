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
          
                <div class="card-body">
                <h2>{{ $instituciones->nombre }}</h2>
                <p class="card-text">Tipo : {{ $instituciones->tipo }}</p>
                <p class="card-text">Sede : {{ $instituciones->sede }}</p>
                <p class="card-text">Dirección : {{ $instituciones->direccion }}</p>
                <p class="card-text">Sitio Web : {{ $instituciones->sitioweb }}</p>
                <p class="card-text">Telefono : {{ $instituciones->telefono }}</p>
                <p class="card-text">Departamento : {{ $instituciones->departamento }}</p>
                <p class="card-text">Ciudad : {{ $instituciones->ciudad }}</p>
          </div>
              
            </hr>
          
          </div>
        </div>
      </div>
    </div>
</x-app-layout>