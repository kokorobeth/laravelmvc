<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="table" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="data-table" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Tables
                <i class="right fas fa-angle-left"></i>
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/genre" class="nav-link">
              <i class="fas fa-film nav-icon"></i>
              <p>Genre</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/film" class="nav-link">
              <i class="fas fa-film nav-icon"></i>
              <p>Film</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/peran" class="nav-link">
              <i class="fas fa-user nav-icon"></i>
              <p>Peran</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/cast" class="nav-link">
              <i class="fas fa-user nav-icon"></i>
              <p>Cast</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/profil" class="nav-link">
              <i class="fas fa-user nav-icon"></i>
              <p>Profil</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-danger" href="{{route('logout')}}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fas fa-door-open nav-icon"></i>
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>