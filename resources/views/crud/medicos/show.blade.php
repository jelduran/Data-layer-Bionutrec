<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Crear Medico') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="../medicos">Medicos</a></li>
    <li class="breadcrumb-item active">Ver Medico</li>
  </x-slot>
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Pagina del Medico</div>
          <div class="card-body">
          
                <div class="card-body">
                <h2>{{ $medicos->nombres }} {{ $medicos->apellidos }}</h2>
                <p class="card-text">Especialidad : {{ $medicos->especialidad }}</p>
                <p class="card-text">Institucion : {{ $medicos->institucion }}</p>
                <p class="card-text">Panel : {{ $medicos->panel }}</p>
                <p class="card-text">Email : {{ $medicos->email }}</p>
                <p class="card-text">Telefono : {{ $medicos->telefono }}</p>
                <p class="card-text">Departamento : {{ $medicos->departamento }}</p>
                <p class="card-text">Ciudad : {{ $medicos->ciudad }}</p>
          </div>
              
            </hr>
          
          </div>
        </div>
      </div>
    </div>
</x-app-layout>