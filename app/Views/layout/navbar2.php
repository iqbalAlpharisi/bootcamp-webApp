<nav class="navbar navbar-expand-md navbar-light d-flex" id="navbar2">
    <div class="container-fluid">
        <button class="px-2" id="openToggleButton" style="all:unset; cursor:pointer">
            <i class="bi bi-list"></i>
        </button>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLink">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="col-2 top-0 d-none" id="sidebarEX">
            <div class="container p-2 fs-5 d-flex flex-column sidemenu">

                <div class="container py-2 my-2" id="closeToggleButton">
                    <button class="d-flex align-items-center text-decoration-none" style="all:unset; cursor:pointer">
                        <i class="bi bi-x-circle-fill ps-3"></i>
                        <span>Close</span>
                    </button>
                </div>


                <div class="container py-2 my-2">
                    <a href="/myCourse" class="d-flex align-items-center text-decoration-none">
                        <i class="bi bi-house-fill ps-3"></i>
                        <span>Home</span>
                    </a>
                </div>
                <div class="container py-2 my-2">
                    <a href="/all-modul" class="d-flex align-items-center text-decoration-none">
                        <i class="bi bi-mortarboard-fill ps-3"></i>
                        <span>Modul</span>
                    </a>
                </div>

                <div class="container py-2 my-2">
                    <a href="/setting" class="d-flex align-items-center text-decoration-none">
                        <i class="bi bi-gear-fill ps-3"></i>
                        <span>Setting</span>
                    </a>
                </div>


                <div class="container py-2" style="margin-top: 450px;">
                    <a href="/logout" class="d-flex align-items-center text-decoration-none">
                        <i class="bi bi-box-arrow-right ps-3"></i>
                        <span>Log Out</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex-row-reverse" id="navLink">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu">
                <li><a href=""><i class="bi bi-bell d-flex align-items-center justify-content-center bell-icon ms-4"></a></i></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="profile-pic">
                            <img src="https://images.unsplash.com/photo-1721006779304-49a9f5beadab?q=80&w=2770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Profile Picture">
                        </div>
                    </a>
                    <ul class="dropdown-menu text-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/setting"><i class="fas fa-cog fa-fw"></i> Pengaturan</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const overlay = document.getElementById('overlay');
        const sidebar = document.getElementById('sidebarEX');

        const currentPath = window.location.pathname;

        if (currentPath !== '/myCourse' && currentPath !== '/setting') {
            document.getElementById('openToggleButton').addEventListener('click', function() {
                sidebar.classList.toggle('d-none');
                overlay.classList.toggle('show');
            });

            document.getElementById('closeToggleButton').addEventListener('click', function() {
                sidebar.classList.toggle('d-none');
                overlay.classList.toggle('show');
            });
        }
    });
</script>