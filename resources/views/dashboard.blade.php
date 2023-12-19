@extends('layout.main')
@section('container')
<main>
    <div class="container-fluid px-4">
        <center><h1 class="mt-4">Sisa Saldo</h1></center>
        <ol class="breadcrumb mb-4"> <center>
        <li class="breadcrumb-item active">Rp.500.000.00 <a href="eye.html">
            <i class="fa fa-eye-slash" aria-hidden="true"></a></i></i></center>
        </ol>
        <div class="breadcrumb mb-2">
            <a href="tambahsaldo.html">
        <center><button><i class="breadcrumb-item active">Tambah Saldo<i class="fa fa-plus-circle" arial-hidden="true"></i></center>
            </a>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                <center> <div class="card-body">Pemasukan</div></center>
                    <div class="card-footer d-flex align-items-center justify-content-center">
                    <center><a class="small text-white stretched-link" href="pemasukan">Cek</a></center>  
                        
                    </div>
                </div>
            </div>
        

            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                <center><div class="card-body">Pengeluaran</div></center>  
                    <div class="card-footer d-flex align-items-center justify-content-center">
                    <center> <a class="small text-white stretched-link" href="pengeluaran">Cek</a></center>
                        
                    </div>
                </div>
            </div>
    
        </div>
    
            </div>
        </div>
    </div>
</main>
@endsection