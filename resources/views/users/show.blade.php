<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Usuario') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="/users">Usuarios</a></li>
    <li class="breadcrumb-item active">Ver Usuario</li>
  </x-slot>
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Ver Usuario</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Atrás</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {{ $user->name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Roles:</strong>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <label class="badge badge-success">{{ $v }}</label>
                @endforeach
            @endif
        </div>
    </div>
</div>
</x-app-layout>