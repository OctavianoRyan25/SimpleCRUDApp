@extends('template/template')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Detail Data Kelahiran</li>
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
                    <h5 class="card-title text-center"><b>Data Kelahiran</b></h5>
                </div>
                </div>
            </div>
            <!-- End Detail Data -->
            <!-- Detail Data -->
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Data Anak</h5>

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
                        value="{{ $currentDataKelahiran->anak->nama }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Nomor Kartu Keluarga</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputText"
                        value="{{ $currentDataKelahiran->nomor_kk }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Anak Ke</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputAlamat"
                        value="{{ $currentDataKelahiran->anak_ke }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Jenis Kelamin</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputAlamat"
                        value="{{ $currentDataKelahiran->jenis_kelamin }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Jam Lahir</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputPassword"
                        value="{{ $currentDataKelahiran->jam_lahir }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Tempat Lahir</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputPassword"
                        value="{{ $currentDataKelahiran->tempat_lahir }}"
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
                        id="inputPassword"
                        value="{{ $currentDataKelahiran->tanggal_lahir }}"
                        disabled
                        />
                    </div>
                    </div>
                </form>
                <!-- End Horizontal Form -->
                </div>
                <div class="card-body">
                <h5 class="card-title">Data Ayah</h5>
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
                        value="{{ $currentDataKelahiran->ayah->nama }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Alamat</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputText"
                        value="{{ $currentDataKelahiran->ayah->alamat }}"
                        disabled
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
                        id="inputNik"
                        value="{{ $currentDataKelahiran->ayah->nik }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Nomor HP</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputAlamat"
                        value="{{ $currentDataKelahiran->ayah->nomor_hp }}"
                        disabled
                        />
                    </div>
                    </div>
                </form>
                <!-- End Horizontal Form -->
                </div>

                <div class="card-body">
                <h5 class="card-title">Data Ibu</h5>
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
                        value="{{ $currentDataKelahiran->ibu->nama }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Alamat</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputText"
                        value="{{ $currentDataKelahiran->ibu->alamat }}"
                        disabled
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
                        id="inputAlamat"
                        value="{{ $currentDataKelahiran->ibu->nik }}"
                        disabled
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Nomor HP</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputAlamat"
                        value="{{ $currentDataKelahiran->ibu->nomor_hp }}"
                        disabled
                        />
                    </div>
                    </div>

                    <div class="text-center">
                    <button type="submit" class="btn btn-warning">
                        <a href="/lapor-kelahiran/{{ $currentDataKelahiran->id }}/edit" class="text-black">Edit</a>
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