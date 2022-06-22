<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Operativo') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="/operativos">Operativos</a></li>
    <li class="breadcrumb-item active">Ver Operativo</li>
  </x-slot>
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Datos del Operativo</div>
          <div class="card-body">
          
            <div class="card-body">
                <h2>{{ $operativos->nombres }} {{ $operativos->apellidos }}</h2>
                <p class="card-text">Cargo : {{ $operativos->cargo }}</p>
                <p class="card-text">Jefe : {{ $operativos->jefe }}</p>
                <p class="card-text">Email : {{ $operativos->email }}</p>
                <p class="card-text">Telefono : {{ $operativos->telefono }}</p>
                <p class="card-text">Departamento : {{ $operativos->departamento }}</p>
                <p class="card-text">Ciudad : {{ $operativos->ciudad }}</p>
            </div>
              
            </hr>
          
          </div>
        </div>
      </div>
    </div>
</x-app-layout>