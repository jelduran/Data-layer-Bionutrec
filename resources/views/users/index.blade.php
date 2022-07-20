<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Usuarios') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
    <li class="breadcrumb-item active">Ver Usuarios</li>
  </x-slot>

  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Administrar Usuarios</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Crear Nuevo Usuario</a>
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
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>

 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>

    <td>
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Ver</a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editar</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>
</x-app-layout>