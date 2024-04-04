@extends('template/template')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Detail Data Kematian</li>
            </ol>
        </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div>
            <!-- Detail Data -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                <div class="">
                    <h5 class="card-title text-center"><b>Data Kematian</b></h5>
                </div>
                </div>
            </div>
            <!-- End Detail Data -->
            <!-- Detail Data -->
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Data Pribadi</h5>

                <!-- Horizontal Form -->
                <form>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Nama</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputText"
                        disabled
                        value="{{ $current_lapor_kematian->nama }}"
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >NIK</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputText"
                        disabled
                        value="{{ $current_lapor_kematian->nik }}"
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Tempat Lahir</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputAlamat"
                        value="{{ $current_lapor_kematian->tempat_lahir }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Tanggal Lahir</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputAlamat"
                        value="{{ $current_lapor_kematian->tanggal_lahir }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Tempat Meninggal</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputPassword"
                        value="{{ $current_lapor_kematian->tempat_meninggal }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Tanggal Meninggal</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputPassword"
                        value="{{ $current_lapor_kematian->tanggal_meninggal }}"
                        disabled
                        />
                    </div>
                    </div>
                </form>
                <!-- End Horizontal Form -->
                </div>
                <div class="card-body">
                <h5 class="card-title">Data Keluarga</h5>
                <!-- Horizontal Form -->
                <form>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Nama Suami/Istri</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputText"
                        value="{{ $current_lapor_kematian->nama_suami_istri }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Nama Anak</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputText"
                        value="{{ $current_lapor_kematian->nama_anak }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Status Kawin</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputAlamat"
                        value="{{ $current_lapor_kematian->status_kawin }}"
                        disabled
                        />
                    </div>
                    </div>
                    
                    <div class="text-center">
                    <button type="submit" class="btn btn-warning">
                        <a href="/lapor-kematian/{{ $current_lapor_kematian->id }}/edit" class="text-black">Edit</a>
                    </button>
                    </div>
                </form>
                <!-- End Horizontal Form -->
                </div>
                </form>
                <!-- End Horizontal Form -->
                </div>
            </div>
            <!-- End Detail Data -->
            </div>
            <!-- End Left side columns -->
        </div>
        </section>
    </main>
@endsection