<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Visitas a Dependientes') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="/transferencistas">Visitas a Dependientes</a></li>
    <li class="breadcrumb-item active">Ver Visitas a Dependientes</li>
  </x-slot>
  
  <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <br />
            <br />
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Dependiente</th>
                    <th>Transferencista</th>
                    <th>Recibio Material?</th>
                    <th>Recibio Invitación?</th>
                    <th>Fecha y Hora</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($visitas_dependientes as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->dep_nombres }} {{ $item->dep_apellidos }}</td>
                    <td>{{ $item->transfer_nombres }} {{ $item->transfer_apellidos }}</td>
                    <td class="text-center">
                      @if ($item->material)
                        <label class="badge badge-success">Si</label>
                      @else
                        <label class="badge badge-danger">No</label>                          
                      @endif
                    </td>
                    <td class="text-center">
                      @if ($item->invitacion)
                        <label class="badge badge-success">Si</label>
                      @else
                        <label class="badge badge-danger">No</label>                          
                      @endif
                    </td>
                    <td class="text-center">{{ $item->fecha_hora }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
</x-app-layout>