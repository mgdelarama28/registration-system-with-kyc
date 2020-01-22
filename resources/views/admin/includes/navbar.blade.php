<nav class="main-header navbar navbar-expand navbar-dark bg-purple">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="javascript:void(0)"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @auth
            <li class="nav-item">
                <a href="#">
                    Logout
                </a>
            </li>
        @endauth        
    </ul>
</nav>