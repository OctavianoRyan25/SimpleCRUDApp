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
                    <b>Data Lapor Camat</b>
                    </h5>
                </div>
                </div>
            </div>
            <!-- End Detail Data -->
            <!-- Detail Data -->
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Detail Lapor Camat</h5>

                <!-- Horizontal Form -->
                <form>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Aduan</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputText"
                        disabled
                        value="{{ $current_lapor_camat->aduan }}"
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
                        id="inputText"
                        disabled
                        value="{{ $current_lapor_camat->tanggal }}"
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Lokasi</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputAlamat"
                        disabled
                        value="{{ $current_lapor_camat->lokasi }}"
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Keterangan</label
                    >
                    <div class="col-sm-10">
                        <textarea
                        class="form-control"
                        id="floatingTextarea"
                        style="height: 100px"
                        disabled
                        >{{ $current_lapor_camat->keterangan }}</textarea>
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Foto Kegiatan</label
                    >
                    <div class="col-sm-10">
                        <img
                        src="{{ Storage::url($current_lapor_camat->gambar) }}"
                        alt=""
                        class="w-100 mb-3 rounded"
                        />
                    </div>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-warning">
                        <a href="/lapor-camat/{{ $current_lapor_camat->id }}/edit" class="text-black">Edit</a>
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