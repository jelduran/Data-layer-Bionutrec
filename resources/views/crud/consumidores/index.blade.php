<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Consumidores') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Consumidores</a></li>
    <li class="breadcrumb-item active">Ver Consumidores</li>
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
                  @foreach ($consumidores as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nombres }}</td>
                    <td>{{ $item->apellidos }}</td>
                    <td>{{ $item->edad }}</td>
                    <td>{{ $item->genero }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->direccion }}</td>
                    <td>{{ $item->departamento }}</td>
                    <td>{{ $item->ciudad }}</td>
                    <td class="col-md-2">
                      <a href="{{ url('/consumidores/' . $item->id) }}" title="Ver Consumidor"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                          Ver</button></a>
                      <a href="{{ url('/consumidores/' . $item->id . '/edit') }}" title="Editar Consumidor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          Editar</button></a>
                      <form method="POST" action="{{ url('/consumidores' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Borrar Consumidor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>
                          Borrar</button>
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