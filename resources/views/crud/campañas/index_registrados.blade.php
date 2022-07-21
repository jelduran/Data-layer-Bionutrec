<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Registros') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Registros</a></li>
    <li class="breadcrumb-item active">Ver Registros</li>
  </x-slot>

  <div class="row">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <!--<a href="{{ url('/campañas/create') }}" class="btn btn-success btn-sm" title="Agregar Nueva Campaña">
              <i class="fa fa-plus" aria-hidden="true"></i> Nuevo
            </a>-->
            <br />
            <br />
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Genero</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Direcci&oacute;n</th>
                    <th>Departamento</th>
                    <th>Ciudad</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($registrados as $item)
                  {{--dd($item)--}}
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->FNAME }}</td>
                    <td>{{ $item->LNAME }}</td>
                    <td>{{ $item->AGE }}</td>
                    <td>{{ $item->GENDER }}</td>
                    <td>{{ $item->{0} }}</td>
                    <td>{{ $item->PHONE }}</td>
                    <td>{{ $item->ADDRESS }}</td>
                    <td>{{ $item->REGION }}</td>
                    <td>{{ $item->CITY }}</td>
                    <td class="col-md-2">
                      <a href="{{ url('/registrados/') }}" title="Ver Info"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                          Ver Info</button></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>