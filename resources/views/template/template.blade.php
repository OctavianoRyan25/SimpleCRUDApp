<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>Kecamatan Getasan</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- Favicons -->
        <link href="/../assets/img/logo_blue.png" rel="icon" />
        <link href="/../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect" />
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet"
        />

        <!-- Vendor CSS Files -->
        <link
            href="/../assets/vendor/bootstrap/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            href="/../assets/vendor/bootstrap-icons/bootstrap-icons.css"
            rel="stylesheet"
        />
        <link href="/../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
        <link href="/../assets/vendor/quill/quill.snow.css" rel="stylesheet" />
        <link href="/../assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
        <link href="/../assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
        <link href="/../assets/vendor/simple-datatables/style.css" rel="stylesheet" />

        <!-- Template Main CSS File -->
        <link href="/../assets/css/style.css" rel="stylesheet" />
    </head>

    <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <img src="/../assets/img/logo.svg" alt="" />
            </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
    <!-- End Logo -->
    @auth      
    <nav class="header-nav ms-auto me-3">
        <ul class="d-flex align-items-center">
            <a
            class="nav-link nav-profile d-flex align-items-center pe-0"
            href="#"
            data-bs-toggle="dropdown"
            >
            <span class="d-none d-md-block ps-2 me-3">{{auth()->user()->name}}</span>
            <i class="bi bi-person-circle"></i>
        </a>
        <!-- End Profile Iamge Icon -->
        </ul>
    </nav>
    @endauth
    <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar d-flex flex-column justify-content-between">
        <ul class="sidebar-nav" id="sidebar-nav">
        <!-- Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? '' : 'collapsed' }}" href="/">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Data Lapor Camat Nav -->
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/lapor-camat') ? '' : 'collapsed' }}" href="/lapor-camat">
                    <i class="bi bi-grid"></i>
                    <span>Lapor Camat</span>
                </a>
            </li>

            <!-- Data Lapor Kegiatan Desa Nav -->
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/lapor-desa') ? '' : 'collapsed' }}" href="/lapor-desa">
                    <i class="bi bi-grid"></i>
                    <span>Laporan Kegiatan Desa</span>
                </a>
            </li>

            <!-- Data Lapor Kelahiran Nav -->
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/lapor-kelahiran') ? '' : 'collapsed' }}" href="/lapor-kelahiran">
                    <i class="bi bi-grid"></i>
                    <span>Laporan Kelahiran</span>
                </a>
            </li>

            <!-- Data Lapor Kematian Nav -->
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/lapor-kematian') ? '' : 'collapsed' }}" href="/lapor-kematian">
                    <i class="bi bi-grid"></i>
                    <span>Laporan Kematian</span>
                </a>
            </li>

            <!-- Data Kemiskinan Nav -->
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/lapor-kemiskinan') ? '' : 'collapsed' }}" href="/lapor-kemiskinan">
                    <i class="bi bi-grid"></i>
                    <span>Data Kemiskinan</span>
                </a>
            </li>

            <!-- Data Pengguna Nav -->
            @if(Auth::check() && Auth::user()->is_admin)
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/user') ? '' : 'collapsed' }}" href="/user">
                    <i class="bi bi-grid"></i>
                    <span>Data Pengguna</span>
                </a>
            </li>
            @endif
        </ul>
    <form action="/logout" method="post">
        @csrf
        <button class="rounded bg-danger text-white p-1">Log Out</button>
    </form>
    </aside>
    <!-- End Sidebar-->

    @yield('content')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer"></footer>
    <!-- End Footer -->

    <a
        href="#"
        class="back-to-top d-flex align-items-center justify-content-center"
        ><i class="bi bi-arrow-up-short"></i
    ></a>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Vendor JS Files -->
    <script src="/../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/../assets/vendor/chart.js/chart.umd.js"></script>
    <script src="/../assets/vendor/echarts/echarts.min.js"></script>
    <script src="/../assets/vendor/quill/quill.min.js"></script>
    <script src="/../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="/../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/../assets/js/main.js"></script>
    </body>
</html>
