@extends('layout.admin')

@section('title', 'Absensi')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Table Absensi - {{$absensi[0]->mahasiswa->nama}}</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="d-flex align-items-end flex-column">
                    <a class="btn btn-warning btn-lg mx-3" href="/absensi/create">
                        <i class="material-icons text-lg">add</i>
                        Tambah</a>
                </div>
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Waktu</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIM</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Matkul</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($absensi as $abs) {
                            ?>
                                <tr>
                                    <td class="align-middle text-center text-sm">{{$no}}</td>
                                    <td class="align-middle text-center text-sm">{{$abs->waktu}}</td>
                                    <td class="align-middle text-center text-sm">{{$abs->nim}}</td>
                                    <td class="align-middle text-center text-sm">{{$abs->status}}</td>
                                    <td class="align-middle text-center text-sm">{{$abs->matkul->nama}}</td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Add active class to the current button (highlight it)
    var current = document.getElementsByClassName("nav-link text-white");
    current[0].className = current[0].className.replace(" active bg-gradient-primary", "");
    current[1].className += " active bg-gradient-primary"
</script>

@endsection
