 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class="fa-solid fa-icons"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Sistema Web <sup>de Reservaciones</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{route('home')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Inicio</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Configuración
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Administración</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="buttons.html"><i class="fas fa-users fa-fw"></i> Usuario</a>
            <a class="collapse-item" href="cards.html"><i class="fas fa-id-card fa-fw"></i> Roles</a>
            <a class="collapse-item" href="cards.html"><i class="fas fa-hand-paper fa-fw"></i> Permisos</a>
        </div>
    </div>
</li>



<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>


<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="{{route('services.index')}}">
        <i class="fas fa-boxes"></i>
        <span>Servicios Turísticos</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


</ul>
<!-- End of Sidebar -->