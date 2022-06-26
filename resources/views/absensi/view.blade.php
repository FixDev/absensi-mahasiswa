@extends('layout.admin')
@section('title', 'Absensi')

@section('content')

<div class="row">
    <div class="col-8">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <h6 class="mb-0">Detail Absensi</h6>
                    </div>
                </div>
            </div>
            <div class="card-body p-3 pb-0">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark font-weight-bold text-sm">{{$absensi->nama}}</h6>
                            <span class="text-xs">{{$absensi->waktu}}</span>
                        </div>
                        <div class="d-flex align-items-center text-md">
                            {{$absensi->mahasiswa->nama}} - {{$absensi->mahasiswa->nim}}
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="/absensi">Kembali</a>
            </div>
        </div>
    </div>
</div>

<script>
    // Add active class to the current button (highlight it)
    var current = document.getElementsByClassName("nav-link text-white");
    current[0].className = current[0].className.replace(" active bg-gradient-primary", "");
    current[3].className += " active bg-gradient-primary"
</script>
@endsection
