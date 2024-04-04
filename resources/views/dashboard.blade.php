@extends('template/template')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        </nav>
    </div>
<!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <!-- Left side columns -->
        <div>
            <div class="row">
            <!-- Jumlah Penduduk Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Penduduk</h5>

                    <div class="d-flex align-items-center">
                    <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                    >
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                        <h6>145</h6>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- Jumlah Penduduk Card -->

            <!-- Jumlah Kelahiran Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Kelahiran</h5>

                    <div class="d-flex align-items-center">
                    <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                    >
                        <i class="bi bi-clipboard2-plus-fill"></i>
                    </div>
                    <div class="ps-3">
                        <h6>{{ $jumlahKelahiran }}</h6>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- Jumlah Kelahiran Card -->

            <!-- Jumlah Kematian Card -->
            <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Kematian</h5>

                    <div class="d-flex align-items-center">
                    <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                    >
                        <i class="bi bi-clipboard-x-fill"></i>
                    </div>
                    <div class="ps-3">
                        <h6>22</h6>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- Jumlah Kematian Card -->
            </div>
            <!-- Default Card -->
            <div class="card d-flex justify-content-center">
            <div
                class="card-body d-flex flex-column justify-content-center align-items-center"
            >
                <h5 class="card-title text-center">
                Susunan Organisasi Kecamatan Getasan
                </h5>
                <img src="/../assets/img/bagan.png" alt="" class="w-75" />
            </div>
            </div>
            <!-- End Default Card -->
        </div>
        <!-- End Left side columns -->
        </div>
    </section>
</main>
@endsection