<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Roles') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Roles</a></li>
    <li class="breadcrumb-item active">Ver Roles</li>
  </x-slot>
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adminitrar Roles</h2>
        </div>

        <div class="pull-right">
        @can('role-create')
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Crear Nuevo Rol</a>
            @endcan
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Nombre</th>
     <th width="280px">Acción</th>
  </tr>

    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Ver</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Editar</a>
            @endcan

            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>  
</x-app-layout>