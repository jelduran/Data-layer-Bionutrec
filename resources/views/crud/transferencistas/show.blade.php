<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Transferencista') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="/transferencistas">Transferencistas</a></li>
    <li class="breadcrumb-item active">Ver Transferencista</li>
  </x-slot>
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Datos del Transferencista</div>
          <div class="card-body">
          
                <div class="card-body">
                <h2>{{ $transferencistas->nombres }} {{ $transferencistas->apellidos }}</h2>
                <p class="card-text">Zona : {{ $transferencistas->zona }}</p>
                <p class="card-text">Lider : {{ $transferencistas->lider }}</p>
                <p class="card-text">Email : {{ $transferencistas->email }}</p>
                <p class="card-text">Telefono : {{ $transferencistas->telefono }}</p>
                <p class="card-text">Departamento : {{ $transferencistas->departamento }}</p>
                <p class="card-text">Ciudad : {{ $transferencistas->ciudad }}</p>
          </div>
              
            </hr>
          
          </div>
        </div>
      </div>
    </div>
</x-app-layout>