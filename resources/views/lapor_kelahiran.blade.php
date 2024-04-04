@extends('template/template')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Data Kelahiran</li>
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
                    <h5 class="card-title">Data Kelahiran</h5>
                    <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="form-floating">
                        <input
                            type="month"
                            class="form-control"
                            id="floatingName"
                            placeholder="Your Name"
                        />
                        <label for="floatingName">Bulan</label>
                        </div>
                    </div>
                    </div>
                    <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Bayi</th>
                        <th scope="col">Ayah</th>
                        <th scope="col">Ibu</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($dataKelahirans as $dataKelahiran)
                        <tr>
                        <th scope="row"><p>{{ $dataKelahiran->id }}</p></th>
                        <td>{{ $dataKelahiran->anak->nama }}</td>
                        <td>
                            <p>{{ $dataKelahiran->ayah->nama }}</p>
                        </td>
                        <td>
                            <p>{{ $dataKelahiran->ibu->nama }}</p>
                        </td>
                        <td>{{ $dataKelahiran->tanggal_lahir }}</td>
                        <td>
                            <div>
                            <button class="bg-primary rounded">
                                <a href="/lapor-kelahiran/{{ $dataKelahiran->id }}"
                                ><i class="bi bi-eye text-black"></i
                                ></a>
                            </button>
                            <button class="bg-warning rounded">
                                <a href="editLahir.html"
                                ><i class="bi bi-pencil-square text-black"></i
                                ></a>
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
@endsection