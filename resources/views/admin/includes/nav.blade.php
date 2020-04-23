<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('/')}}" class="nav-link">futvox.com</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                Cerrar Sesión
            </a>

            <form id="logout-form" action="#" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
        </li>
    </ul>
</nav>