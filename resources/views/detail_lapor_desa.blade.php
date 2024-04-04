@extends('template/template')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Detail Kegiatan Desa</li>
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
                    <h5 class="card-title text-center">
                    <b>Data Kegiatan Desa</b>
                    </h5>
                </div>
                </div>
            </div>
            <!-- End Detail Data -->
            <!-- Detail Data -->
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Detail Kegiatan Desa</h5>

                <!-- Horizontal Form -->
                <form>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Nama Kegiatan</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputText"
                        value="{{ $current_lapor_desa->nama_kegiatan }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Penanggungjawab</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputText"
                        value="{{ $current_lapor_desa->penanggung_jawab }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Tanggal</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputAlamat"
                        value="{{ $current_lapor_desa->tanggal }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Hasil Kegiatan</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputAlamat"
                        value="{{ $current_lapor_desa->hasil_kegiatan }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Kendala</label
                    >
                    <div class="col-sm-10">
                        <textarea
                        class="form-control"
                        id="floatingTextarea"
                        style="height: 100px"
                        disabled
                        >{{ $current_lapor_desa->kendala }}</textarea>
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Foto Kegiatan</label
                    >
                    <div class="col-sm-10">
                        <img
                        src="{{ Storage::url($current_lapor_desa->gambar) }}"
                        alt=""
                        class="w-100 mb-3 rounded"
                        />
                    </div>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-warning">
                        <a href="/lapor-desa/{{ $current_lapor_desa->id }}/edit" class="text-black">Edit</a>
                    </button>
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