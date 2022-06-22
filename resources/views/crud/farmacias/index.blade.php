<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Farmacias') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="/farmacias">Farmacias</a></li>
    <li class="breadcrumb-item active">Ver Farmacias</li>
  </x-slot>

  <div class="row">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <a href="{{ url('/farmacias/create') }}" class="btn btn-success btn-sm" title="Agregar Nueva Farmacia">
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
                  @foreach ($farmacias as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->sede }}</td>
                    <td>{{ $item->direccion }}</td>
                    <td>{{ $item->sitioweb }}</td>
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->departamento }}</td>
                    <td>{{ $item->ciudad }}</td>
                    <td>
                      <a href="{{ url('/farmacias/' . $item->id) }}" title="Ver Farmacia"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                          View</button></a>
                      <a href="{{ url('/farmacias/' . $item->id . '/edit') }}" title="Editar Farmacia"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          Edit</button></a>
                      <form method="POST" action="{{ url('/farmacias' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Borrar Farmacia" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>
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