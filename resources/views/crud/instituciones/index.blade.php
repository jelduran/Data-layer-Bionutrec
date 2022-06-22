<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Instituciones') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="../instituciones">Instituciones</a></li>
    <li class="breadcrumb-item active">Ver Instituciones</li>
  </x-slot>

  <div class="row">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <a href="{{ url('/instituciones/create') }}" class="btn btn-success btn-sm" title="Agregar Nueva Institucion">
              <i class="fa fa-plus" aria-hidden="true"></i> Nueva
            </a>
            <br />
            <br />
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Sede</th>
                    <th>Dirección</th>
                    <th>Sitio Web</th>
                    <th>Telefono</th>
                    <th>Departamento</th>
                    <th>Ciudad</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($instituciones as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->tipo }}</td>
                    <td>{{ $item->sede }}</td>
                    <td>{{ $item->direccion }}</td>
                    <td>{{ $item->sitioweb }}</td>
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->departamento }}</td>
                    <td>{{ $item->ciudad }}</td>
                    <td>
                      <a href="{{ url('/instituciones/' . $item->id) }}" title="Ver Transferencista"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                          View</button></a>
                      <a href="{{ url('/instituciones/' . $item->id . '/edit') }}" title="Editar Transferencista"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          Edit</button></a>
                      <form method="POST" action="{{ url('/instituciones' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Borrar Transferencista" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>
                          Delete</button>
                      </form>
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