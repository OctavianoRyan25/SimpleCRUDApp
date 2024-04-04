@extends('template/template')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Edit Data Pengguna</li>
            </ol>
        </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Data Pengguna</h5>
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                @endif

                <!-- Vertical Form -->
                <form class="row g-3" action="/user/{{ $user->id }}/change-passwords" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-12">
                    <label for="inputNanme4" class="form-label"
                        >Nama Desa</label
                    >
                    <input type="text" class="form-control" id="inputNanme4" value="{{ $user->village }}" disabled/>
                    </div>
                    <div class="col-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" value="{{ $user->email }}" disabled/>
                    </div>
                    <div class="col-12">
                    <label for="inputPassword4" class="form-label"
                        >Password</label
                    >
                    <input
                        type="password"
                        class="form-control"
                        id="inputPassword4"
                        name="password"
                    />
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <button type="reset" class="btn btn-secondary">
                        Reset
                    </button>
                    </div>
                </form>
                <!-- Vertical Form -->
                </div>
            </div>
            </div>
            <!-- End Left side columns -->
        </div>
        </section>
    </main>
@endsection