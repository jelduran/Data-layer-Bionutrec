<x-app-layout>
  <x-slot name="header">
    <h5 class="m-0">{{ __('Ver Rol') }}</h5>
  </x-slot>

  <x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="/roles">Roles</a></li>
    <li class="breadcrumb-item active">Ver Rol</li>
  </x-slot>
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Ver Rol</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Atrás</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {{ $role->name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permisos:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
        </div>
    </div>
</div>
</x-app-layout>