@extends('template/template')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                @endif
            </div>
            <!-- End Detail Data -->
            <!-- Detail Data -->
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Data Anak</h5>
            <form action="/lapor-kelahiran/{{ $currentDataKelahiran->id }}/" method="POST">
            @csrf
            @method('PUT')
                <!-- Horizontal Form -->   
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" 
                        >Nama</label
                    >
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" name="nama" value="{{ $currentDataKelahiran->anak->nama }}"/>
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Nomor Kartu Keluarga</label
                    >
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" name="nomor_kk" value="{{ $currentDataKelahiran->nomor_kk }}"/>
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
                        name="anak_ke"
                        value="{{ $currentDataKelahiran->anak_ke }}"
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
                        name="jenis_kelamin"
                        value="{{ $currentDataKelahiran->anak->jenis_kelamin }}"
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Jam Lahir</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="time"
                        class="form-control"
                        id="inputPassword"
                        name="jam_lahir"
                        value="{{ $currentDataKelahiran->jam_lahir }}"
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
                        name="tempat_lahir"
                        value="{{ $currentDataKelahiran->tempat_lahir }}"
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Tanggal Lahir</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="date"
                        class="form-control"
                        id="inputPassword"
                        name="tanggal_lahir"
                        value="{{ $currentDataKelahiran->tanggal_lahir }}"
                        />
                    </div>
                    </div>
                <!-- End Horizontal Form -->
                </div>
                <div class="card-body">
                <h5 class="card-title">Data Ayah</h5>
                <!-- Horizontal Form -->
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Nama</label
                    >
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" value="{{ $currentDataKelahiran->ayah->nama }}" disabled/>
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Alamat</label
                    >
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" value="{{ $currentDataKelahiran->ayah->alamat }}" disabled/>
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
                <!-- End Horizontal Form -->
                </div>

                <div class="card-body">
                <h5 class="card-title">Data Ibu</h5>
                <!-- Horizontal Form -->
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Nama</label
                    >
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" value="{{ $currentDataKelahiran->ibu->nama }}" disabled/>
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Alamat</label
                    >
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" value="{{ $currentDataKelahiran->ibu->alamat }}" disabled/>
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
                    <button type="submit" class="btn btn-success">
                        Simpan
                    </button>
                    {{-- <button type="submit" class="btn btn-danger">
                        <a href="dataLahir.html" class="text-white">Hapus</a>
                    </button> --}}
                    </div>
                <!-- End Horizontal Form -->
            </form>
                </div>
            </div>
            <!-- End Detail Data -->
            </div>
            <!-- End Left side columns -->
        </div>
        </section>
    </main>
@endsection