 <!-- Brand Logo -->
 <a href="/dashboard" class="brand-link">
     <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
         class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">AdminLTE 3</span>
 </a>

 <!-- Sidebar -->
 <div class="sidebar">
     <!-- SidebarSearch Form -->
     <div class="form-inline mt-2">
         <div class="input-group" data-widget="sidebar-search">
             <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
             <div class="input-group-append">
                 <button class="btn btn-sidebar">
                     <i class="fas fa-search fa-fw"></i>
                 </button>
             </div>
         </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
             <li class="nav-item">
                 <a href="{{ route('profile.show') }}" class="nav-link">
                     <i class="nav-icon fas fa-user"></i>
                     <p>
                         {{ __('Profile') }}

                     </p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="/dashboard" class="nav-link active">
                     <i class="nav-icon fas fa-tachometer-alt"></i>
                     <p>
                         Dashboard
                     </p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-edit"></i>
                     <p>
                         Forms Makanan
                         <i class="fas fa-angle-left right"></i>
                     </p>
                 </a>
                 <ul class="nav nav-treeview">
                     <li class="nav-item">
                         <a href="{{ Route('DetailMenuPromosi') }}" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Tambah Menu Promosi</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="{{ Route('DetailMenuMakanan') }}" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Tambah Menu Makanan</p>
                         </a>
                     </li>
                 </ul>
             </li>
         </ul>
     </nav>
     <!-- /.sidebar-menu -->
 </div>
 <!-- /.sidebar -->
