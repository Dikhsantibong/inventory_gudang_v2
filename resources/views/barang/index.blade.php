@extends('layout.app')

@section('title', 'Data Barang - SB Admin Pro')

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
                                        <div class="page-header-icon"><i data-feather="package"></i></div>
                                        Data Barang
                                    </h1>
                                    <div class="page-header-subtitle">Manajemen data barang dalam sistem</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container-xl px-4 mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Daftar Barang
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Kategori</th>
                                            <th>Deskripsi</th>
                                            <th style="min-width: 200px;">Detail</th>
                                         
                                            <th style="width: 100px;" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($barangs as $barang)
                                        <tr>
                                            <td>{{ $barang->STOCK_CODE }}</td>
                                            <td>{{ $barang->CATEGORY }}</td>
                                            <td>{{ $barang->DESCRIPTION }}</td>
                                            <td >{{ $barang->DETAIL }}</td>
                                            
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('barang.edit', $barang->STOCK_CODE) }}" class="btn btn-datatable btn-icon btn-transparent-dark" title="Edit">
                                                        <i data-feather="edit"></i>
                                                    </a>
                                                    <form action="{{ route('barang.destroy', $barang->STOCK_CODE) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-datatable btn-icon btn-transparent-dark" title="Hapus" 
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                            <i data-feather="trash-2"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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