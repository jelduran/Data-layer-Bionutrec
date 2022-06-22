<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Transferencistas') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="/transferencistas">Transferencistas</a></li>
    <li class="breadcrumb-item active">Ver Transferencistas</li>
  </x-slot>

  <div class="row">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <a href="{{ url('/transferencistas/create') }}" class="btn btn-success btn-sm" title="Agregar Nuevo Transferencista">
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
                    <th>Zona</th>
                    <th>Lider</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Departamento</th>
                    <th>Ciudad</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($transferencistas as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nombres }}</td>
                    <td>{{ $item->apellidos }}</td>
                    <td>{{ $item->zona }}</td>
                    <td>{{ $item->lider }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->departamento }}</td>
                    <td>{{ $item->ciudad }}</td>
                    <td>
                      <a href="{{ url('/transferencistas/' . $item->id) }}" title="Ver Transferencista"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                          View</button></a>
                      <a href="{{ url('/transferencistas/' . $item->id . '/edit') }}" title="Editar Transferencista"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          Edit</button></a>
                      <form method="POST" action="{{ url('/transferencistas' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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