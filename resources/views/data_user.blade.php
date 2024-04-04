@extends('template/template')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Data Pengguna</li>
            </ol>
        </nav>
        @if(Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
        @endif
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div>
            <!-- Recent Sales -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">Data Pengguna</h5>
                    <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Desa</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                        <th scope="row"><p>{{ $user->id }}</p></th>
                        <td>{{ $user->village }}</td>
                        <td>
                            <a href="#" class="text-primary"
                            >{{ $user->email }}</a
                            >
                        </td>
                        <td>
                            <div>
                            <button class="bg-warning rounded">
                                <a href="/user/{{ $user->id}}/change-password"
                                ><i class="bi bi-pencil-square text-black"></i
                                ></a>
                            </button>
                            <button class="bg-danger rounded" onclick="confirmDelete({{ $user->id }})">
                                <i class="bi bi-trash"></i>
                            </button>
                            </div>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            <!-- End Recent Sales -->
            </div>
            <!-- End Left side columns -->
        </div>
        </section>
    </main>
    <script>
        function confirmDelete(userId) {
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
                    form.action = '/user/' + userId; // Gunakan parameter userId
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