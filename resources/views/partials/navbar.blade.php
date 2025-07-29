    <div class="offcanvas offcanvas-end glassmorphism text-bg-dark d-lg-none" tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav flex-column mb-3">
                @include('partials.nav-links')
            </ul>
            <div class="d-flex flex-column gap-2">
                @include('partials.nav-links-right')
            </div>
        </div>
    </div>

    <!-- START NAVBAR -->
    <nav class="navbar navbar-dark  sticky-top glassmorphism py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand fw-bold" href="#">BukuQu</a>

            <!-- Toggle button (only visible on mobile) -->
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="d-none d-lg-flex align-items-center justify-content-between flex-grow-1 ms-3">

                <ul class="navbar-nav flex-row gap-3 mx-auto">
                    <!-- Navbar Links (center) -->
                    @include('partials.nav-links')
                </ul>

                <div class="d-flex gap-2">
                    <!-- Navbar Links (right) -->
                    @include('partials.nav-links-right')
                </div>
            </div>
        </div>
    </nav>
    <!--END NAVBAR -->
