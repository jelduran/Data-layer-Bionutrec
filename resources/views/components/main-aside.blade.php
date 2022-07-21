<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('img/bionutrec.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/user.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!--Informes-->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-scroll"></i>
                      <p>
                          Informes
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="/dashboard" class="nav-link">
                              <i class="fas fa-eye nav-icon"></i>
                              <p>Visitas Representantes</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/dashboard" class="nav-link">
                              <i class="fas fa-plus nav-icon"></i>
                              <p>Visitas Transferencistas</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('consumidores.create') }}" class="nav-link">
                              <i class="fas fa-cloud-download-alt"></i>
                              <p>Descargar Informes</p>
                          </a>
                      </li>
                  </ul>
                </li>
                <!--Farmacias-->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-prescription-bottle-alt"></i>
                      <p>
                          Farmacias
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('farmacias.index') }}" class="nav-link">
                              <i class="fas fa-eye nav-icon"></i>
                              <p>Ver</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('farmacias.create') }}" class="nav-link">
                              <i class="fas fa-plus nav-icon"></i>
                              <p>Agregar</p>
                          </a>
                      </li>
                  </ul>
                </li>
                <!--ClosedUp-->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-scroll"></i>
                      <p>
                          Closed Up
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="/dashboard" class="nav-link">
                              <i class="fas fa-eye nav-icon"></i>
                              <p>Representantes</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/dashboard" class="nav-link">
                              <i class="fas fa-plus nav-icon"></i>
                              <p>Transferencistas</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('consumidores.create') }}" class="nav-link">
                              <i class="fas fa-cloud-download-alt"></i>
                              <p>Busqueda</p>
                          </a>
                      </li>
                  </ul>
                </li>
                <!--Medicos-->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-user-md"></i>
                      <p>
                          Medicos
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('medicos.index') }}" class="nav-link">
                              <i class="fas fa-eye nav-icon"></i>
                              <p>Ver</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('medicos.create') }}" class="nav-link">
                              <i class="fas fa-plus nav-icon"></i>
                              <p>Agregar</p>
                          </a>
                      </li>
                  </ul>
                </li>
                <!--Representantes-->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-user-tie"></i>
                      <p>
                          Representantes
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('representantes.index') }}" class="nav-link">
                              <i class="fas fa-eye nav-icon"></i>
                              <p>Ver</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('representantes.create') }}" class="nav-link">
                              <i class="fas fa-plus nav-icon"></i>
                              <p>Agregar</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/visitas_medicos" class="nav-link">
                              <i class="fas fa-map-marker-alt nav-icon"></i>
                              <p>Visitas</p>
                          </a>
                      </li>
                  </ul>
                </li>
                <!--Consumidores-->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-users"></i>
                      <p>
                          Consumidores
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('consumidores.index') }}" class="nav-link">
                              <i class="fas fa-eye nav-icon"></i>
                              <p>Ver</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('consumidores.create') }}" class="nav-link">
                              <i class="fas fa-plus nav-icon"></i>
                              <p>Agregar</p>
                          </a>
                      </li>
                  </ul>
                </li>
                <!--Operativos-->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-user-cog"></i>
                      <p>
                          Operativos
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('operativos.index') }}" class="nav-link">
                              <i class="fas fa-eye nav-icon"></i>
                              <p>Ver</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('operativos.create') }}" class="nav-link">
                              <i class="fas fa-plus nav-icon"></i>
                              <p>Agregar</p>
                          </a>
                      </li>
                  </ul>
                </li>
                <!--Dependientes-->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-user-plus"></i>
                      <p>
                          Dependientes
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('dependientes.index') }}" class="nav-link">
                              <i class="fas fa-eye nav-icon"></i>
                              <p>Ver</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('dependientes.create') }}" class="nav-link">
                              <i class="fas fa-plus nav-icon"></i>
                              <p>Agregar</p>
                          </a>
                      </li>
                  </ul>
                </li>
                <!--Transferencistas-->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-user-tag"></i>
                      <p>
                          Transferencistas
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('transferencistas.index') }}" class="nav-link">
                              <i class="fas fa-eye nav-icon"></i>
                              <p>Ver</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('transferencistas.create') }}" class="nav-link">
                              <i class="fas fa-plus nav-icon"></i>
                              <p>Agregar</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/visitas_dependientes" class="nav-link">
                              <i class="fas fa-map-marker-alt nav-icon"></i>
                              <p>Visitas</p>
                          </a>
                      </li>
                  </ul>
                </li>
                <!--Instituciones-->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-hospital"></i>
                      <p>
                          Instituciones
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('instituciones.index') }}" class="nav-link">
                              <i class="fas fa-eye nav-icon"></i>
                              <p>Ver</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('instituciones.create') }}" class="nav-link">
                              <i class="fas fa-plus nav-icon"></i>
                              <p>Agregar</p>
                          </a>
                      </li>
                  </ul>
                </li>
                <!--Marketing-->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-comment-dollar"></i>
                      <p>
                          Marketing
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('campañas.index') }}" class="nav-link">
                              <i class="fas fa-eye nav-icon"></i>
                              <p>Campañas</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('instituciones.create') }}" class="nav-link">
                              <i class="fas fa-plus nav-icon"></i>
                              <p>Estadisticas</p>
                          </a>
                      </li>
                  </ul>
                </li>
                <!--Ventas-->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-hand-holding-usd"></i>
                      <p>
                          Ventas
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('instituciones.index') }}" class="nav-link">
                              <i class="fas fa-eye nav-icon"></i>
                              <p>Inmufort</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('instituciones.create') }}" class="nav-link">
                              <i class="fas fa-plus nav-icon"></i>
                              <p>Procilus</p>
                          </a>
                      </li>
                  </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>