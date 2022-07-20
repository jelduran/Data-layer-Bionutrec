<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Visitas a Médicos') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="/representantes">Visitas a Médicos</a></li>
    <li class="breadcrumb-item active">Ver Visitas a Médicos</li>
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
                    <th>Medico</th>
                    <th>Representante</th>
                    <th>Registro en Website?</th>
                    <th>Recibio email mensual?</th>
                    <th>Recibio Muestra</th>
                    <th>Fecha y Hora</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($visitas_medicos as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->med_nombres }} {{ $item->med_apellidos }}</td>
                    <td>{{ $item->rep_nombres }} {{ $item->rep_apellidos }}</td>
                    <td class="text-center">
                      @if ($item->registro)
                        <label class="badge badge-success">Si</label>
                      @else
                        <label class="badge badge-danger">No</label>                          
                      @endif
                    </td>
                    <td class="text-center">
                      @if ($item->mail)
                        <label class="badge badge-success">Si</label>
                      @else
                        <label class="badge badge-danger">No</label>                          
                      @endif
                    </td>
                    <td class="text-center">
                      @if ($item->muestra)
                        <label class="badge badge-success">Si</label>
                      @else
                        <label class="badge badge-danger">No</label>                          
                      @endif
                    </td>
                    <td>{{ $item->fecha_hora }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
  </div>
</x-app-layout>