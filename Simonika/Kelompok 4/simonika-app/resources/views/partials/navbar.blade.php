<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
            <a class="navbar-brand" href="/home">
                <b class="logo-icon">
                    <img src="{{ asset('dist/img/logo.png') }}" width="50" height="50" alt="homepage"
                        class="dark-logo me-2" />
                </b>
                <span class="logo-text" style="font-weight:bold;">
                    Simonika
                </span>
            </a>
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav me-auto mt-md-0 ">
                <li class="nav-item hidden-sm-down">
                    <form class="app-search ps-3">
                        <input type="text" class="form-control" placeholder="Search for..."> <a
                            class="srh-btn"><i class="bi bi-search"></i></a>
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark fw-bolder" href="/home"
                        id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        style="font-weight: bold;">
                        <i class="bi bi-person-circle profile-pic me-2"></i>
                        {{ auth()->user()->name }}
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
