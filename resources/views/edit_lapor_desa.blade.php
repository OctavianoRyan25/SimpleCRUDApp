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
                <h5 class="card-title">Detail Kegiatan Desa</h5>

                <!-- Horizontal Form -->
                <form action="/lapor-desa/{{ $current_lapor_desa->id }}/" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Nama Kegiatan</label
                    >
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" name="nama_kegiatan" value="{{ $current_lapor_desa->nama_kegiatan }}"/>
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Penanggungjawab</label
                    >
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" name="penanggung_jawab" value="{{ $current_lapor_desa->penanggung_jawab }}"/>
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Tanggal</label
                    >
                    <div class="col-sm-10">
                        <input
                        type="date"
                        class="form-control"
                        id="inputAlamat"
                        name="tanggal"
                        value="{{ $current_lapor_desa->tanggal }}"
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
                        name="hasil_kegiatan"
                        value="{{ $current_lapor_desa->hasil_kegiatan }}"
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
                        name="kendala"
                        >{{ $current_lapor_desa->kendala }}</textarea>
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Foto Kegiatan</label
                    >
                    <div class="col-sm-10">
                        <img
                        src=""
                        alt=""
                        class="w-100 mb-3 rounded"
                        />
                        <div class="col-sm-12">
                        <input
                            type="file"
                            class="form-control"
                            id="inputAlamat"
                            name="gambar"
                        />
                        </div>
                    </div>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-success">
                        Simpan
                    </button>
                    <button type="button" class="btn btn-danger" onclick="confirmDelete()">
                        Hapus
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
                    form.action = '/lapor-desa/{{ $current_lapor_desa->id }}';
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
