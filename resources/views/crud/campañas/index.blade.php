<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Campañas') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Campa&ntilde;as</a></li>
    <li class="breadcrumb-item active">Ver Campa&ntilde;as</li>
  </x-slot>

  <div class="row">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <a href="{{ url('/consumidores/create') }}" class="btn btn-success btn-sm" title="Agregar Nuevo Consumidor">
              <i class="fa fa-plus" aria-hidden="true"></i> Nuevo
            </a>
            <br />
            <br />
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripci&oacute;n</th>
                    <th>Objetivo</th>
                    <th>Inicia</th>
                    <th>Finaliza</th>
                    <th>Visual</th>
                    <th>Registros</th>
                  </tr>
                </thead>
                <tbody>
                  {{--@foreach ($consumidores as $item)--}}
                  <tr>
                    <td>1</td>
                    <td>Conoce todo acerca de los Probioticos</td>
                    <td>Esta campaña ofrece el 20% de descuento en el agregador Olimpica para quienes dejen sus datos en la p&aacute;gina</td>
                    <td>Registro de consumidores</td>
                    <td>2022-7-01 00:00:00</td>
                    <td>2022-7-31 00:00:00</td>
                    <td><img src="{{asset('img/campaign_jul_thumbnail.png')}}" alt="Imagen" width="320" height="320"></td>
                    <td class="col-md-2">
                      <a href="{{ url('/registrados/') }}" title="Ver Registros"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                          Ver Registros</button></a>
                    </td>
                  </tr>
                  {{--@endforeach--}}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>