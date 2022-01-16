@php 

    function checkRouteActive($route){
     if(Route::current()->uri == $route) return 'active';
    }
  @endphp
   
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('public/assets') }}/dist/img/download.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Vegetables</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('public/assets') }}/dist/img/winda.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if (Auth::check())
            {{ request()->user()->nama }}
            @elseif( Auth::guard('admin')->check())
            <strong> {{ Auth::guard('admin')->user()->nama }}</strong>
            <br>As Admin
            @elseif( Auth::guard('pengguna')->check())
            <strong> {{ Auth::guard('pengguna')->user()->nama }}</strong>
           <br> As Pengguna
            @else
              Silahkan Login
            @endif
          </a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{url('admin/dashboard')}}" class="nav-link">
                 <i class="fas fa-home"></i>
                  <p>
                  Dashboard
                  
                  </p>
                </a>
             </li>
            <li class="nav-item">
                <a href="{{url('admin/produk')}}" class="nav-link">
                  <i class="fas fa-carrot"></i>
                  <p>
                  Produk
                  </p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{url('admin/kategori')}}" class="nav-link">
                  <i class="fas fa-boxes"></i>
                  <p>
                  Kategori
                  </p>
                </a> 
              </li>
          <li class="nav-item">
            <a href="{{url('admin/user')}}" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>