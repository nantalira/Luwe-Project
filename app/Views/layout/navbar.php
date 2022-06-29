<!-- Navbar Start -->
<header class="navbar navbar-expand-lg bd-navbar sticky-top text-bg-light">
    <nav class="container-xxl bd-gutter flex-wrap flex-lg-nowrap justify-content-lg-around justify-content-between" aria-label="Main navigation" id="section-nav">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url() ?>/assets/img/navbar/logo.png" alt="logo" class="icon">
        </a>
        <!-- offcanvas -->
        <button class="btn btn-primary navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle
                navigation"><i class="bi bi-list"></i>
        </button>
        <div class="offcanvas-lg offcanvas-end d-lg-flex" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel" data-bs-scroll="true">
            <div class="offcanvas-header px-4 pb-0">
                <a class="navbar-brand" href="index2.html">
                    <img src="<?= base_url() ?>/assets/img/navbar/logo.png" alt="logo" class="img-fluid">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#bdNavbar" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-4 pt-0 p-lg-0">
                <hr class="d-lg-none text-primary-50">
                <div class="navbar-nav">
                    <!-- nav menu -->
                    <div class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>">Home</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>/#explore-page">Explore</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>/#warung">Warung</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>/contact">Contact</a>
                    </div>
                    <!-- nav menu -->
                    <hr class="d-lg-none text-primary-50">
                    <!-- search bar -->
                    <form action="" method="POST">
                        <div class="navbar-nav d-flex d-lg-ps-3">
                            <div class="input-group bm-0">
                                <input type="text" class="form-control" name="keyword" placeholder="Cari Makan Yuk!" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <button class="input-group-text" name="submit" id="basic-addon2"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <!-- search bar end -->
                </div>
            </div>
        </div>
        <!-- offcanvas -->
    </nav>
</header>
<!-- Navbar End -->