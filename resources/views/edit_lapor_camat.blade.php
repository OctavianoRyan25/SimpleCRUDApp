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
                <h5 class="card-title">Detail Lapor Camat</h5>

                <!-- Horizontal Form -->
                <form action="/lapor-camat/{{ $current_lapor_camat->id }}/" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Aduan</label
                    >
                    <div class="col-sm-10">
                        <input type="text" class="form-control" @error('aduan') is-invalid @enderror id="inputText" name="aduan" value="{{ $current_lapor_camat->aduan }}"/>
                        @error('aduan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Tanggal</label
                    >
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputText" name="tanggal" value="{{$current_lapor_camat->tanggal }}"/>
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
                        name="lokasi"
                        id="inputAlamat" value="{{ $current_lapor_camat->lokasi }}"
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
                        name="keterangan"
                        >{{ $current_lapor_camat->keterangan }}</textarea>
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                        >Foto Kegiatan</label
                    >
                    <div class="col-sm-10">
                        <img
                        src="assets/img/rumah.jpeg"
                        alt=""
                        class="w-100 mb-3 rounded"
                        />
                        <input
                        type="file"
                        class="form-control"
                        id="inputAlamat"
                        name="gambar"
                        />
                    </div>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-success" value="submit"> 
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
{{-- <script>
    function confirmDelete() {
        if (confirm('Apakah Anda yakin ingin menghapus?')) {
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = '/lapor-camat/{{ $current_lapor_camat->id }}';
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
        }
    }
</script> --}}
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
                form.action = '/lapor-camat/{{ $current_lapor_camat->id }}';
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
                }).then(() => {
                    // Redirect setelah jeda
                    window.location.href = '/lapor-camat';
                });
            }
        });
    }
</script>

@endsection