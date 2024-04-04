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
                <h5 class="card-title">Data Pribadi</h5>

                <!-- Horizontal Form -->
                <form action="/lapor-kematian/{{ $current_lapor_kematian->id }}/" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Nama</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputText"
                        name="nama"
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
                        name="nik"
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
                        name="tempat_lahir"
                        value="{{ $current_lapor_kematian->tempat_lahir }}"
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
                        id="inputAlamat"
                        name="tanggal_lahir"
                        value="{{ $current_lapor_kematian->tanggal_lahir }}"
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
                        name="tempat_meninggal"
                        value="{{ $current_lapor_kematian->tempat_meninggal }}"
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Tanggal Meninggal</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="date"
                        class="form-control"
                        id="inputPassword"
                        name="tanggal_meninggal"
                        value="{{ $current_lapor_kematian->tanggal_meninggal }}"
                        />
                    </div>
                    </div>
                <!-- End Horizontal Form -->
                </div>
                <div class="card-body">
                <h5 class="card-title">Data Keluarga</h5>
                <!-- Horizontal Form -->
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Nama Suami/Istri</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="text"
                        class="form-control"
                        id="inputText"
                        name="nama_suami_istri"
                        value="{{ $current_lapor_kematian->nama_suami_istri }}"
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
                        name="nama_anak"
                        value="{{ $current_lapor_kematian->nama_anak }}"
                        />
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Status Kawin</label
                    >
                    <div class="col-sm-10">
                        <select id="status_kawin" name="status_kawin" class="form-control">
                            <option value="" selected>Pilih Status</option>
                            <option value="1">Kawin</option>
                            <option value="0">Belum Kawin</option>
                        </select>
                    </div>
                    </div>
                    
                    <div class="text-center">
                    <button type="submit" class="btn btn-success">
                        Simpan
                    </button>
                    <button type="submit" class="btn btn-danger" onclick="confirmDelete()">
                        Hapus
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
    <script>
        function confirmDelete() {
            Swal.fire({
                title: 'Apakah Anda yakin ingin menghapus?',
                text: "Tindakan ini tidak dapat dibatalkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna mengonfirmasi, kirim formulir penghapusan
                    var form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '/lapor-kematian/{{ $current_lapor_kematian->id }}';
                    form.style.display = 'none';
                    var csrfToken = document.createElement('input');
                    csrfToken.type = 'hidden';
                    csrfToken.name = '_token';
                    csrfToken.value = '{{ csrf_token() }}';
                    form.appendChild(csrfToken);
                    var methodInput = document.createElement('input');
                    methodInput.type = 'hidden';
                    methodInput.name = '_method';
                    methodInput.value = 'DELETE';
                    form.appendChild(methodInput);
                    document.body.appendChild(form);
                    form.submit();
    
                    // Menampilkan notifikasi sukses
                    Swal.fire({
                        title: 'Terhapus!',
                        text: 'Data telah berhasil dihapus.',
                        icon: 'success',
                        showConfirmButton: false, // Tidak menampilkan tombol OK
                        timer: 1500 // Jeda 1,5 detik sebelum melakukan pengalihan
                    });
                }
            });
        }
    </script>
    
@endsection