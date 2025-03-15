@extends('layout.app')

@section('title', 'Edit Barang - SB Admin Pro')

@section('content')
    @include('components.navbardashboard')
    <div id="layoutSidenav">
        @include('components.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                    <div class="container-xl px-4">
                        <div class="page-header-content pt-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto mt-4">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i data-feather="edit"></i></div>
                                        Edit Barang
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="container-xl px-4 mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">Edit Data Barang</div>
                        <div class="card-body">
                            <form action="{{ route('barang.update', $barang->STOCK_CODE) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label class="small mb-1">Kode Barang</label>
                                    <input class="form-control" type="text" value="{{ $barang->STOCK_CODE }}" readonly />
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1">Kategori</label>
                                    <input class="form-control" type="text" name="CATEGORY" value="{{ $barang->CATEGORY }}" required />
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1">Deskripsi</label>
                                    <input class="form-control" type="text" name="DESCRIPTION" value="{{ $barang->DESCRIPTION }}" required />
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1">Detail</label>
                                    <textarea class="form-control" name="DETAIL" rows="3" required>{{ $barang->DETAIL }}</textarea>
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                                <a href="{{ route('barang.index') }}" class="btn btn-light">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer-admin mt-auto footer-light">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection 